@extends('layouts.common')

@section('head')
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- SM・PC共通コンテンツ -->

<div class="common-content">
    <div class="menu-description">
        <img class="menu-img" src="{{ asset('images/menu/menu.jpg')}}" alt="メニュー一覧">
        <h1 class="menu-message">MENU</h1>
    </div>

    <div class="menu-detail">
        <div>
            <h2>
                <img class="momihogusi-img" src="{{ asset('images/menu/momihogusi.png')}}" alt="もみほぐし">
                もみほぐし
            </h2>
        </div>

        <p>着衣のまま、お辛い箇所や、疲れの溜まっている箇所を丁寧にもみほぐし致します。<br>
            日ごろのデスクワークや運動不足などによる凝りでお悩みの方におすすめです。
        </p>

        <div>
            <h2>
                <img class="oilmassage-img" src="{{ asset('images/menu/oilmassage.png')}}" alt="アロママッサージ">
                アロママッサージ
            </h2>
        </div>

        <p>お好きな精油を選んで頂き、人肌で温めた後、ゆっくりと心地の良い力で全身をほぐしていきます。
            体が凝り固まっているとき、気分を変えたいとき、ストレスが溜まったとき、自律神経を整えるお手伝いをさせて頂きます。
        </p>

        <div>
            <h2>
                <img class="headmassage-img" src="{{ asset('images/menu/headmassage.png')}}" alt="ヘッドマッサージ">
                ヘッドマッサージ
            </h2>
        </div>

        <p>眼精疲労にお悩みの方にもおすすめなヘッドマッサージです。
            常に多くの情報を取り入れていると、いつの間にか脳や目の疲労は蓄積されていきます。
            ヘッドマッサージは日ごろの脳や目の疲労からくる肩こりや頭痛、倦怠感の軽減にもお役立ちいただけます。</p>

    </div>

    <div class="inquiry">
        <a href="{{route('inquiry')}}">ご予約はこちら</a>
    </div>
    
</div>
@endsection