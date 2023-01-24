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
        $(this).parent('.tab-image3').parent('.carslider').parent('.row').children('.tab-image4').children('img').attr('src',image);
    });
   
    setInterval(function() {
      var active = $('div .image-active');
      active.removeClass('image-active');
      active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
      let active1=active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
      let aatr=active1.attr('src');

      if (active.parent().next('div').children('.tab-image-slider1').length == 0) {
        active.parent('.tab-image3').parent('.carslider').find('.tab-image3:first').children('.tab-image-slider1').addClass('image-active');
        let active2=$('.image-active').parent('.tab-image3').parent('.carslider').find('.tab-image3:first').children('.tab-image-slider1').addClass('image-active');
        let aat1=active2.attr('src');
        $('.image-active').parent('.tab-image3').parent('.carslider').parent('.row').children('.tab-image4').children('img').attr('src',aat1);
      } else {
        active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
      }
      $('.image-active').parent('.tab-image3').parent('.carslider').parent('.row').children('.tab-image4').children('img').attr('src',aatr);
    }, 4000);

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

  $(document).on('click','.img1',function(){
   let image1=$(this).data('image1');
   let image2=$(this).data('image2');
   let image3=$(this).data('image3');
   let image4=$(this).data('image4');
   let map=$(this).data('map');
   let possession=$(this).data('possession');
   let years=$(this).data('years');

   $('.image_1').attr('src',image1);
   $('.image_2').attr('src',image2);
   $('.image_3').attr('src',image3);
   $('.image_4').attr('src',image4);
   $('#iframemap').attr('src',map);
   $('.posses').html(possession);
   $('.years').html(years);
   $(this).parent('div').parent('.slick-track').children('div').children('img').removeClass('image-active');
   $(this).addClass('image-active');

  });
