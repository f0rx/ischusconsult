(function ($) {
    "use strict";

    // Instagram feed setup

    var instaFeed = new Instafeed({
        get: "user",
        userId: "8622487563",
        accessToken: "8622487563.239aaa2.9a0babde2b4247bfbcaf2fe06a55622e",
        limit: 5,
        resolution: "standard_resolution",

        template: '<li><a href="{{link}}"><img src="{{image}}"/></a></li>',
    });
    instaFeed.run();

    // Google map location

    var styles = [
        {
            stylers: [{ saturation: -100 }],
        },
        {
            featureType: "road",
            elementType: "geometry",
            stylers: [{ hue: "#74b7b0" }, { visibility: "simplified" }],
        },
        {
            featureType: "road",
            elementType: "labels",
            stylers: [{ visibility: "on" }],
        },
    ],
        lat = -33.867487,
        lng = 151.20699,
        customMap = new google.maps.StyledMapType(styles, {
            name: "Styled Map",
        }),
        mapOptions = {
            zoom: 14,
            scrollwheel: false,
            disableDefaultUI: true,
            center: new google.maps.LatLng(lat, lng),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP],
            },
        },
        map = new google.maps.Map(document.getElementById("map"), mapOptions),
        myLatlng = new google.maps.LatLng(lat, lng),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: {
                url: "img/marker.png",
                scaledSize: new google.maps.Size(36, 58),
            },
        });
    map.mapTypes.set("map_style", customMap);
    map.setMapTypeId("map_style");
})(jQuery);
