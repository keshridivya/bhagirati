$(document).ready(function(){
    $('.tab-image-slider').click(function(){
        let images=$(this).attr('src');
        $(this).addClass('image-active').siblings().removeClass('image-active');
        $(this).parent('.tab-image2').parent('.row').children('.tab-image1').children('img').attr('src',images);
    });
   
    // setInterval(function() {
    //   var active = $('div .image-active');
    //   active.removeClass('image-active');
    //   active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
    //   let active1=active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
    //   let aatr=active1.attr('src');

    //   if (active.parent().next('div').children('.tab-image-slider1').length == 0) {
    //     active.parent('.tab-image3').parent('.carslider').find('.tab-image3:first').children('.tab-image-slider1').addClass('image-active');
    //     let active2=$('.image-active').parent('.tab-image3').parent('.carslider').find('.tab-image3:first').children('.tab-image-slider1').addClass('image-active');
    //     let aat1=active2.attr('src');
    //     $('.image-active').parent('.tab-image3').parent('.carslider').parent('.row').children('.tab-image4').children('img').attr('src',aat1);
    //   } else {
    //     active.parent().next('div').children('.tab-image-slider1').addClass('image-active');
    //   }
    //   $('.image-active').parent('.tab-image3').parent('.carslider').parent('.row').children('.tab-image4').children('img').attr('src',aatr);
    // }, 4000);

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
     autoplaySpeed: 2000,
      arrows: false,
      fade: false,
      adaptiveHeight: true,
      infinite: false,
     useTransform: true,
      speed: 400,
      cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });
   
    $('.slider-nav')
      .on('init', function(event, slick) {
        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
      })
      .slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
      autoplay: true,
     autoplaySpeed: 2000,
        focusOnSelect: false,
        infinite: false,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
          }
        }, {
          breakpoint: 640,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
         }
        }, {
          breakpoint: 420,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
       }
        }]
      });
   
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
