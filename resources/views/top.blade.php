@extends('layouts.common')

@section('head')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- スマホ用コンテンツ -->
<div class="sm-content">
    <div class="top-description">
        <img class="top-img" src="{{ asset('images/top/towl.jpg')}}" alt="心地良いマッサージで心と身体に癒しをお届けします">
        <h1 class="top-message">心地良いマッサージで<br>心と体に癒しをお届けします。</h1>
    </div>
</div>

<!-- PC用コンテンツ -->
<div class="pc-content">
    <div class="top-description">
        <img class="top-img" src="{{ asset('images/top/towl.jpg')}}" alt="心地良いマッサージで心と身体に癒しをお届けします">
        <h1 class="top-message">心地良いマッサージで、心と身体に癒しをお届けします。</h1>
    </div>
</div>

<div>
    <h2>ご自宅が安心のマッサージサロンに</h2>

    <h3>こんな方におすすめです</h3>

    <div class="recommend">
        肩こりやむくみ等でお困りの方はもちろん、
        自律神経を整え気持ちのよい時間を過ごしたい…
    </div>

    <div class="recommend">
        在宅ワークや自由な働き方が増えたので、
        マッサージのために外にでるのが面倒、移動時間がもったいない…
    </div>

    <div class="recommend">
        マッサージの後の気持ち良い状態で熟睡したい、
        疲れているので帰りの負担を考えたくない…
    </div>

    <p class="comment">
        出張マッサージ FLOWは、お客様に移動の負担をかけることなく<br>
        心と体に癒しのマッサージお届けします。
    </p>

    <div class="inquiry">
        <a href="{{route('inquiry')}}">ご予約はこちら</a>
    </div>


    <h3>FLOWってどんなマッサージ店？</h3>

    <div class="about-flow">
        肩こりなんて無縁！マッサージって緊張しない？<br>
        と思っていた私ですが、<br>
        PC作業を始めて、肩こりや眼精疲労に悩まされるようになりました。<br>
        そこで我慢できずに施術を受けに行ったところ、ピンポイントで凝りをほぐす施術に感動し、自分でもお困りの方にマッサージをしたいと思い、出張マッサージを始めました。<br><br>
        
        初めての出張マッサージですと緊張することもあるかと思いますが、<br>
        当店は癒しの音楽とお好みの香りをお供にお客様が心身ともにリラックスして頂くことを一番に考えております。<br>
        また、出張マッサージでしたらマッサージ店に向かう時間や、施術を受けるために着替えを行う手間も要りません。<br>
        是非お気軽にご予約・お問い合わせ下さいませ。
    </div>

</div>


@endsection