@extends('layouts.common')

@section('head')
<link href="{{ asset('css/therapist.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- SM・PC共通コンテンツ -->
<div class="common-content">
    <div class="therapist-description">
        <img class="therapist-img" src="{{ asset('images/therapist/therapist.jpg')}}" alt="セラピスト紹介">
        <h1 class="therapist-message">THERAPIST</h1>
    </div>

    <div class="therapist-intoroduce">
        <img class="person-img" src="{{ asset('images/therapist/nakahara.png')}}" alt="中原">
        
        <div>
            <h2>中原</h2>
            <div class="therapist-comment">
            マッサージ歴6年。力強く大きな手で凝り固まった部位をほぐします。<br>
            アロマオイルを使ったマッサージも得意としております。<br>
            趣味：ワイン・ボルダリング・水泳
            </div>
        </div>
    </div>

    <div class="therapist-intoroduce">
        <img class="person-img" src="{{ asset('images/therapist/haneda.png')}}" alt="中原">
        
        <div>
            <h2>羽田</h2>
            <div class="therapist-comment">
            マッサージ歴4年。
            気候の変わり目や日ごろの緊張等による心身の不調の改善をサポートします。
            自律神経を整えるマッサージで、穏やかな時間を提供します。<br>
            趣味：料理・バイク・カフェ、居酒屋巡り
            </div>
        </div>
    </div>
</div>

@endsection
