// JavaScript Document
(function() {
    window._CiQ10635 = window._CiQ10635 || [];
    window._CiQ10635.push(['_cookieUseRootDomain', true]);
    var c = document.createElement('script');
    c.type = 'text/javascript';
    c.async = true;
    c.charset = 'utf-8';
    c.src = '//collect.cn.miaozhen.com/ca/10635';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(c, h);
})();

function addTrace(btnName) {
    window._CiQ10635 = window._CiQ10635 || [];
    window._CiQ10635.push(['_trackEvent', {
        type: 2,
        labels: [
            { '按钮名称': btnName }
        ],
        values: [
            { '数量': 1 }
        ]
    }]);
    window.CClickiV3 && window.CClickiV3[10635] && window.CClickiV3[10635]._flushObserver(function () { });
}
function addPV(pname) {
    window._CiQ10635 = window._CiQ10635 || [];
    window._CiQ10635.push(['_trackEvent', {
        type: 1,
        labels: [
            { '页面名称': pname }
        ],
        values: [
            { '数量': 1 }
        ]
    }]);
    window.CClickiV3 && window.CClickiV3[10635] && window.CClickiV3[10635]._flushObserver(function () { });
}
//分享微博
$(".sharesina").click(function () {
    var src = location.href;
    src = src.substring(0, src.lastIndexOf("/") + 1);
    window.open('http://service.t.sina.com.cn/share/share.php?url=' + encodeURIComponent(document.location.href) + '&appkey=&title=' + encodeURIComponent('别说你见过所有的ZX FLUX，快来体验FLUX的世界！@adidasOriginals') + '&pic=' + encodeURIComponent(src + '/imgs/weibo.jpg') + '&ralateUid=&searchPic=false', '_blank', 'scrollbars=no,width=600,height=450,left=75,top=20,status=no,resizable=yes');
});