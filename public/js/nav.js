// *nav表示
function getScrollBottom() {
    var body = window.document.body;
    var html = window.document.documentElement;
    var scrollTop = body.scrollTop || html.scrollTop;
    return html.scrollHeight - html.clientHeight - scrollTop;
}

const navButton = () => {
    if (getScrollBottom() <= 300) {
        if ($("#fixed-wrap").attr("class")) {
            $(".nav-wrap").fadeIn();
        } else {
            $(".nav-wrap").fadeOut();
        }
    } else {
        if ($("html").width() <= 1007) {
            $(".nav-wrap").fadeIn();
        }
    }
};

if ($("html").height() <= 920) {
    if ($(window).width() <= 1024) {
        $(".nav-wrap").fadeIn();
    }
} else {
    // 画面トップでリロードしても画像の読み込み速度によってスクロールボトムが300以下になり表示されない問題を修正
    if ($(window).scrollTop() <= 300) {
        // window.width<=1024以下だとスクロールバー分がありfadeInされてしまうため
        if ($("html").width() <= 1007) {
            $(".nav-wrap").fadeIn();
        }
    }

    $(window).on("scroll", () => {
        navButton();
    });
}

// *nav-menu
let scrTop;
function scrTopFun() {
    scrTop = $(window).scrollTop();
}


$(".nav-menu").on("click", () => {
    if (!$(".menu").hasClass("menu-active")) {
        // slickが用いられているところでposition:fixedをするとバグるため消す。
        $(".slider").css({ display: "none" });
        scrTopFun();
        $("#fixed-wrap")
            .css({
                position: "fixed",
                top: -1 * scrTop + $("header").height(),
            })
            // navButton内の.attr('class')のためにつけている
            .addClass("active");
        $(".menu").animate({ marginTop: "999px" }, 400).addClass("menu-active");
        // menuが開いているときはサークル詳細ページに遷移させなくする。
        $(".circle-wrap a").on("click", (e) => {
            e.preventDefault();
        });
        // hoverを解除
        $(".circle-wrap").off();
    } else {
        $(".slider").css({ display: "block" });
        $("#fixed-wrap")
            .css({
                position: "static",
            })
            .removeClass("active");
        window.scrollTo(0, scrTop);
        $(".menu")
            .animate({ marginTop: "0px" }, 400)
            .removeClass("menu-active");
        // 遷移しないのを解除
        $(".circle-wrap a").off();
        pageTransition();
        // hoverを実行
        circleWrapHover();
    }
});
// メニュー以外をクリックしたらメニューを閉じる
$(window).on("click", (e) => {
    if (
        !$(e.target).closest(".menu").length &&
        !$(e.target).closest(".nav-wrap").length &&
        $(".menu").hasClass("menu-active")
    ) {
        $(".slider").css({ display: "block" });
        $("#fixed-wrap")
            .css({
                position: "static",
            })
            .removeClass("active");
        window.scrollTo(0, scrTop);
        $(".menu")
            .animate({ marginTop: "0px" }, 400)
            .removeClass("menu-active");
        $(".circle-wrap a").off();
    }
});

// メニューをスクロールさせる
function menuScroll() {
    if ($(window).height() * 0.9 <= $(".menu").height()) {
        $(".nav-wrap").fadeOut();
    }
    if ($(window).height() <= $(".menu").height()) {
        $(".menu").css({ height: "100vh" });
    }
}

// blade-menu
function bladeMenuScroll() {
    if ($(window).height() + 70 <= $(".blade-menu").height()) {
        $(".blade-menu").css({ height: "100vh", "overflow-y": "scroll" });
    }
}
//*アコーディオン表示
$(".fa-caret-wrap").on("click", (e) => {
    const content = $(e.target).closest(".categories").find(".type-wrap");
    const icon = $(e.target).closest(".categories").find(".fas");

    if (!content.is(":visible")) {
        content.slideDown(function () {
            if ($(window).width() <= 1024) {
                menuScroll();
            } else {
                bladeMenuScroll();
            }
            icon.removeClass("fa-caret-down");
            icon.addClass("fa-caret-up");
        });
    } else {
        // windowより小さくなったらheightをautoにする
        if (
            $(window).height() >=
            $(".category-wrap").height() - content.height()
        ) {
            $(".menu").css({ height: "auto" });
        }
        content.slideUp(function () {
            if ($(window).height() * 0.9 >= $(".category-wrap").height()) {
                if ($(window).width() <= 1024) {
                    $(".nav-wrap").fadeIn();
                }
            }
            icon.removeClass("fa-caret-up");
            icon.addClass("fa-caret-down");
        });
    }
});

// menuを開いたままwindow.widthが1025px以上になったときの処理
$(window).resize(function () {
    if ($("html").width() >= 1008) {
        $(".slider").css({ display: "block" });
        $("#fixed-wrap")
            .css({
                position: "static",
            })
            .removeClass("active");
        window.scrollTo(0, scrTop);
        $(".menu")
            .animate({ marginTop: "0px" }, 400)
            .removeClass("menu-active");
        $(".circle-wrap a").off();
    }
});

// *page-topボタン
$(window).on("scroll", () => {
    if ($(window).width() >= 1008) {
        if ($(window).scrollTop() > 200) {
            $(".page-top").fadeIn();
        } else {
            $(".page-top").fadeOut();
        }
    } else {
        $(".page-top").fadeOut();
    }
});

// *.categories.blade
