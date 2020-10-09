
  
   
  const data= {
    title: 'Bienvenue sur mon site'

}
const vm = new Vue ({
el: '#app',
data: data,
methods:{
 show: function(){

    console.log(this.title)
 }

}

})

setTimeout(function(){//fonction anonyme
  
data.title = "Decouvrir" 

}, 3000)

vm.show()