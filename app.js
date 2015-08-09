new Vue({
  el:'#demo',
  data:{
    names:['Juan','Chacón','Pedro','Pepe'],
  },
  methods:{
    onKeyUp:function(){
      alert('Key Up');
    },
    onBlur:function(){
      console.log('Blur');
    }
  }
});
