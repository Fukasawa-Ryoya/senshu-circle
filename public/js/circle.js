// // *slick
$(".slider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    dots: true,
    prevArrow: '<i class="fas fa-chevron-left slick-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-right"></i>',
    responsive: [
        {
            breakpoint: 1025,
            settings: {
                dots: false,
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 600,
            settings: {
                dots: false,
                slidesToShow: 1,
            },
        },
    ],
});

// *スライドサイズの変更後実行
$(".slider").on("setPosition", () => {
    calHeight();
});

//* 黄金比の計算
function calHeight() {
    const imageWidth = $(".other-image").width();
    const result = imageWidth / 1.414;

    $(".other-image").css("height", result);
}

calHeight();

//*公認マークの位置をcircle-imageから取得
function calAuthorizationLeft() {
    const circleImgLeft = $(".circle-image").offset().left;
    const circleImgWrapLeft = $(".circle-img-wrap").offset().left;
    let authorizationLeft = circleImgLeft - circleImgWrapLeft + 5;
    $(".authorization").css({ left: authorizationLeft });
}

calAuthorizationLeft();

$(window).resize(function () {
    calAuthorizationLeft();
});
