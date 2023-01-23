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

// jQuery(function($) {
//     var path = window.location.href; 
//     $('.main-menu-ul li').each(function() {
//      if (this.href === path) {
//       $(this).addClass('active');
//      }
//     });
//    });

   jQuery(function($) {
    var path = window.location.href; 
    // because the 'href' property of the DOM element is the absolute path
    $('.main-menu-ul li a').each(function() {
      if (this.href === path) {
        $(this).parent('li').addClass('active');
      }
    });
  });
