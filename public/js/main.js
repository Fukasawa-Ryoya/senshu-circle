// ページ遷移 ヘッダー分を引く,スクロールする処理
function pageTransition() {
    $('a[href^="#"]').click(function () {
        let speed = 500;
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? "html" : href);
        //ヘッダーの高さを取得
        let header = $("header").height() + 5;
        //ヘッダーの高さを引く
        let position = target.offset().top - header;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
}

pageTransition();





