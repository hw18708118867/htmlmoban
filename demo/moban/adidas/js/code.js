/**
 * Created by Administrator on 15-8-3.
 */
$(function(){
    //addPV("page:" + $('body').attr("data-t"));
    $(".clicktrack").click(function () {
        if (!$(this).attr("data-t")) return;
        addTrace("button:" + $(this).attr("data-t"));
    });
    //产品监测 2015
    $(".clicktrack_2015").click(function () {
        if (!$(this).attr("data-n")) return;
        addTrace("产品:" + $(this).attr("data-n"));
    });
    $(".clicktrack_2014").click(function () {
        if (!$(this).attr("data-p")) return;
        addTrace("产品:" + $(this).attr("data-p"));
    });
})
