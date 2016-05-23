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
    $('.job-description-container').slimScroll({
        alwaysVisible:  true,
        color:          '#028b73',
        distance:       '5px',
        height:         '50vh',
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
        console.log($(this).attr('id'));
        console.log($(this).html());
    });
});
