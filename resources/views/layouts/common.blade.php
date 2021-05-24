<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="description" content="出張マッサージflowは都内近郊のご自宅までマッサージと癒しの時間を提供致します。">
    <meata name="keywords" content="出張マッサージ,FLOW,セラピスト,癒し,都内">

    <title>出張マッサージflow</title>

    <!-- スタイルシート -->
    <link href="{{ asset('css/header.css')}}" rel="stylesheet">
    <link href="{{ asset('css/footer.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;display=swap" rel="stylesheet">


    <!-- スクリプトファイル -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head')

    </head>

    <body>
        <!--ヘッダーをインポート -->
        @include('components.header')

        <!-- 子ビューの反映 -->
        @yield('content')

        <!-- フッターをインポート -->
        @include('components.footer')
    </body>
</html>