new Vue({
  el:'#demo',
  data:{
    names:['Juan','Chacón','Pedro','Pepe'],
  },
  methods:{
    addName:function(){
      this.names.push(this.newName);
      this.newName = '';
    }
  }
});
