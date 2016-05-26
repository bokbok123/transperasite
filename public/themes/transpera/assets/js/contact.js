
$(document).ready(function(){

    $('#textAreaField').slimScroll({
        alwaysVisible:  true,
        color:          '#028b73',
        distance:       '5px',
        height:         '125px',
        railColor:      '#a2a09f',
        size:           '3px'
    });

    $('#textAreaField').on('mouseenter',function(){
        $.fn.fullpage.setMouseWheelScrolling(false);
        $.fn.fullpage.setAllowScrolling(false);
    });
    $('#textAreaField').on('mouseleave',function(){
        $.fn.fullpage.setMouseWheelScrolling(true);
        $.fn.fullpage.setAllowScrolling(true);
    });
    australiaMap();

    $("#frmContact").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            concern: {
                required: true
            }
        },messages: {
            email: {
                required: "",
                email: "xxx"
            },
            concern: {
                required: ""
            }
        },
        errorPlacement: function(error, element) {
            console.log(element.attr('id'));
            if(element.attr('id') == "textarea1"){
                $(element).parent().addClass('error');
            }
            if(error.html() == "xxx"){
                var message = 'Unable to proceed. Email should be in correct format.';
                message = '<i class="material-icons" id="error-icon">error</i>' + message;
                $("#registration-error-field").html(message);
                $("div#registration-error-field").show();
            }
        },
        invalidHandler: function(event, validator) {
            // 'this' refers to the form
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'Unable to proceed. Fill up the required field.'
                    : 'Unable to proceed. Fill up the required fields.';
                message = '<i class="material-icons" id="error-icon">error</i>' + message;
                $("#registration-error-field").html(message);
                $("div#registration-error-field").show();
            } else {
                $("div#registration-error-field").hide();
            }
        }
    });

    /*AJAX FORM SUBMIT*/
    var options = {
        beforeSubmit: function()
        {},
        success: function(response)
        {
            if(response.result == 0){
                $('#registration-error-field').show();
                $('#registration-error-field').html('<i id="error-icon" class="material-icons">error</i>Unable to proceed. Please confirm the reCAPTCHA.');
            }
            else {
                $('#modal1').openModal();
            }
        },
        complete: function()
        {},
        error: function()
        {}
    };
    $("#frmContact").ajaxForm(options);

    var validator = $("#frmContact").validate();
    validator.resetForm();

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

    $(".noSpecialCharacter").keypress(function(e){
        e = e || event;
        return /^[.' a-z-ñÑ]+$/i.test(String.fromCharCode(e.charCode || e.keyCode))
            || !!(!e.charCode && ~[8,9,37,39,46].indexOf(e.keyCode));
    });

    function australiaMap()
    {
        $(".contacts").hide();
        $("#AU-c").show();
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
        $(".contacts").hide();
        $("#PH-c").show();
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
        $(".contacts").hide();
        $("#US-c").show();
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


