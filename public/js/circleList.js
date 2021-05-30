//* 黄金比の計算
function calHeight() {
    const imageWidth = $(".circle-image").width();
    const result = imageWidth / 1.414;

    $(".circle-image").css("height", result);
}

$(window).resize(function () {
    calHeight();
});
// *menuを開いているときはhoverを解除
function circleWrapHover() {
    // window.innerWidthこれでスクロールバーを含んだ画面の幅を取得
    if (window.innerWidth >= 600) {
        $(".circle-wrap").hover(
            function () {
                $(this).css({
                    "box-shadow": "2px 2px 5px #c2c2c2",
                    transform: "translate(-2px, -2px)",
                });
            },
            function () {
                $(this).css({
                    "box-shadow": "0px 0px 0px",
                    transform: "translate(0px, 0px)",
                });
            }
        );
    } else {
        $(".circle-wrap").off();
    }
}
// window.widthが変わるたび実行
$(window).resize(function () {
    circleWrapHover();
});

// *ソート機能
if (circles.length) {
    function display() {
        for (let i = 0; i < circles.length; i++) {
            const circle = circles[i];
            let html = `
                <a href="/circle/${circle.id}">
              <div class="image-content">
                <img class="circle-image" src="/storage/circleImg/${circle.image}" alt="サークル画像">
              </div>
              <p class="circle-name">${circle.name}</p>
          `;
        //   公認サークルだったらスタンプを追加する
        // </a>は公認スタンプをクリックできるようにするため
            if (circle.authorization === "true") {
                html += `<img class="authorization" src="/storage/img/公認スタンプ.png" alt="公認スタンプ">
                </a>`;
            } else {
                html += "</a>";
            }
            $(".circle-list").append(
                `<li class="circle-wrap">` + html + `</li>`
            );
            calHeight();
        }
        circleWrapHover();
    }
    display();

    $("#japanese").on("click", () => {
        circlesJp();
        $(".circle-list").children().remove();
        display();
    });
    $("#many").on("click", () => {
        circlesMany();
        $(".circle-list").children().remove();
        display();
    });
    $("#few").on("click", () => {
        circlesFew();
        $(".circle-list").children().remove();
        display();
    });
    $("#authorization").on("click", () => {
        circlesAuthorization();
        $(".circle-list").children().remove();
        display();
    });
} else {
    // 検索結果が見つからなかったときの処理
    $(".circle-list").append(`
    <p style="font-size:0.8rem; text-align:center;">
    <span style="font-weight:bold;">${search}</span>に一致するものは見つかりませんでした。
    </p>`);
}
