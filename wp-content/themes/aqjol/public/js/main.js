/**
 * Created by serg on 21.04.16.
 */
$('[ data-target="#galleryModal"]').click(function(){
    $('.modal-body .img-responsive').attr('src',$(this).find('img').attr('src')).data('current',$(this).find('img').data('id'));
});
$('#pref').click(function() {
    var img = $('.modal-body .img-responsive');
    var current = img.data('current');
    var gall = $('#' + $('.tab-pane.active').attr('id'));
    var max_img = gall.find('img').length;
    if (current === 0) {
        var src = gall.find('[data-id="' + (max_img - 1) + '"]').attr('src');
        slide(img,src,500,(max_img - 1));
    }
    else {
        var pref = gall.find('[data-id="' + (current - 1) + '"]').attr('src');
        slide(img,pref,500,(current - 1));

    }
    return false;
});
$('#next').click(function() {
    var img = $('.modal-body .img-responsive');
    var current = img.data('current');
    var gall = $('#' + $('.tab-pane.active').attr('id'));
    var max_img = gall.find('img').length;
    if (current === (max_img - 1)) {
        var src = gall.find('[data-id="' + 0 + '"]').attr('src');
        slide(img,src,500,0);
    }
    else {
        var pref = gall.find('[data-id="' + (current + 1) + '"]').attr('src');
        slide(img,pref,500,(current + 1));

    }
    return false;
});

function slide(obj,src,fade,surrent)
{
    $('.modal-body').slideToggle(fade).after(function(){
          setTimeout(function(){obj.attr('src', src).data('current', surrent);
            $('.modal-body').slideToggle(fade)},fade);

    });


}