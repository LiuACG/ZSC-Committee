/**
 * Created by LiuACG on 2017/2/26.
 */

;$(function () {
    var resize = function() {
        var qr = document.getElementsByClassName('qr-code')[0];
        qr.style.top = ((window.innerHeight - 260) / 2) + 'px';
    };
    resize();

    window.onresize = resize;
});