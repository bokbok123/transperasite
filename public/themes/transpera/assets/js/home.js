/**
 * Created by jermaine.galman on 5/18/16.
 */
$(document).ready(function(){
    $(".button-collapse").sideNav();
    $('#fonebayadFullPage').fullpage({
        menu: '#menu',
        anchors: ['transpera','about','feats','career','partners','announcements','contact-us'],
        controlArrows: false
    });
    /*$('.careers-container').parent().css('padding-top','100px');*/
    $('.job-description-container').slimScroll({
        alwaysVisible:  true,
        color:          '#028b73',
        distance:       '5px',
        height:         '40vh',
        railColor:      '#a2a09f',
        size:           '3px'
    });
    $('.sidenavUl li').on('click','a',function(){
        $('li').removeClass('active');
        $(this).parent().addClass('active');
    });
    $('.job-description').on('mouseenter',function(){
        $.fn.fullpage.setMouseWheelScrolling(false);
        $.fn.fullpage.setAllowScrolling(false);
    });
    $('.job-description').on('mouseleave',function(){
        $.fn.fullpage.setMouseWheelScrolling(true);
        $.fn.fullpage.setAllowScrolling(true);
    });
    $('.job-title .tabs').on('click','a',function(){
        var id = $(this).attr('href');
        $('.job-description .slimScrollDiv').hide();
        $('.job-description .slimScrollDiv ' + id).show();
        $('.job-description .slimScrollDiv ' + id).parent().show();
    });
    $('#nextPage').on('click',function(){
        $.fn.fullpage.moveSectionDown();
    });
    window.onhashchange = function(){
        console.log(location.hash);
        if(location.hash == "#contact-us"){
            $('.nextPageContainer').fadeOut();
        } else {
            $('.nextPageContainer').fadeIn();
        }

    };
});
