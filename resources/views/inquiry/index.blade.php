@extends('layouts.common')

@section('head')
<link href="{{ asset('css/inquiry.css') }}" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/inquiry.js') }}"></script>
@endsection

@section('content')
<!-- SM・PC共通コンテンツ -->
<div class="common-content">
    <div class="inquiry-description">
        <img class="inquiry-img" src="{{ asset('images/inquiry/inquiry2.png')}}" alt="予約・問い合わせ">
        <h1 class="inquiry-message">CONTACT・RESERVATION</h1>
    </div>
    <p class="about-inquiry">この度は出張マッサージ FLOWにご訪問頂きまして、<br>
        誠にありがとうございます。<br><br>
        ご予約、お問い合わせに関しましては、<br>
        お電話番号（080XXXXXXX）<br>
        もしくは下記メールフォームにて<br>
        お気軽にお問い合わせ下さいませ。
    </p>

    <form class="inquiry-form" method="post" action="{{route('inquiry.send')}}">
        @csrf
        <div>
            <label class="block-label" for="form-name">お名前<span class="required">（必須）</span></label>
            <input typa="text" name="name" value="{{old('name')}}" id="form-name" class="block-input">
        </div>

        <div>
            <label class="block-label" for="form-mail">メールアドレス<span class="required">（必須）</span></label>
            <input type="text" name="mail" value="{{old('email')}}" id="form-mail" class="block-input">
        </div>

        <div class="gender-item">
                <span class="gender-title">性別：</span>
                <input type="radio" name="gender" value="男性" id="form-gender" checked="checked"><span class="gender">男性　</span>
                <input type="radio" name="gender" value="女性" id="form-gender"><span class="gender">女性</span>
                <span class="required">（必須）</span>
        </div>

        <div>
            <label class="block-label" for="form-contact">ご予約・お問い合わせ内容<span class="required">（必須）</span></label>
            <textarea name="body" id="form-contact" class="block-textarea"></textarea>
        </div>

        <div>
                <input type="checkbox" id="ok-check">
                <label for="ok-check" class="ok-check">上記の内容で宜しければチェックして下さい。</label>
        </div>

        <div class="send-button">
            <button type="submit" id="submit">
                送信
            </button>
        </div>

    </form>


    @endsection