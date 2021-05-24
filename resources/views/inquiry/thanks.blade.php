@extends('layouts.common')

@section('head')
<link href="{{ asset('css/thanks.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="common-content">
        <div class="inquiry-description">
                <img class="inquiry-img" src="{{ asset('images/inquiry/inquiry2.png')}}" alt="thanks">
                <h1 class="inquiry-message">THANK YOU !</h1>
        </div>


        <h2>送信完了致しました。</h2>

        <p>
                確認のためメールを自動送信致します。<br>
                別途、お問い合わせ内容を確認の上ご連絡させて頂きますので、今しばらくお待ちくださいませ。<br><br>

                ※もし確認のメールが到着しない場合は、大変お手数ですが再度お問い合わせフォームにてご連絡頂くか、お電話にてご連絡をお願い致します。
        </p>

        <div class="back-top">
            <a href="{{url('/')}}">topへ戻る</a>
        </div>
</div>
@endsection