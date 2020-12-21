/*!
    * Start Bootstrap - Agency v6.0.2 (https://startbootstrap.com/template-overviews/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict
//////ACCUEIL PROFIL
$(document).on("ready", () => {


    $("#edit2").on("click", function(){
      $("#edit").modal();
    });
  });

  $(document).on("ready", function(){
    $("#edit2").on("click", function(){
      $("#edit").modal();
    });
  });


  $('.carousel').carousel({
    interval: 2000
  })

  $(document).ready(function(){
    $("#cont").click(function(){
      $("#logs").modal();
    });
  });

  $(document).ready(function(){
    $("#cont").click(function(){
      $("#logs").modal();
    });
  });



  $( "#regi" ).click(function() {
    $( "#logs" ).hide(function() {
      // Animation complete.
    });
  });


//////ACCEUIL DASBOARD///////////
  window.setTimeout(function () {
    $("#myHome").modal("show");

}, 1000);

$("#myBtn").on('click',() => {
  $("#myModal").modal();
});




$( "#hide" ).click(function() {
    $( "#tab" ).hide(function() {
      // Animation complete.
    });
  });


$( "#clos" ).click(function() {
    $( "#tab" ).show(function() {
    });

  });


  $( "#clos" ).click(function() {
    $( "#tab" ).show(function() {

    });

  });


  $('#formation').click(function(){
    $('#formation1').show(1000, function(){

    });
  });

  $('#exp').click(function(){
    $('#exp1').show(1000, function(){

    });
  });

  $('#soft').click(function(){
    $('#soft1').show(1000, function(){

    });
  });

  $('#com').click(function(){
    $('#com1').show(1000, function(){

    });
  });

  $('#exp').click(function(){
    $('#exp1').show(1000, function(){

    });
  });


  //Affiche tableau sur le dashboard

  $( "#afficheTab" ).click(function() {
    $( "#tab" ).show(function() {
      // Animation complete.
    });
  });




  $( "#cacheEdit" ).click(function() {
    $( "#show" ).hide(function() {
      // Animation complete.
    });
  });

  $( "#openEdit" ).click(function() {
    $( "#show" ).show(function() {
      // Animation complete.
    });
  });


  $( "#afficheTab" ).click(function() {
    $( "#affi" ).show(function() {

    });
  });


   //SECTION MESSAGES//////////////////
  $('#moi').click(function(){
    $('#ris').show(1000, function(){

    });
  });

  $('#mickael').on('click',() =>{
    $('#mic').show(1000, function(){

    });
  });

  $('#thierry').on('click',() =>{
    $('#th').show(1000,() =>{

    });
  });


$( "#afficheBoutton" ).click(function() {
    $( "#hide" ).hide(function() {
      // Animation complete.
    });
  });

  $( ".btn-info" ).click(function() {
    $( "#tab" ).hide(function() {
      // Animation complete.
    });
  });
  $( '#openEdit' ).click(function() {
    $( "#tab" ).show(function() {
      // Animation complete.
    });
  });



  //BOUTON MESSAGE //

  $( "#voir" ).on('click',function() {
    $( "#boutonEcrireMessage" ).show(function() {

      // Animation complete.
    });
  });

///EDIT HOME
$(function() {
for( let i in messages){
  console.log("#voirEdit" + messages[i].id);

    $("#voirEdit" + messages[i].id).on("click", () => {
      $("#edit" + messages[i].id).modal();
    });
}
});


$(document).ready(function(){
  $("#connecter").click(function(){
    $(".modal").addClass(".modal");

  });
});




const myBtn= document.getElementById("myBtn");

window.setTimeout(function()
{

    myBtn.style.display = "block";

 }, 1000)



 $( '#openEdit' ).click(function() {
  $( "#tab" ).show(function() {
    // Animation complete.
  });
});



$( '#propos' ).click(function() {
  $( "#myModal2" ).show(function() {
    // Animation complete.
  });
});

$('#competences').on('click',() =>{
  $('#competencebar').toggle(1500,() =>{

  });
});

$('#softskills').on('click',() =>{
  $('#carousel').show(1500,() =>{

  });
});



$('#expe').on('click',() =>{
  $('#expe1').toggle(1500,() =>{

  });
});


$('#formations').on('click',() =>{
  $('#forma1').toggle(1500,() =>{

  });
});



$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
