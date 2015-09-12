
function check() {
    var emailReg = /^[_a-z0-9.]+@([_a-z0-9]+\.)+[a-z0-9]{2,3}/;
    var telreg = /^1[3458]\d{9}$/gi;
    var name = jQuery("#txtname").val();
    var Company = jQuery("#txtCompany").val();
    var Content = jQuery("#txtContent").val();
    var email = jQuery("#txtemail").val();
    var tel = jQuery("#txttel").val();
    var qq = jQuery("#txtqq").val();
    if (name == "" || name == "您的姓名") {
        alert("请您的姓名！");
        jQuery("#txtname").focus();
        return false;
    }

    else if (email == "" || email == "您的邮箱地址") {
        alert("请输入邮箱地址")
        jQuery("#txtemail").focus();
        return false;
    }
    else if (!emailReg.test(email)) {
        alert("邮箱地址输入有误！")
        jQuery("#txtemail").focus();
        return false;
    }
    else if (Content == "" || Content == "详细商务合作描述") {
        alert("请输入留言")
        jQuery("#txtContent").focus();
        return false;
    }
    else if (tel == "" || tel == "您的联系电话") {
        alert("请输入联系电话")
        jQuery("#txttel").focus();

    } else if (!telreg.test(tel)) {

        alert("请输入正确的联系电话")
        jQuery("#txttel").focus();
    }
    else {
        jQuery.ajax({
            type: "POST",
            url: "/interface/contact.aspx",
            data: { txtname: jQuery("#txtname").val(), txtCompany: jQuery("#txtCompany").val(), txtemail: jQuery("#txtemail").val(), txtContent: jQuery("#txtContent").val(), tel: tel, qq: qq },
            cache: false,
            success: function (msg) {
                if (msg == 1) {
                    alert("留言信息已提交成功!");

                    jQuery("#txtname").val("");
                    jQuery("#txtContent").val("");
                    jQuery("#txtemail").val("");
                    jQuery("#txttel").val("");
                }
                else
                    alert(msg);

            }
        })
    }
}
function showcase(caseid, nodeid, events) {
    if (caseid > 0 || nodeid > 0)
        oncase(caseid, nodeid);
    $('.case-nav-wrap li').removeClass("cur");
    $(events).addClass("cur");
}
function showcaseall(caseid, nodeid, events) {
    oncase(caseid, nodeid);
    $('.case-nav-wrap li').removeClass("cur");
    $(events).addClass("cur");
}
function appcase(caseid) {
    $('.case-nav-wrap li').removeClass("cur");
    $.getJSON("" + caseid).always(function (date) {
        var cacheDate = date;
        var cahceDiv1 = "";
        var target_grid = $("#appcase_grid");
        $.each(cacheDate, function (key, value) {
            //console.log(key,value["title"],value["appicon"])
            cahceDiv1 = cahceDiv1 + "<div class=\"swiper-slide\"><a class=\"app-item-wrap\" href=\""+value["linkimg"]+"\"><img src=\"" + value["appicon"] + "\" alt=\"\"><p>" + value["title"] + "</p></a></div>";
        });
        $("#appcase_grid").html(cahceDiv1);
        $(window).trigger("resize");
    });
}
function oncase(caseid, nodeid) {
    $.getJSON("" + nodeid + "&casetype=" + caseid).always(function (date) {
        var cacheDate = date;
        var cahceDiv = $("<div>");
        var target_grid = $("#case_grid");
        var target_magic = $(".magicwall");
        $.each(cacheDate, function (key, value) {
            //console.log(key,value["image_url"],value["image_title"],value["image_detal"],value["image_mark"])
            var wrapLink = $("<a>").addClass("hover-content").attr("href", value["image_link"])
                .append(
                    $("<div>").addClass("hover-content-inner")
                        .append($("<h2>").text(value["image_title"]))
                        .append($("<p>").text(value["image_detal"]))
                );
            var items = $("<li>").addClass(value["image_mark"]).attr({
                "data-thumb": value["image_url"]
            });
            var itemsMerge = items.append(wrapLink);
            cahceDiv.append(itemsMerge);
        });

        target_grid.html(cahceDiv.html());
        $.getScript("js/jquery.magicwall.min.js", function () {
            var options = {
                delay: 1300,
                preloadBeforeSwitch: true,
                animations: " flipX,flipY,slideX,slideY,slideRow,slideColumn,fade,-flipX,-flipY,-slideX,-slideY,-slideRow,-slideColumn,-fade",
                maxItemHeight: 120,
                maxColumnsCount: 5,
                flipXDuration: 1200,
                flipXEasing: "easeInOutBack",
                flipYDuration: 1200,
                flipYEasing: "easeInOutBack",
                slideXDuration: 1500,
                slideXEasing: "easeInOutBack",
                slideYDuration: 1500,
                slideYEasing: "easeInOutBack",
                rowsCount: 3,
                pauseOnHover: "all"
            };
            target_magic.magicWall(options);
        });
    });
}

$(function () {
    $(".ai-banner-1").click(function () { location.href = "us.html"; });
    $(".ai-banner-2").click(function () { location.href = "weixin.html"; });
    $(".ai-banner-3").click(function () { location.href = "mobile.html"; });
    $(".ai-banner-4").click(function () { location.href = "3d.html"; });
    $(".ai-banner-5").click(function () { location.href = "chart.html"; });
    $(".ai-banner-6").click(function () { location.href = "digital_class.html"; });

    $(".count-wrap").click(function () { location.href = "us.html"; });
});

function loadM() {

    // var $this = $("#" + mao + "1");
    //alert(1);
    // $this.click();
}/**
 * Created by Administrator on 15-8-7.
 */
