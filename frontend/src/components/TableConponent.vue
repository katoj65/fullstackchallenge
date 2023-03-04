
<script>
import axios from 'axios';
export default {
    props:{
    response:[],
    },

data(){return{
tableData:[],



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
<th>First name</th>
<th>Last name</th>
<th>Gender</th>
<th>Weather</th>
</tr>
</thead>

<tbody>
<tr v-for=" t in tableData" :key="t.id">
<td>
{{ t.firstname }}
</td>

<td>
{{ t.lastname }}
</td>

<td>
{{ t.gender}}
</td>
<td>
<div v-if="t.weather!=null">
<p>Tempreture: {{ t.weather.data.current_weather.temperature}}</p>
<p>Timezone: {{ t.weather.data.timezone }} </p>
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




