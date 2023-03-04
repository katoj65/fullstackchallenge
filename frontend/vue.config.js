const { defineConfig } = require('@vue/cli-service');
module.exports = defineConfig({
devServer:{
proxy:'https://goweather.herokuapp.com/weather/',

}







  });
