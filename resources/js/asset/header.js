$(".hidden-navbar").hide();

$(".menubtn").on('click',()=>{//メニューボタンをクリックしたとき
        $(".hidden-navbar").fadeToggle();//0.3秒で表示したり非表示にしたりする
        $(".top-message").fadeToggle();
        $(".menu-message").fadeToggle();
        $(".therapist-message").fadeToggle();
        $(".price-message").fadeToggle();
        $(".inquiry-message").fadeToggle();
    });

