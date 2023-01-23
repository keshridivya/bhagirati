$(document).ready(function(){
    $('.tab-image-slider').click(function(){
        let images=$(this).attr('src');
        $(this).addClass('image-active').siblings().removeClass('image-active');
        $(this).parent('.tab-image2').parent('.row').children('.tab-image1').children('img').attr('src',images);
    });

    $('div .tab-image-slider1').click(function(){
        let image=$(this).attr('src');
        $(this).parent('div').parent('.row').children('div').children('.tab-image-slider1').removeClass('image-active');
        $(this).addClass('image-active');
        $(this).parent('.tab-image3').parent('.row').children('.tab-image4').children('img').attr('src',image);
    });
});

   jQuery(function($) {
    var path = window.location.href; 
    // because the 'href' property of the DOM element is the absolute path
    $('.main-menu-ul li a').each(function() {
      if (this.href === path) {
        $(this).parent('li').addClass('active');
      }
    });
  });

  $('#contact-form').validate({
    rules:{
      name:{
        required:true,
        maxlength:50,
      },
      phone:{
        required:true,
        minlength:10,
        maxlength:10,
      },
      email:{
        required:true,
        email:true,
      },
      message:{
        required:true,
      },
    },

    messages:{
      email:{
        email:'Please enter valid email id. '
      }
    },
    errorClass: "text-danger error",
  });
