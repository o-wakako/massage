$(function () {

    var name_flg = true;
    var mail_flg = true;
    var contact_flg=true;

    $('#ok-check').prop('disabled', true);

    // 名前のバリデーション処理
    $('#form-name').on('blur', function () {

        // 何も入力されていないとき
        if ($(this).val() === '') {

            // エラーメッセージが表示されていないとき
            if (!$(this).next('.error-name').length) {

                // エラーメッセージを表示する
                $(this).after('<div class="error-name">必須項目です。</div>');

                if (window.matchMedia('(max-width: 1024px)').matches) {
                    $('.error-name').css({
                        fontSize: "2vw",
                        color: "#e80000",
                        width: "40vw",
                        margin: "0vw auto"
                    });
                    $('#form-name').css('border-color', '#e80000');
                } else {
                    $('.error-name').css({
                        fontSize: "20px",
                        color: "#e80000",
                        width: "410px",
                        margin: "0px auto"
                    });
                    $('#form-name').css('border-color', '#e80000');
                }
            }
            name_flg = true;
        } else {
            $(this).next('.error-name').remove();
            $('#form-name').css('border-color', '#333631');
            $('.caution').remove();
            name_flg = false;
        }
        checkmark();
    });

    // メールのバリデーション処理
    $('#form-mail').on('blur', function () {
        var error;

        // 入力形式が違うときのエラーを外す
        $(this).next('.error-mail2').remove();

        // 何も入力されていないとき
        if ($(this).val() === '') {

            // エラーが表示されていないとき
            if (!$(this).next('.error-mail').length) {
                $(this).after('<div class="error-mail">必須項目です。</div>');

                if (window.matchMedia('(max-width: 1024px)').matches) {
                    $('.error-mail').css({
                        fontSize: "2vw",
                        color: "#e80000",
                        width: "40vw",
                        margin: "0vw auto"
                    });
                    $('#form-mail').css('border-color', '#e80000');
                } else {
                    $('.error-mail').css({
                        fontSize: "20px",
                        color: "#e80000",
                        width: "410px",
                        margin: "0px auto"
                    });
                    $('#form-mail').css('border-color', '#e80000');
                }

            }
            mail_flg = true;

            // 入力形式が違うとき
        } else if (!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {

            // 何も入力されていないときのエラーを外す
            $(this).next('.error-mail').remove();

            // エラーが表示されていないとき
            if (!$(this).next('.error-mail2').length) {

                $(this).after('<div class="error-mail2">正しいメールアドレスを入力して下さい。</div>');
                if (window.matchMedia('(max-width: 1024px)').matches) {
                    $('.error-mail2').css({
                        fontSize: "2vw",
                        color: "#e80000",
                        width: "40vw",
                        margin: "0vw auto"
                    });
                    $('#form-mail2').css('border-color', '#e80000');
                } else {
                    $('.error-mail2').css({
                        fontSize: "20px",
                        color: "#e80000",
                        width: "410px",
                        margin: "0px auto"
                    });
                    $('#form-mail2').css('border-color', '#e80000');
                }

            }
            mail_flg = true;
        } else {
            $(this).next('.error-mail2').remove();
            $(this).next('.error-mail').remove();
            $('#form-mail').css('border-color', '#333631');
            mail_flg = false;
        }
        checkmark();
    });



    // 予約・問い合わせ対応のバリデーション処理
    $('#form-contact').on('blur', function () {

        if ($(this).val() === '') {

            if (!$(this).next('.error-contact').length) {

                $(this).after('<div class="error-contact">必須項目です。</div>');
                if (window.matchMedia('(max-width: 1024px)').matches) {
                    $('.error-contact').css({
                        fontSize: "2vw",
                        color: "#e80000",
                        width: "40vw",
                        margin: "0vw auto"
                    });
                    $('#form-contact').css('border-color', '#e80000');
                } else {
                    $('.error-contact').css({
                        fontSize: "20px",
                        color: "#e80000",
                        width: "410px",
                        margin: "0px auto"
                    });
                    $('#form-contact').css('border-color', '#e80000');
                }

            }
            contact_flg = true;

        } else {

            $(this).next('.error-contact').remove();
            $('#form-contact').css('border-color', '#333631');
            contact_flg = false;
        }
        checkmark();
    });

    $('#form-contact').on('keyup', function () {
        $(this).next('.error-contact').remove();
        $('#form-contact').css('border-color', '#333631');
        contact_flg = false;
        checkmark();
    });



    // チェックマークの有効化無効化
    function checkmark() {

        if (name_flg || mail_flg || contact_flg) {
            $('#ok-check').prop('disabled', true);
            $('#submit').prop('disabled', true);
        } else {
            $('#ok-check').prop('disabled', false);
            $('#ok-check').on('click',function(){
                if ( $(this).prop('checked') == false ) {
                    $('#submit').prop('disabled', true);
                  } else {
                    $('#submit').prop('disabled', false);
                  }
            });
        }
    }


});