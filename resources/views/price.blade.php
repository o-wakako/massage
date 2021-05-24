@extends('layouts.common')

@section('head')
<link href="{{ asset('css/price.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- SM・PC共通コンテンツ -->
<div class="common-content">

    <div class="price-description">
        <img class="price-img" src="{{ asset('images/price/price.png')}}" alt="料金表">
        <h1 class="price-message">PRICE</h1>
    </div>

    <div class="price-list">

        <h2>コース料金</h2>

        <div class="caution">
            ・全て税込み価格になります。<br>
            ・アロママッサージの場合も同じ価格になります。<br>
            ・お支払い方法は決済サービス「PayPal」によるクレジット払いか現金払いとなります。
        </div>

        <table>
            <tr>
                <th>時間</th>
                <th>料金</th>
                <th>初回特別料金</th>
            </tr>
            <tr>
                <td>60min</td>
                <td>¥ 10000</td>
                <td>-</td>
            </tr>
            <tr>
                <td>90min</td>
                <td>¥ 14000</td>
                <td>¥ 11000</td>
            </tr>
            <tr>
                <td>120min</td>
                <td>¥ 18000</td>
                <td>¥ 15000</td>
            </tr>
            <tr>
                <td>150min</td>
                <td>¥ 23000</td>
                <td>¥ 20000</td>
            </tr>
        </table>

    </div>

    <div class="travel-expenses">
        <h2>交通費</h2>

        <div class="caution">
            ・東京、埼玉、神奈川近郊を中心に出張致します。<br>
            ・事務所より30分圏内の場合【無料】で出張致します。<br>
            ・その他エリアの場合、一律<span>2000円</span>を頂戴しております。<br>
            ・ご不明点等ございましたら、お電話またはお問い合わせフォームよりご連絡下さいませ。
        </div>
    </div>

    <div class="inquiry">
        <a href="{{route('inquiry')}}">ご予約はこちら</a>
    </div>

</div>

@endsection