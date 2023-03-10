$(document).ready(function(){
    $('.tab-image-slider').click(function(){
        let images=$(this).attr('src');
        $(this).addClass('image-active').siblings().removeClass('image-active');
        $(this).parent('.tab-image2').parent('.row').children('.tab-image1').children('img').attr('src',images);
    });

    setInterval(function(){
          var active1 = $('.tab-image-slider.image-active');
          active1.removeClass('image-active');
          if (active1.next('.tab-image-slider').length == 0) {
            active1.parent('.tab-image2').find('.tab-image-slider:first').addClass('image-active');
            let activesrc1=active1.parent('.tab-image2').find('.tab-image-slider:first').addClass('image-active').attr('src');
            $('.tab-image-slider').parent('.tab-image2').parent('.row').children('.tab-image1').children('img').attr('src',activesrc1);
          } else {
            active1.next('.tab-image-slider').addClass('image-active');
            let activesrc=active1.next('.tab-image-slider').addClass('image-active').attr('src');
            $('.tab-image-slider').parent('.tab-image2').parent('.row').children('.tab-image1').children('img').attr('src',activesrc);
          }
    },1000)

    });


    $('.slider-single').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      fade: false,
      infinite: true,
    });
   
    $('.slider-nav')
      // .on('init', function(event, slick) {
      //   $('.slider-nav .slick-slide.slick-current').addClass('is-active');
      // })
      .slick({
        slidesToShow: 3,
        slidesToScroll: 3,
      autoplay: true,
        infinite: true,
      });

      // $(function(){
      //   $(".slider-single").slick({
      //     autoplay: true,
      //     speed: 1000,
      //     arrows: false,
      //     asNavFor: ".slider-nav"
      //   });
      //   $(".slider-nav").slick({
      //     slidesToShow: 3,
      //     slidesToScroll: 3,
      //     speed: 1000,    
      //     asNavFor: ".slider-single"
      //   });
      // });
   
    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
      $('.slider-nav').slick('slickGoTo', currentSlide);
      var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
      $('.slider-nav .slick-slide.is-active').removeClass('is-active');
      $(currrentNavSlideElem).addClass('is-active');
    });
   
    $('.slider-nav').on('click', '.slick-slide', function(event) {
      event.preventDefault();
      var goToSingleSlide = $(this).data('slick-index');
   
      $('.slider-single').slick('slickGoTo', goToSingleSlide);
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
