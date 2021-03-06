/**
 * Created by jermaine.galman on 5/18/16.
 */
$(document).ready(function(){
    /*window.location.href = "#transpera";*/
    $(".button-collapse").sideNav();
    $('#fonebayadFullPage').fullpage({
        menu: '#menu',
        anchors: ['transpera','about','feats','career','announcements','contact-us'],
        controlArrows: true
    });
    $('.job-description-container').slimScroll({
        alwaysVisible:  true,
        color:          '#028b73',
        distance:       '5px',
        height:         '100%',
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
    $('.modal, .lean-overlay').on('mouseenter',function(){
        $.fn.fullpage.setMouseWheelScrolling(false);
        $.fn.fullpage.setAllowScrolling(false);
    });
    $('.modal, .lean-overlay').on('mouseleave',function(){
        $.fn.fullpage.setMouseWheelScrolling(true);
        $.fn.fullpage.setAllowScrolling(true);
    });
    var height = $('.careers-container').parent().height() - 200;
    $('.careers-container').parent().css('height',height+'px').css('padding-top','120px').css('padding-bottom','80px');
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
        if(location.hash == "#contact-us"){
            $('div#registration-error-field').hide();
            $('.nextPageContainer').fadeOut();
            var validator = $("#frmContact").validate();
            validator.resetForm();
        } else {
            $('.nextPageContainer').fadeIn();
        }
    };

    $('.modal-trigger').leanModal();
});
