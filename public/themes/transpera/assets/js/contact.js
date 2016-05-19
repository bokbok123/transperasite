
$(document).ready(function(){
    australiaMap();

    $(".auDivContact").on('click',function(){
        $('.country-button').removeClass('active');
        $(this).addClass('active');
        australiaMap();
    });

    $(".phDivContact").on('click',function(){
        $('.country-button').removeClass('active');
        $(this).addClass('active');
        philippinesMap();
    });

    $(".chiDivContact").on('click',function(){
        $('.country-button').removeClass('active');
        $(this).addClass('active');
        chicagoMap();
    });

    function australiaMap()
    {
        //set latitude and longitude of starting centre point
        var myLat = -33.865143;
        var myLon = 151.209900;

        var latlng = new google.maps.LatLng(myLat, myLon);
        //set options for initial view
        var myOptions = {
            zoom: 4,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        //put the map into your specified div. in this case "map_canvas".
        var map = new google.maps.Map(document.getElementById("map"), myOptions);

        //set a marker at the centre point
//        var marker = new google.maps.Marker({
//            position: latlng,
//            title:"Display Me When Hovering Over Marker"
//        });

        // To add the marker to the map, call setMap();
//        marker.setMap(map);
    }

    function philippinesMap()
    {
        //set latitude and longitude of starting centre point
        var myLat = 14.617290;
        var myLon = 121.059311;

        var latlng = new google.maps.LatLng(myLat, myLon);
        //set options for initial view
        var myOptions = {
            zoom: 5,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        //put the map into your specified div. in this case "map_canvas".
        var map = new google.maps.Map(document.getElementById("map"), myOptions);

        //set a marker at the centre point
//        var marker = new google.maps.Marker({
//            position: latlng,
//            title:"Display Me When Hovering Over Marker"
//        });

        // To add the marker to the map, call setMap();
//        marker.setMap(map);
    }

    function chicagoMap()
    {
        //set latitude and longitude of starting centre point
        var myLat = 41.881832;
        var myLon = -87.623177;

        var latlng = new google.maps.LatLng(myLat, myLon);
        //set options for initial view
        var myOptions = {
            zoom: 5,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        //put the map into your specified div. in this case "map_canvas".
        var map = new google.maps.Map(document.getElementById("map"), myOptions);

        //set a marker at the centre point
//        var marker = new google.maps.Marker({
//            position: latlng,
//            title:"Display Me When Hovering Over Marker"
//        });

        // To add the marker to the map, call setMap();
//        marker.setMap(map);
    }

});


