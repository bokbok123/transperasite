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
    $('.sidenavUl li').on('click','a',function(){
        $('li').removeClass('active');
        $(this).parent().addClass('active');
    })
});
