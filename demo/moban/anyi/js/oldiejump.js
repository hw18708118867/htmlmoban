/**
 * Created by Administrator on 15-8-7.
 */
var _IE = (function(){
    var v = 3, div = document.createElement('div'), all = div.getElementsByTagName('i');
    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
            all[0]
        );
    return v > 4 ? v : false ;
}());
if (_IE !== false && _IE < 9 ) {
    window.location.href='#'
}