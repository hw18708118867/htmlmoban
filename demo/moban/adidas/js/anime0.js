/**
 * Created by Administrator on 15-8-3.
 */
var play2014index = 0, stop2014Animate, start2014Animate;
$(function () {
    $(".bganimate2014").height($(window).height());
    var key = [{ name: "dl", count: 7 }, { name: "dr", count: 4 }, { name: "ul", count: 4 }, { name: "ur", count: 8 }],
        l1rect = { minx: 0, width: $(".bganimate2014").width(), height: 300, miny: -500 },
        l2rect = { minx: $(".bganimate2014").width() + 200, width: 200, height: $(".bganimate2014").height(), miny: -200 },
        l3rect = { minx: -200, width: $(".bganimate2014").width(), height: 500, miny: $(".bganimate2014").height() * 0.78 },
        l4rect = { minx: -500, width: 200, height: $(".bganimate2014").height(), miny: -100 };
    function addpic2014(posi, rect) {
        var box = $("<img src='imgs/" + posi.type + ".png' style='left:" + posi.x + "px;top:" + posi.y + "px;width:10px' class='box'/>");
        var toposi = { x: 0, y: 0, t: 0 };
        toposi.x = rect.minx + (Math.random() * rect.width);
        toposi.y = rect.miny + (Math.random() * rect.height);
        toposi.t = 2000 + Math.random() * 5000;
        box.animate({ left: toposi.x, top: toposi.y, width: "150px" }, toposi.t, "easeInExpo", function () {
            $(this).remove();
        });
        $(".bganimate2014").append(box);
    }
    stop2014Animate = function () {
        clearInterval(play2014index);
        $(".bganimate2014").empty();
    }
    start2014Animate = function () {
        play2014index = setInterval(function () {
            addpic2014({ x: $(".bganimate2014").width() * 0.5, y: $(".bganimate2014").height() * 0.5, type: "ul_" + parseInt(Math.random() * key[2].count) }, l1rect);
            addpic2014({ x: $(".bganimate2014").width() * 0.5, y: $(".bganimate2014").height() * 0.5, type: "ur_" + parseInt(Math.random() * key[3].count) }, l2rect);
            addpic2014({ x: $(".bganimate2014").width() * 0.5, y: $(".bganimate2014").height() * 0.5, type: "dr_" + parseInt(Math.random() * key[1].count) }, l3rect);
            addpic2014({ x: $(".bganimate2014").width() * 0.5, y: $(".bganimate2014").height() * 0.5, type: "dl_" + parseInt(Math.random() * key[0].count) }, l4rect);
        }, 420);
    }
});