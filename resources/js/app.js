
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});

$(document).ready(function () {

  $(".next").click(nextImg);
  $(".prev").click(prevImg);

 //  $(document).keydown(function(press) {
 //     if (event.keyCode == 39) {
 //         nextImg()
 //     } else if (event.keyCode == 37) {
 //         prevImg();
 //     }
 // });

  function nextImg() {

    var imgActive = $("img.active");
    imgActive.removeClass("active");

    if (imgActive.hasClass("last")){
      $("img.first").addClass("active");
    } else {
      imgActive.next("img").addClass("active");
    }

    var circleActive = $("i.active");
    circleActive.removeClass("active");
    if (circleActive.hasClass("last")) {
      $("i.first").addClass("active");
    }else {
     circleActive.next("i").addClass("active");
    }

  }

  function prevImg() {

    var imgActive = $("img.active");
    imgActive.removeClass("active");

    if (imgActive.hasClass("first")){
      $("img.last").addClass("active");
    } else {
      imgActive.prev("img").addClass("active");
    }

    var circleActive = $("i.active");
    circleActive.removeClass("active");
    if (circleActive.hasClass("first")) {
      $("i.last").addClass("active");
    }else {
     circleActive.prev("i").addClass("active");
    }

  }

  $("i.fa-circle").click(function () {

    $(".nav > .active").removeClass("active");
    $(this).addClass("active");
    var clicked = $(this).index();
    $("div.active").removeClass("active");
    var imgSelect = $(".images > .carousel-box");
    var imgShow = ".carousel-box:nth-child(" + (clicked + 1) + ")";
    $(imgShow).addClass("active");

  })



}); // fine document ready
