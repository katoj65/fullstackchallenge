
<script>
import axios from 'axios';
export default {
    props:{
    response:[],
    },

data(){return{
tableData:[],
dialogVisible:false,
modalContent:null



}},




methods:{
async payload(){
this.response.data.forEach(element => {
//get weather information
const wt=axios.get('https://api.open-meteo.com/v1/forecast?latitude='+element.lat+'&longitude='+element.long+'&current_weather=true&hourly=temperature_2m,relativehumidity_2m,windspeed_10m');
wt.then(res=>{
this.tableData.push({firstname:element.firstname,
lastname:element.lastname,
gender:element.gender,
weather:res});
}).catch(error=>{
this.tableData.push({firstname:element.firstname,
lastname:element.lastname,
gender:element.gender,
weather:null});
});


});



},

show_modal(item){
this.dialogVisible= true;
this.modalContent={
names:item.firstname+' '+item.lastname,
gender:item.gender,
weather:item.weather!=null?[
{id:1, name:'Temperature',value: item.weather.data.current_weather.temperature},
{id:2, name:'Timezone',value:item.weather.data.timezone},]:[]

};
}




},

mounted(){
this.payload();
},









}
</script>

<style scoped>
table th, table td{
text-align: center;
padding:10px;
text-transform: capitalize;
}



</style>

<template>
     <el-card class="box-card">






<!-----Modal-->
<el-dialog v-model="dialogVisible" title="User Weather Updates" width="30%" draggable>
<span>
<h1 style="text-align:center;">

{{ modalContent.names }}

</h1>
</span>
<div>
<table style="width:100%;" v-if="modalContent.weather!=null">
<tbody>
<tr v-for="w in modalContent.weather" :key="w.id">
<th>
{{ w.name }}
</th>
<td>
{{ w.value }}
</td>
</tr>
</tbody>
</table>
<div v-else>
Check your internet connection .
</div>
</div>
</el-dialog>


<!-----End modal-->




    <template #header>
      <div class="card-header">
        <h1>Welcome to the Weather Challenge Application</h1>
        <p>Users weather updates</p>
      </div>
    </template>
    <div>


<!-- {{ tableData}} -->


<table style="width:100%;">
<thead>
<tr>
<th>Names</th>
<th>Gender</th>
<th>Weather</th>
</tr>
</thead>

<tbody>
<tr v-for=" t in tableData" :key="t.id">
<td>

 {{ t.firstname }} {{ t.lastname }}


</td>
<td>
{{ t.gender}}
</td>
<td>
<div v-if="t.weather!=null">
<p>Tempreture: {{ t.weather.data.current_weather.temperature}}</p>
<div> <a href="#" @click="show_modal(t)">View Details</a></div>
</div>
<div v-else>
Connection error

</div>
</td>
</tr>
</tbody>
</table>
</div>








</el-card>
</template>




