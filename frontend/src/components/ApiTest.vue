<script>
import TableComponent from './TableConponent.vue';
import axios from 'axios';
export default {
components:{
TableComponent,


},
  data: () => ({
    apiResponse: null,
    response:{},
    isLoading:false,
  }),

  created() {
    this.fetchData()
  },

  methods: {
    async fetchData() {
      const url = 'http://127.0.0.1:8001/api/test'
      this.apiResponse = await (await fetch(url)).json()
    },

fetchContent(){
this.isLoading=true;
const options = {
  method: 'GET',
  url: 'https://weatherbit-v1-mashape.p.rapidapi.com/forecast/minutely',
  params: {lat: '0.347596', lon: '32.582520'},
  headers: {
    'X-RapidAPI-Key': '379aa8032emsh319a6379f280c15p1f9643jsn84afeb814186',
    'X-RapidAPI-Host': 'weatherbit-v1-mashape.p.rapidapi.com'
  }
};




axios.request(options).then(response=>{
this.isLoading=false;
response.data.data.forEach(element => {
// this.response=element;
});


}).catch(error=>{
alert(error);
});
},


//fetch users
async fetchUsers(){
this.isLoading=true;
axios.get('http://127.0.0.1:8000/api/').then(response=>{
this.isLoading=false;
this.response=response.data;
}).catch(error=>{
alert(error);
});


}




    },








mounted(){
// this.fetchContent();
this.fetchUsers();
}



}
</script>
<style scoped>
.sidebar{
background:skyblue;
min-height:800px;

}

.sidebar h3{
text-align: center;
}
</style>
<template>

  <div>


<!-- {{ response }} -->


  <div class="common-layout" style="height:600px;margin:-10px;">
    <el-container>
      <el-aside width="200px" class="sidebar">
      <h3>Weather Challenge</h3>
      <div style="padding:20px;">
      <p><strong>By</strong><br/><br/> Joshua Kato</p>
      <p>katoj65@gmail.com</p>
      <p>Tel: +256 752567534</p>
      <p><a href="https://twitter.com/katojosh" target="blank">Twitter</a></p>
      <p><a href="https://www.linkedin.com/in/joshua-kato-3b09966a/" target="blank">LinkedIn</a> </p>
      <p><a href="http://afrodjangoinitiatives.org/" target="blank">Website</a></p>
      </div>
      </el-aside>
      <el-main class="main demo-border">

<div v-if="isLoading==false">
<table-component :response="response" v-if="response.count>0 && response.status===true"></table-component>
<div v-else>No records</div>
</div>
<div v-else style="text-align:center;padding:20px;">
Loading ......
</div>

      </el-main>
    </el-container>
  </div>


  </div>
</template>
