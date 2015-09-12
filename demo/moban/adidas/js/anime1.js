/**
 * Created by Administrator on 15-8-3.
 */
var playindex = 0,stopAnimate,startAnimate;
$(function () {
    $(".bganimate").height($(window).height());
    var list1 = [], list2 = [], list3 = [], key = [{ name: "c", count: 15 }, { name: "b", count: 6 }, { name: "c", count: 15 }, { name: "c", count: 15 }, { name: "c", count: 15 }, { name: "m", count: 5 }, { name: "p", count: 13 }],
        l1rect = { minx: $(".bganimate").width() * 0.08, width: $(".bganimate").width() * 0.15, height: $(".bganimate").width() * 0.12, miny: $(".bganimate").height() * 0.1, tox: 100, toy: -100 },
        l2rect = { minx: $(".bganimate").width() * 0.1, width: $(".bganimate").width() * 0.15, height: $(".bganimate").width() * 0.12, miny: $(".bganimate").height() * 0.7, tox: -100, toy: $(".bganimate").height()+200 },
        l3rect = { minx: $(".bganimate").width() * 0.75, width: $(".bganimate").width() * 0.15, height: $(".bganimate").width() * 0.18, miny: $(".bganimate").height() * 0.3, tox: $(".bganimate").width() + 400, toy: $(".bganimate").height() * 0.6 };
    function addpic(posi, rect) {
        var box = $("<img src='imgs/" + posi.type + ".png' style='left:" + posi.x + "px;top:" + posi.y + "px;' class='box'/>");
        var toposi = { x: 0, y: 0, t: 0 };
        toposi.x = rect.minx + (Math.random() * rect.width);
        toposi.y = rect.miny + (Math.random() * rect.height);
        toposi.t = 2000 + Math.random() * 3000;
        box.animate({ left: toposi.x, top: toposi.y }, toposi.t, "easeOutExpo", function () {
        });
        setTimeout(function () {
            var toposi2 = { x: 0, y: 0, t: 0 };
            toposi2.x = rect.tox - (Math.random() * rect.width);
            toposi2.y = rect.toy - (Math.random() * rect.height);
            toposi2.t = 5000 + Math.random() * 3000;
            box.stop().animate({ left: toposi2.x, top: toposi2.y, opacity: 0 }, toposi2.t, function () {
                $(this).remove();
            });
        }, toposi.t - 2000);
        $(".bganimate").append(box);
    }
    stopAnimate = function () {
        clearInterval(playindex);
        $(".bganimate").empty();
    }
    startAnimate = function () {
        playindex = setInterval(function () {
            var k = key[parseInt(Math.random() * key.length)];
            addpic({ x: $(".bganimate").width() * 0.40, y: $(".bganimate").height() * 0.42, type: k.name + "_" + parseInt(Math.random() * k.count) }, l1rect);
            k = key[parseInt(Math.random() * key.length)];
            addpic({ x: $(".bganimate").width() * 0.4, y: $(".bganimate").height() * 0.52, type: k.name + "_" + parseInt(Math.random() * k.count) }, l2rect);
            k = key[parseInt(Math.random() * key.length)];
            addpic({ x: $(".bganimate").width() * 0.56, y: $(".bganimate").height() * 0.56, type: k.name + "_" + parseInt(Math.random() * k.count) }, l3rect);
        }, 180);
    }
});