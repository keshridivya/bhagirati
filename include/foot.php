    <!-- All jquery file included here -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init({
    duration: 1400,
  })
</script>

    
    <!--Google Map Active-->
    <script>
        // jQuery(document).ready(function ($) {

        //     var gmMapDiv = $("#htmap");

        //     (
        //         function ($) {

        //             if (gmMapDiv.length) {

        //                 var gmHeight = gmMapDiv.attr("data-height");
        //                 var gmWidth = gmMapDiv.attr("data-width");
        //                 var gmZoomEnable = gmMapDiv.attr("data-zoom_enable");
        //                 var gmZoom = gmMapDiv.attr("data-zoom");
        //                 gmMapDiv.width(gmWidth).height(gmHeight);
        //                 gmMapDiv.gmap3({
        //                     action: "init",
        //                     marker: {
        //                         values: [{
        //                                 address: "43.010154, -76.151840",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New York Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     icon: "http://conebrick.thememove.com/wp-content/themes/conebrick/assets/images/map_marker.png",

        //                                     visible: false,
        //                                 }
        //                             },
        //                             {
        //                                 address: "40.518844, -74.377268",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     icon: "http://conebrick.thememove.com/wp-content/themes/conebrick/assets/images/map_marker.png",

        //                                     visible: false,
        //                                 }
        //                             },
        //                             {
        //                                 address: "34.056556, -118.396279",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">Los Angeles Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     icon: "http://conebrick.thememove.com/wp-content/themes/conebrick/assets/images/map_marker.png",

        //                                     visible: false,
        //                                 }
        //                             },
        //                         ],
        //                         events: {
        //                             click: function (marker, event, context) {
        //                                 if (context.data == 0) {
        //                                     return;
        //                                 }
        //                                 var map = $(this).gmap3("get");
        //                                 infowindow = $(this).gmap3({
        //                                     get: {
        //                                         name: "infowindow"
        //                                     }
        //                                 });
        //                                 if (infowindow) {
        //                                     infowindow.open(map, marker);
        //                                     infowindow.setContent(context.data);
        //                                 } else {
        //                                     $(this).gmap3({
        //                                         infowindow: {
        //                                             anchor: marker,
        //                                             options: {
        //                                                 content: context.data
        //                                             }
        //                                         }
        //                                     });
        //                                 }
        //                             }
        //                         }

        //                     },
        //                     overlay: {
        //                         values: [{
        //                                 address: "43.010154, -76.151840",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New York Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     content: '<div><div class="animated-dot">' +
        //                                         '<div class="middle-dot"></div>' +
        //                                         '<div class="signal"></div>' +
        //                                         '<div class="signal2"></div>' + '</div></div>',
        //                                 }
        //                             },
        //                             {
        //                                 address: "40.518844, -74.377268",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     content: '<div><div class="animated-dot">' +
        //                                         '<div class="middle-dot"></div>' +
        //                                         '<div class="signal"></div>' +
        //                                         '<div class="signal2"></div>' + '</div></div>',
        //                                 }
        //                             },
        //                             {
        //                                 address: "34.056556, -118.396279",
        //                                 data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">Los Angeles Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
        //                                 options: {
        //                                     content: '<div><div class="animated-dot">' +
        //                                         '<div class="middle-dot"></div>' +
        //                                         '<div class="signal"></div>' +
        //                                         '<div class="signal2"></div>' + '</div></div>',
        //                                 }
        //                             },
        //                         ],
        //                         events: {
        //                             click: function (overlay, event, context) {
        //                                 if (context.data == 0) {
        //                                     return;
        //                                 }
        //                                 var map = $(this).gmap3("get");
        //                                 infowindow = $(this).gmap3({
        //                                     get: {
        //                                         name: "infowindow"
        //                                     }
        //                                 });
        //                                 if (infowindow) {
        //                                     infowindow.open(map, overlay);
        //                                     infowindow.setContent(context.data);
        //                                 } else {
        //                                     $(this).gmap3({
        //                                         infowindow: {
        //                                             anchor: overlay,
        //                                             options: {
        //                                                 content: context.data
        //                                             }
        //                                         }
        //                                     });
        //                                 }
        //                             }
        //                         }
        //                     },
        //                     map: {
        //                         options: {
        //                             zoom: parseInt(gmZoom),
        //                             zoomControl: true,
        //                             mapTypeId: google.maps.MapTypeId.ROADMAP,
        //                             mapTypeControl: false,
        //                             scaleControl: false,
        //                             scrollwheel: gmZoomEnable == 'enable' ? true : false,
        //                             streetViewControl: false,
        //                             draggable: true,
        //                             styles: [{
        //                                 "stylers": [{
        //                                     "hue": "#ff1a00"
        //                                 }, {
        //                                     "invert_lightness": true
        //                                 }, {
        //                                     "saturation": -100
        //                                 }, {
        //                                     "lightness": 33
        //                                 }, {
        //                                     "gamma": 0.5
        //                                 }]
        //                             }, {
        //                                 "featureType": "water",
        //                                 "elementType": "geometry",
        //                                 "stylers": [{
        //                                     "color": "#2D333C"
        //                                 }]
        //                             }],
        //                         }
        //                     }
        //                 });
        //             }
        //         }
        //     )(jQuery);
        // });
    </script>
    <!--Google Map-->
    <script src="../../maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8&callback=myMap"></script>
