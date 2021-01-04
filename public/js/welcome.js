
const cont= document.getElementById("cont");
const bienvenue=document.getElementById("bienvenue");
const img = document.querySelector(".moiprofil");
const vid=document.getElementById('myvideo');
const rismo = document.getElementById("rismo");


window.setTimeout(function()

{

    cont.style.display = "block";
    bienvenue.style.color = "red";
    img.style.display="block";
    bienvenue.innerHTML ="block";



 }, 1000)




 window.setTimeout(function()

{


   img.classList.replace("moiprofil", "moiprofil2");


 }, 4000)


 window.setTimeout(function()

{




   rismo.style.color="white";
   cont.style.display = "none";
   bienvenue.innerHTML ="block";
 }, 7000)






 $(document).ready(function(){
    setTimeout(function(){
      $("h1").slideUp(2000).slideDown(2000) ;




    }, 1000);
  });
  $(document).ready(function(){
    setTimeout(function(){
      $("img").slideUp(2000).slideDown(2000);

    }, 3000);

  });





  $(document).ready(function(){
    setTimeout(function(){
   

    $("#zic").slideUp(2000).slideDown(2000);


    }, 7000);
  });





  $(document).ready(function(){
    setTimeout(function(){

      $("h2").slideUp(2000).slideDown(2000);



    }, 4000);
  });
  $(document).ready(function(){
    setTimeout(function(){

      $("#vid").slideUp(1000).slideDown(2000);



    }, 7000);
  });
  $(document).ready(function(){
    setTimeout(function(){

      $("#rismo").css('color','black');



    }, 9000);
  });


