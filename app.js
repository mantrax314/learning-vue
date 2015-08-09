new Vue({
  el:'#demo',
  data:{
    name:'cool',
  },
  ready:function(){
    that = this;
    setInterval(function(){
      that.name='Updated';
    },5000);
  },
});
