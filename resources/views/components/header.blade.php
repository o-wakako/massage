<header>
    <!-- スマホ用ヘッダー -->
    <div class="sm-header">

        <div class="menu-item">
            <a href="{{url('/')}}"><img class="site-icon" src="{{ asset('images/header/logo-sm.png') }}"
                    alt="出張マッサージFLOW"></a>

            <img class="menubtn" src="{{ asset('images/header/menubtn.png')}}" alt="メニュー">
        </div>

        <nav class="hidden-navbar">
            <ul>
                <li><a href="{{url('/menu')}}">メニュー</a></li>
                <li><a href="{{url('/therapist')}}">セラピスト</a></li>
                <li><a href="{{url('/price')}}">料金</a></li>
                <li><a href="{{route('inquiry')}}">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>

    <!-- PC用ヘッダー -->
    <div class="pc-header">
        <nav class="navbar">
            <a href="{{url('/')}}"><img class="site-icon" src="{{ asset('images/header/logo-pc.png') }}"
                    alt="出張マッサージFLOW"></a>
            <div>
                <div class="site-description">出張マッサージFLOW 【営業時間】09:00~23:00 【電話番号】07084961048</div>

                <ul>
                    <li><a href="{{url('/menu')}}">メニュー</a></li>
                    <li><a href="{{url('/therapist')}}">セラピスト</a></li>
                    <li><a href="{{url('/price')}}">料金</a></li>
                    <li><a href="{{url('/inquiry')}}">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </div>

</header>
