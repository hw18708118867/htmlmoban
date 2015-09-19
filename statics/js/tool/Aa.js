function zm_shouzimudaxie() {
    zm_tihuanneirong(document.getElementById("zm_neirong").value.replace(/\b\w+\b/g, function (a) {
        return a.substring(0, 1).toUpperCase() + a.substring(1)
    }))
}
function zm_quanbudaxie() {
    zm_tihuanneirong(document.getElementById("zm_neirong").value.toUpperCase())
}
function zm_quanbuxiaoxie() {
    zm_tihuanneirong(document.getElementById("zm_neirong").value.toLowerCase())
}
function zm_tihuanneirong(a) {
    //if (location.hostname.indexOf("0.") > 2) {
        document.getElementById("zm_neirong").value = a
    //}
};