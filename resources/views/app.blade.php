<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="blog-and-me" />
    <meta name="description" content="blog-and-me" />
    <meta name="author" content="cosmos-themes" />
    <!--Page Title-->
    <title>Blog And Me Homepage</title>

    <!--Css-->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/index.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/homepage.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/navbar.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/footer.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/signup.css" />
    <!--Favicons-->
    <link
        rel="shortcut icon"
        href="{{ env('APP_URL') }}img/favicon.ico"
        type="image/x-icon"
    />

    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdn.rawgit.com/imsky/holder/master/holder.js"></script>
    <script src="{{ env('APP_URL') }}js/script.js"></script>
</head>
<body>
<!-- Section 1 -->
<div class="grey-section">
    <div class="navbar container">
        <nav
            class="navbar-expand-xl container navbar-light navbar--wrapper"
        >
{{--            <a class="navbar-brand" href="/">--}}
{{--                <img width="340px" src="{{ env('APP_URL') }}img/logo-blogstartUp.png" alt="Blog and Me-logo" class="img-thumbnail Blog and Me-logo"/>--}}
{{--            </a>--}}
{{--            <div class="download-button-wrapper-before">--}}
{{--                <a href="https://demo.Blog and Me.vn/">--}}
{{--                    <button class="button-filled">Download now</button>--}}
{{--                </a>--}}
{{--            </div>--}}
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar--item" href="/solution.html"
                        >M???i nh???t</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar--item" href="/enterprise.html">Trending</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="
                    nav-link
                    navbar--item
                    dropdown-toggle
                    navbar--menu-show
                  "
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Ng??n ng??? l???p tr??nh
                        </a>
                        <div
                            class="dropdown-menu navbar--dropdown-menu-show"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a class="dropdown-item" href="/ebooks.html">Laravel</a>
                            <a class="dropdown-item" href="/blog.html">VueJs</a>
                            <a class="dropdown-item" href="#">ReactJs</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="
                    nav-link
                    navbar--item
                    navbar--menu-show
                  "
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            H???i ????p
                        </a>
                    </li>
                </ul>
                <div class="input-group search border rounded-pill p-1">
                    <input type="search" id="input-search" placeholder="Nh???p t??? b???n c???n t??m?" aria-describedby="button-addon3" class="form-control bg-none border-0">
                    <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <ul class="information-user">
                    {{--                    @if(auth()->check())--}}
                    <li class="nav-item dropdown">
                        <a
                            class="
                    nav-link
                    navbar--item
                    dropdown-toggle
                    navbar--menu-show
                  "
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ env('APP_URL') ."img/avatar.png" }}" alt="">
                        </a>
                        <div
                            class="dropdown-menu navbar--dropdown-menu-show"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a class="dropdown-item" href="/ebooks.html">Vi???t b??i</a>
                            <a class="dropdown-item" href="/blog.html">?????t c??u h???i</a>
                        </div>
                    </li>
                    {{--                    @endif--}}
                </ul>
            </div>
{{--            <div class="download-button-wrapper-after">--}}
{{--                <a href="https://demo.Blog and Me.vn/">--}}
{{--                    <button class="button-filled">Download now</button>--}}
{{--                </a>--}}
{{--            </div>--}}
        </nav>
        @yield('header-title')
</div>

@yield('content')

<!-- Section 2 -->
{{--<div class="white-section">--}}
{{--    <div class="container section-2">--}}
{{--        <div class="row featured">--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                <div class="list-item list-item-active" data-tab="tab-1">Collabration</div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                <div class="list-item" data-tab="tab-2">Digital Assistant</div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                <div class="list-item" data-tab="tab-3">Qu???n tr??? tri th???c doanh nghi???p</div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                <div class="list-item" data-tab="tab-4">Chuy???n ?????i s??? doanh nghi???p</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="tab-1" class="tabs">--}}
{{--            <div style="margin-bottom: 40px">--}}
{{--                <p class="bold">--}}
{{--                    H??n 60% th???i gian l??m vi???c h??ng ng??y d??nh cho vi???c x??? l?? email, t??m--}}
{{--                    ki???m th??ng tin v?? giao ti???p, trong ???? ch??? c?? 40% ???????c d??nh ????? th???c--}}
{{--                    s??? l??m vi???c.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    ??a s??? doanh nghi???p d??ng k??nh chat Zalo, Skype, Viber, Slack,--}}
{{--                    Telegram, Email ????? trao ?????i c??ng vi???c. Th??? nh??ng, c??c k??nh n??y ????u--}}
{{--                    ch??? g???m c??ng vi???c ...--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-1.png" class="img-thumbnail" class="img-thumbnail" alt="feature-1" />--}}
{{--                        <div>--}}
{{--                            Qu?? nhi???u th??ng tin, ?????u vi???c ???????c trao ?????i c??ng l??c v?? kh??ng--}}
{{--                            n???m ???????c ????u l?? tr???ng t??m--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-2.png" class="img-thumbnail" alt="feature-2" />--}}
{{--                        <div>--}}
{{--                            T??nh tr???ng "Em t?????ng, Em qu??n, Em nh???m ..." x???y ra H??NG NG??Y--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-3.png" class="img-thumbnail" alt="feature-3" />--}}
{{--                        <div>--}}
{{--                            Nh?? qu???n l?? ch???ng th??? n???m ???????c tr???ng th??i c??ng vi???c ???? ?????n ????u--}}
{{--                            v?? lu???ng chat d??i v?? t???n--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-4.png" class="img-thumbnail" alt="feature-4" />--}}
{{--                        <div>--}}
{{--                            Th??ng tin trao ?????i kh??ng minh b???ch, kh??ng t???o c?? s??? ????nh gi??--}}
{{--                            n??ng l???c nh??n s??? ch??nh x??c--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="tab-2" className="tabs">--}}
{{--            <div style="margin-bottom: 40px">--}}
{{--                <p class="bold">--}}
{{--                    H??n 60% th???i gian l??m vi???c h??ng ng??y d??nh cho vi???c x??? l?? email, t??m--}}
{{--                    ki???m th??ng tin v?? giao ti???p, trong ???? ch??? c?? 40% ???????c d??nh ????? th???c--}}
{{--                    s??? l??m vi???c.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    ??a s??? doanh nghi???p d??ng k??nh chat Zalo, Skype, Viber, Slack,--}}
{{--                    Telegram, Email ????? trao ?????i c??ng vi???c. Th??? nh??ng, c??c k??nh n??y ????u--}}
{{--                    ch??? g???m c??ng vi???c ...--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-1.png" class="img-thumbnail" alt="feature-1" />--}}
{{--                        <div>--}}
{{--                            Qu?? nhi???u th??ng tin, ?????u vi???c ???????c trao ?????i c??ng l??c v?? kh??ng--}}
{{--                            n???m ???????c ????u l?? tr???ng t??m--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-2.png" class="img-thumbnail" alt="feature-2" />--}}
{{--                        <div>--}}
{{--                            T??nh tr???ng "Em t?????ng, Em qu??n, Em nh???m ..." x???y ra H??NG NG??Y--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-3.png" class="img-thumbnail" alt="feature-3" />--}}
{{--                        <div>--}}
{{--                            Nh?? qu???n l?? ch???ng th??? n???m ???????c tr???ng th??i c??ng vi???c ???? ?????n ????u--}}
{{--                            v?? lu???ng chat d??i v?? t???n--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-4.png" class="img-thumbnail" alt="feature-4" />--}}
{{--                        <div>--}}
{{--                            Th??ng tin trao ?????i kh??ng minh b???ch, kh??ng t???o c?? s??? ????nh gi??--}}
{{--                            n??ng l???c nh??n s??? ch??nh x??c--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="tab-3" className="tabs">--}}
{{--            <div style="margin-bottom: 40px">--}}
{{--                <p>--}}
{{--                    Ng??y nay, n???n kinh t??? tri th???c v?? h??nh t???o ra nh???ng ??p l???c l???n l??n c??c doanh nghi???p. ????? kh??ng b??? b??? l???i ph??a sau, c??c doanh nghi???p c???n bi???n m??nh tr??? th??nh nh???ng t??? ch???c h???c t???p li??n t???c, ?????i m???i li??n t???c ????? t???n t???i v?? ph??t tri???n tr??n th??? tr?????ng--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-5.png" class="img-thumbnail" alt="feature-1" />--}}
{{--                        <div>--}}
{{--                            ?????i v???i c??c n???n kinh t??? ti??n phong trong n???n kinh t??? Th??? gi???i, c??n c??n gi???a hai y???u t??? tri th???c v?? c??c ngu???n l???c ??ang nghi??ng v??? tri th???c.Tri th???c th???c s??? ???? tr??? th??nh y???u t??? quan tr???ng nh???t quy???t ?????nh m???c s???ng--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-6.png" class="img-thumbnail" alt="feature-2" />--}}
{{--                        <div>--}}
{{--                            Qu???n tr??? tri th???c s??? gi??p doanh nghi???p c?? th??? bi???n ki???n th???c ti???m ???n trong m???i c?? nh??n th??nh tri th???c chung cho to??n doanh nghi???p, ????a ti???m n??ng tr?? tu??? c???a t??? ch???c ???????c n??ng cao v?? m??? r???ng--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-7.png" class="img-thumbnail" alt="feature-3" />--}}
{{--                        <div>--}}
{{--                            Khi tri th???c tr??? n??n quan tr???ng h??n v???n, lao ?????ng v?? t??i nguy??n trong vi???c c???u th??nh gi?? tr??? kinh t???, ng?????i ta ngh?? t???i ?????i t?????ng tr???ng t??m m???i c???a ho???t ?????ng qu???n tr???, ???? l?? tri th???c--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-8.png" class="img-thumbnail" alt="feature-4" />--}}
{{--                        <div>--}}
{{--                            ??i???u quan tr???ng l?? d??ng ch???y tri th???c ph???i l??u chuy???n v?? xoay li??n t???c theo chu tr??nh tr??n m???i t???o ra ???????c s??? ph??t tri???n, n???u ch??? d???ng l???i m???t ch??? ngh??a l?? tri th???c ch???t s??? kh??ng gi??p ??ch cho doanh nghi???p ph??t tri???n ???????c."--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="tab-4" className="tabs">--}}
{{--            <div style="margin-bottom: 40px">--}}
{{--                <p class="bold">--}}
{{--                    C??u chuy???n ng??y n??y kh??ng ph???i l?? c?? chuy???n ?????i s??? hay kh??ng, m?? l?? chuy???n ?????i s??? b???t ?????u t??? ????u? H??y ????? ch??ng t??i gi??p b???n!--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-9.png" class="img-thumbnail" alt="feature-1" />--}}
{{--                        <div>--}}
{{--                            CHI???N L?????C chuy???n ?????i s??? thay ?????i t??? nh???n th???c ?????n h??nh ?????ng. ???? l?? 1 qu?? tr??nh x??c ?????nh ra nh???ng tr???ng t??m chuy???n ?????i ????? l??m v???ng ch???c c??c l???i th??? c???nh tranh hay c???ng c??? c??c r??o c???n c???nh tranh c???a doanh nghi???p trong c??? ng???n v?? d??i h???n"--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-10.png" class="img-thumbnail" alt="feature-2" />--}}
{{--                        <div>--}}
{{--                            TH??CH TH???C chuy???n ?????i s??? ?????n t??? vi???c ???ng d???ng c??ng ngh??? v??o ho???t ?????ng kinh doanh c???a doanh nghi???p. N?? ????i h???i s??? chu???n b??? k??? c??ng t??? c??? 2 g??c ????? nh??n s??? v?? k??? thu???t "--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-11.png" class="img-thumbnail" alt="feature-3" />--}}
{{--                        <div>--}}
{{--                            C?? H???I ?????n t??? chuy???n ?????i s??? ng??y nay l?? r???t r?? r???t h??n bao gi??? h???t b???i h??nh vi ng?????i d??ng ???? thay ?????i r???t nhi???u trong th???i gian qua do s??? b??ng n??? c???a c??ng ngh??? ???????c th??c ?????y b???i d???ch b???nh Covid-19"--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">--}}
{{--                    <div class="list-feature">--}}
{{--                        <img src="{{ env('APP_URL') }}img/feature-12.png" class="img-thumbnail" alt="feature-4" />--}}
{{--                        <div>--}}
{{--                            ???NG D???NG chuy???n ?????i s??? v??o doanh nghi???p nh?? th??? n??o v???n l?? c??u h???i l??m b??n kho??n nhi???u ch??? doanh nghi???p. C?? 1 ??i???u ch???c ch???n, chuy???n ?????i s??? ph???i l?? ?????ng l???c, ph???i ph???c v??? cho ho???t ?????ng kinh doanh, khi ???? doanh nghi???p s??? th??nh c??ng."--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="grey-section">--}}
{{--    <div class="container section-3">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                <h2 class="title">--}}
{{--                    S??? KH??C BI???T C???A "BUSINESS CHAT" V?? CHAT--}}
{{--                </h2>--}}
{{--                <div>--}}
{{--                    <div class="section-3--different-point">??i???m kh??c bi???t 1</div>--}}
{{--                    <div class="section-3--different-point">??i???m kh??c bi???t 2</div>--}}
{{--                    <div class="section-3--different-point">??i???m kh??c bi???t 3</div>--}}
{{--                    <div class="section-3--different-point">??i???m kh??c bi???t 4</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="col-lg-6 col-md-12 col-sm-12 different-thumbnail"--}}
{{--                style="display: flex; justify-content: center; align-items: center"--}}
{{--            >--}}
{{--                <img--}}
{{--                    src="{{ env('APP_URL') }}img/different_chat.png"--}}
{{--                    class="img-thumbnail img-responsive"--}}
{{--                    alt="Blog and Me-different-chats"--}}
{{--                />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="white-section">--}}
{{--    <div class="container section-4">--}}
{{--        <h4 class="title">--}}
{{--            GI???I PH??P T???I ??U 60% TH???I GIAN CH??A HI???U QU??? TRONG GIAO TI???P C??NG VI???C--}}
{{--            ????? T???O RA KH??C BI???T CHO DOANH NGHI???P--}}
{{--        </h4>--}}
{{--        <div style="margin-top: 80px">--}}
{{--            <div class="row" style="margin-bottom: 80px">--}}
{{--                <div class="col-md-6 left">--}}
{{--                    <img--}}
{{--                        class="img-thumbnail"--}}
{{--                        style="border: none"--}}
{{--                        src="{{ env('APP_URL') }}img/solution-1.png"--}}
{{--                        alt="Blog and Me-solution-1"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="col-md-6 order-first order-md-last right">--}}
{{--                    <h5 class="section-4--solution-title">--}}
{{--                        Qu???n tr??? giao ti???p theo c??c lu???ng c??ng vi???c--}}
{{--                        </h6>--}}
{{--                        <p class="section-4--solution-description">--}}
{{--                            Qu???n tr??? giao ti???p theo c??c lu???ng c??ng vi???c Qu???n tr??? chi ti???t--}}
{{--                            t???ng th??ng tin theo ?????u vi???c, bi???t ???????c ng?????i li??n quan ?????n c??ng--}}
{{--                            vi???c ???? ??ang l??m g??, v?? l??m ?????n ????u. Tr???ng th??i c??ng vi???c ????--}}
{{--                            ???????c x??? l??, c???p nh???t nh?? th??? n??o--}}
{{--                        </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-bottom: 80px">--}}
{{--                <div class="col-md-6 left">--}}
{{--                    <h5 class="section-4--solution-title">--}}
{{--                        M??i tr?????ng c???ng t??c li???n m???ch, t???c ?????, linh ho???t--}}
{{--                    </h5>--}}
{{--                    <p class="section-4--solution-description">--}}
{{--                        C???ng t??c giao ti???p t????ng ??????ng Slack D??? d??ng c???ng t??c th??ng qua--}}
{{--                        c??c k??nh ??m thanh, h??nh ???nh v?? chia s??? m??n h??nh t????ng ??????ng--}}
{{--                        Discord Thi???t l???p v?? qu???n l?? ?????u vi???c logic hi???u qu??? nh?? Trello--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 right">--}}
{{--                    <img--}}
{{--                        class="img-thumbnail"--}}
{{--                        style="border: none"--}}
{{--                        src="{{ env('APP_URL') }}img/solution-2.png"--}}
{{--                        alt="Blog and Me-solution-2"--}}
{{--                    />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-bottom: 80px">--}}
{{--                <div class="col-md-6 left">--}}
{{--                    <img--}}
{{--                        class="img-thumbnail"--}}
{{--                        style="border: none"--}}
{{--                        src="{{ env('APP_URL') }}img/solution-3.png"--}}
{{--                        alt="Blog and Me-solution-3"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="col-md-6 order-first order-md-last right">--}}
{{--                    <h5 class="section-4--solution-title">--}}
{{--                        H??? th???ng h??a ngu???n tri th???c ???n trong doanh nghi???p ?????n t??? giao--}}
{{--                        ti???p c??ng vi???c h??ng ng??y--}}
{{--                    </h5>--}}
{{--                    <p class="section-4--solution-description">--}}
{{--                        Des: Vi???c h???c t???p di???n ra ????n gi???n ngay t???i n??i ????i h???i tri th???c--}}
{{--                        l?? lu???ng x??? l?? c??ng vi???c. Doanh nghi???p c?? th??? t??? t??? ch???c c??c--}}
{{--                        ch????ng tr??nh nh?? Neo Manager, Pragmatic Scrum v?? c??c ch????ng--}}
{{--                        tr??nh n??ng cao, d??i h???n.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-bottom: 80px">--}}
{{--                <div class="col-md-6 left">--}}
{{--                    <h5 class="section-4--solution-title">--}}
{{--                        M??i tr?????ng c???ng t??c li???n m???ch, t???c ?????, linh ho???t--}}
{{--                    </h5>--}}
{{--                    <p class="section-4--solution-description">--}}
{{--                        C???ng t??c giao ti???p t????ng ??????ng Slack D??? d??ng c???ng t??c th??ng qua--}}
{{--                        c??c k??nh ??m thanh, h??nh ???nh v?? chia s??? m??n h??nh t????ng ??????ng--}}
{{--                        Discord Thi???t l???p v?? qu???n l?? ?????u vi???c logic hi???u qu??? nh?? Trello--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 right">--}}
{{--                    <img--}}
{{--                        class="img-thumbnail"--}}
{{--                        style="border: none"--}}
{{--                        src="{{ env('APP_URL') }}img/solution-4.png"--}}
{{--                        alt="Blog and Me-solution-4"--}}
{{--                    />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="grey-section">--}}
{{--    <div class="container section-5">--}}
{{--        <h3 class="title">CH???NG NH???N C???A Blog and Me</h3>--}}
{{--        <div style="margin-top: 40px; margin-bottom: 40px">--}}
{{--            <p class="section-5--description">--}}
{{--                Gi???i thi???u v??? ch???ng ch??? Lorem ipsum dolor sit amet, consectetur--}}
{{--                adipiscing elit, sed do eiusmod tempor incididunt ut labore et--}}
{{--                dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit--}}
{{--                dolor magna eget est lorem ipsum dolor sit.--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-sm-12 col-xs-12 section-5--thumbnail">--}}
{{--                <img--}}
{{--                    src="{{ env('APP_URL') }}img/placeholder.png"--}}
{{--                    alt="Blog and Me-placeholder-img"--}}
{{--                    class="img-thumbnail"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-12 col-xs-12 section-5--thumbnail">--}}
{{--                <img--}}
{{--                    src="{{ env('APP_URL') }}img/placeholder.png"--}}
{{--                    alt="Blog and Me-placeholder-img"--}}
{{--                    class="img-thumbnail"--}}
{{--                />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="white-section">--}}
{{--    <div class="container section-6">--}}
{{--        <h2 class="title">OUR CLIENT AND PARTNER</h2>--}}
{{--        <div style="margin-top: 40px; margin-bottom: 80px">--}}
{{--            <p class="section-6--description">--}}
{{--                Danh s??ch ?????i t??c ng??y c??ng d??i th??m l?? minh ch???ng cho m???i quan h???--}}
{{--                h???p t??c hi???u qu??? c??ng c??c ?????i t??c t???i Vi???t Nam v?? nhi???u qu???c gia--}}
{{--                tr??n th??? gi???i. Blog and Me t??? h??o ???????c k??? t??n c??c th????ng hi???u n???i ti???ng--}}
{{--                m?? ch??ng t??i ???? v?? ??ang h???p t??c.--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="brands-list">--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-1.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 1"--}}
{{--                    />--}}
{{--                    <div>Brand name 1</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-2.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 2"--}}
{{--                    />--}}
{{--                    <div>Brand name 2</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-3.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 3"--}}
{{--                    />--}}
{{--                    <div>Brand name 3</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-4.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 4"--}}
{{--                    />--}}
{{--                    <div>Brand name 4</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-5.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 5"--}}
{{--                    />--}}
{{--                    <div>Brand name 5</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="brand-partner"--}}
{{--                style="--}}
{{--              text-align: center;--}}
{{--              display: flex;--}}
{{--              align-items: center;--}}
{{--              justify-content: center;--}}
{{--            "--}}
{{--            >--}}
{{--                <div class="brand-wrapper">--}}
{{--                    <img--}}
{{--                        src="{{ env('APP_URL') }}img/logo-1.png"--}}
{{--                        class="img-fluid"--}}
{{--                        alt="Logo 6"--}}
{{--                    />--}}
{{--                    <div>Brand name 6</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div--}}
{{--            id="carousel-example-generic"--}}
{{--            class="carousel multi slide"--}}
{{--            data-ride="carousel"--}}
{{--            data-itemcount-l="4"--}}
{{--            data-itemcount-m="3"--}}
{{--            data-itemcount-s="2"--}}
{{--            autostart="0"--}}
{{--        >--}}
{{--            <div class="carousel-wrapper">--}}
{{--                <div class="carousel-nav-button-wrapper">--}}
{{--                    <a--}}
{{--                        class="left carousel-control"--}}
{{--                        href="#carousel-example-generic"--}}
{{--                        role="button"--}}
{{--                        data-slide="prev"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="{{ env('APP_URL') }}img/prev-button.png"--}}
{{--                            alt="carousel-prev-button"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="carousel-inner" role="listbox">--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-1.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 1"--}}
{{--                            />--}}
{{--                            <div>Brand name 1</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-2.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 2"--}}
{{--                            />--}}
{{--                            <div>Brand name 2</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-3.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 3"--}}
{{--                            />--}}
{{--                            <div>Brand name 3</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-4.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 4"--}}
{{--                            />--}}
{{--                            <div>Brand name 4</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-5.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 5"--}}
{{--                            />--}}
{{--                            <div>Brand name 5</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="col-xs-12 col-sm-6 col-md-4 col-lg-3"--}}
{{--                        style="--}}
{{--                  text-align: center;--}}
{{--                  display: flex;--}}
{{--                  align-items: center;--}}
{{--                  justify-content: center;--}}
{{--                "--}}
{{--                    >--}}
{{--                        <div class="brand-wrapper">--}}
{{--                            <img--}}
{{--                                src="{{ env('APP_URL') }}img/logo-1.png"--}}
{{--                                class="img-fluid"--}}
{{--                                alt="Logo 6"--}}
{{--                            />--}}
{{--                            <div>Brand name 6</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-nav-button-wrapper">--}}
{{--                    <a--}}
{{--                        class="right carousel-control"--}}
{{--                        href="#carousel-example-generic"--}}
{{--                        role="button"--}}
{{--                        data-slide="next"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="{{ env('APP_URL') }}img/next-button.png"--}}
{{--                            alt="carousel-next-button"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="grey-section">--}}
{{--    <div class="container section-7">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                <h2 class="title">--}}
{{--                    ????NG K?? NH???N NGAY DEMO ?????C BI???T D??NH RI??NG DOANH NGHI???P--}}
{{--                </h2>--}}
{{--                <div class="margin-top-40">--}}
{{--                    <form>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="signup-input">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4 6.12005H3.59995C3.00348 6.12005 2.51995 6.60358 2.51995 7.20005V18C2.51995 18.5965 3.00348 19.08 3.59995 19.08H20.4C20.9964 19.08 21.4799 18.5965 21.4799 18V7.20005C21.4799 6.60358 20.9964 6.12005 20.4 6.12005ZM3.59995 4.80005C2.27447 4.80005 1.19995 5.87457 1.19995 7.20005V18C1.19995 19.3255 2.27447 20.4 3.59995 20.4H20.4C21.7254 20.4 22.7999 19.3255 22.7999 18V7.20005C22.7999 5.87457 21.7254 4.80005 20.4 4.80005H3.59995Z" fill="#ADB4B6"/>--}}
{{--                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.91456 6.47636L12.4001 13.0077L22.0883 6.45722L22.8236 7.55187L12.7825 14.3411C12.5677 14.4863 12.288 14.4915 12.0679 14.3544L1.2207 7.59778L1.91456 6.47636Z" fill="#ADB4B6"/>--}}
{{--                                </svg>--}}

{{--                                <input class="signup-input-text" placeholder="Nh???p Email c???a b???n" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="signup-input">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M16.457 5.02421C16.2031 4.42084 15.8373 3.88369 15.3594 3.43485C14.9115 2.97864 14.3739 2.61809 13.7691 2.36791C13.1793 2.12509 12.5596 2 11.9175 2H11.8727H11.7981C11.1634 2 10.5437 2.11773 9.96138 2.36055C9.34915 2.61073 8.80412 2.97128 8.34869 3.4422C7.87832 3.89105 7.50501 4.4282 7.25863 5.02421C7.00478 5.62758 6.87785 6.26775 6.89278 6.91527C6.87785 7.56279 7.00478 8.19559 7.25863 8.7916C7.51248 9.39497 7.87832 9.92476 8.35615 10.381C8.81159 10.8445 9.35662 11.2051 9.96885 11.4553C10.5587 11.6907 11.1709 11.8158 11.8055 11.8158H11.8802H11.9474C12.582 11.8158 13.2017 11.6981 13.7841 11.4553C14.3963 11.2051 14.9339 10.8445 15.3968 10.3736C15.8597 9.92476 16.2255 9.38762 16.4719 8.78424C16.7183 8.18087 16.8377 7.54807 16.8228 6.90055C16.8303 6.26775 16.7108 5.62758 16.457 5.02421ZM11.8503 10.4693H11.7682C11.3202 10.4693 10.8797 10.381 10.4616 10.2117C10.0211 10.0351 9.6254 9.77024 9.29689 9.43176C8.95345 9.10065 8.69213 8.71066 8.51294 8.27653C8.33375 7.8424 8.25163 7.38619 8.25909 6.91527C8.25163 6.43698 8.34122 5.98078 8.52041 5.54664C8.70706 5.11251 8.96838 4.72253 9.31929 4.39877C9.65527 4.05293 10.051 3.78804 10.4915 3.61144C10.9096 3.4422 11.3576 3.35391 11.813 3.35391H11.8802H11.9399C12.4028 3.35391 12.8508 3.4422 13.2689 3.6188C13.7094 3.80275 14.1051 4.06029 14.4336 4.39877C14.7771 4.72989 15.0384 5.11987 15.2101 5.554C15.3818 5.98813 15.464 6.43698 15.449 6.90791C15.4565 7.38619 15.3669 7.8424 15.1877 8.28389C15.0085 8.71802 14.7397 9.108 14.3963 9.43176C14.0603 9.77024 13.6646 10.0351 13.2241 10.2117C12.806 10.381 12.358 10.4693 11.9026 10.4693H11.8503ZM12.3879 3.20674C12.47 3.2141 12.5521 3.2141 12.6343 3.22882C12.5521 3.22146 12.47 3.22146 12.3879 3.20674ZM11.1186 3.22882C11.2008 3.2141 11.2829 3.2141 11.3576 3.20674C11.2754 3.22146 11.1933 3.2141 11.1186 3.22882ZM11.3202 10.6091C11.2381 10.6017 11.156 10.6017 11.0813 10.587C11.1634 10.6017 11.2456 10.6017 11.3202 10.6091ZM12.6044 10.587C12.5223 10.6017 12.4476 10.6017 12.3655 10.6091C12.4476 10.6017 12.5297 10.6017 12.6044 10.587ZM14.5157 2.97864C14.7696 3.14788 15.0085 3.34655 15.2325 3.57465C15.016 3.34655 14.7771 3.14788 14.5157 2.97864C14.2544 2.8094 13.9856 2.66224 13.6945 2.53715C13.5526 2.47828 13.4033 2.42677 13.2614 2.38263C13.4108 2.42677 13.5526 2.47828 13.6945 2.53715C13.9856 2.65488 14.2619 2.80204 14.5157 2.97864ZM11.8727 2.18395C11.8877 2.18395 11.9026 2.18395 11.9175 2.18395C11.9996 2.18395 12.0818 2.19131 12.1639 2.19867C12.0668 2.19131 11.9698 2.18395 11.8727 2.18395C11.7682 2.18395 11.6711 2.19131 11.5741 2.19131C11.6487 2.18395 11.7234 2.1766 11.8055 2.1766C11.8279 2.18395 11.8503 2.18395 11.8727 2.18395ZM13.1046 2.34583C13.0076 2.32376 12.9105 2.29433 12.8135 2.27225C12.9105 2.29433 13.0076 2.3164 13.1046 2.34583ZM12.6343 2.24282C12.5447 2.2281 12.4551 2.21339 12.358 2.20603C12.4476 2.21339 12.5447 2.2281 12.6343 2.24282ZM10.4691 2.37527C10.3198 2.41942 10.1779 2.47092 10.0286 2.52979C10.1779 2.47092 10.3198 2.41942 10.4691 2.37527ZM11.38 2.20603C11.2904 2.21339 11.1933 2.2281 11.1037 2.24282C11.1933 2.2281 11.2829 2.21339 11.38 2.20603ZM10.9171 2.27225C10.82 2.29433 10.7155 2.3164 10.6184 2.34583C10.7229 2.3164 10.82 2.28697 10.9171 2.27225ZM8.48308 10.2485C8.37109 10.1382 8.25909 10.0278 8.16203 9.91005C8.25909 10.0278 8.37109 10.1382 8.48308 10.2485C8.59507 10.3589 8.70706 10.4693 8.82652 10.5649C8.70706 10.4693 8.5876 10.3589 8.48308 10.2485ZM10.4691 11.4405C10.3198 11.3964 10.1779 11.3449 10.0286 11.286C10.1779 11.3449 10.3198 11.3964 10.4691 11.4405ZM11.8727 11.6319C11.8503 11.6319 11.8205 11.6319 11.7981 11.6319C11.7234 11.6319 11.6487 11.6245 11.5741 11.6245C11.6711 11.6245 11.7757 11.6319 11.8727 11.6319C11.9772 11.6319 12.0743 11.6245 12.1714 11.6245C12.0967 11.6319 12.022 11.6392 11.9399 11.6392C11.925 11.6319 11.9026 11.6319 11.8727 11.6319ZM10.6184 11.4773C10.7155 11.5068 10.82 11.5288 10.9171 11.5509C10.82 11.5288 10.7155 11.4994 10.6184 11.4773ZM11.1037 11.573C11.1933 11.5877 11.2829 11.6024 11.38 11.6098C11.2829 11.6024 11.1933 11.5877 11.1037 11.573ZM13.2764 11.4405C13.4257 11.3964 13.5675 11.3449 13.7094 11.286C13.5675 11.3449 13.4257 11.3964 13.2764 11.4405ZM12.373 11.6098C12.4625 11.6024 12.5596 11.5877 12.6492 11.573C12.5596 11.5877 12.4625 11.6024 12.373 11.6098ZM12.8284 11.5509C12.9255 11.5288 13.03 11.5068 13.127 11.4773C13.03 11.4994 12.9329 11.5288 12.8284 11.5509ZM16.3002 8.71802C16.1807 9.00499 16.0314 9.27724 15.8597 9.53478C15.6879 9.79232 15.4864 10.0278 15.2624 10.2485C15.0458 10.4693 14.7995 10.6753 14.5456 10.8445C14.8069 10.6679 15.0458 10.4693 15.2624 10.2485C15.4864 10.0278 15.6879 9.79232 15.8597 9.53478C16.0314 9.2846 16.1807 9.00499 16.3002 8.71802C16.3599 8.57822 16.4122 8.43105 16.457 8.28389C16.4047 8.43105 16.3524 8.57822 16.3002 8.71802Z" fill="#ADB4B6"/>--}}
{{--                                    <path d="M20.3324 16.0033C20.2577 15.5765 20.1532 15.1424 20.0188 14.723C19.8844 14.3109 19.7052 13.9062 19.4887 13.5309C19.2647 13.1557 18.9885 12.8098 18.6674 12.5081C18.3165 12.1917 17.9208 11.9489 17.4803 11.7723C17.0024 11.5957 16.5097 11.5074 16.002 11.5074H15.9945H15.9647C15.6361 11.5369 15.33 11.6693 15.0762 11.8753L14.2848 12.383C13.9712 12.567 13.6352 12.7142 13.2768 12.8098C12.8737 12.9423 12.463 13.0085 12.0449 13.0085C11.6044 13.0085 11.1788 12.9423 10.7682 12.8025C10.4098 12.6921 10.0738 12.5449 9.76026 12.3536L8.94644 11.8459C8.71499 11.6546 8.41634 11.5295 8.08783 11.4927L8.0281 11.4854H8.01317H7.99824C7.5204 11.4927 7.0575 11.5884 6.60953 11.7502C6.16902 11.9195 5.77332 12.1697 5.42241 12.4861C5.10136 12.7877 4.83258 13.1336 4.60859 13.5089C4.38461 13.8841 4.20542 14.2888 4.06356 14.7009C3.92917 15.1203 3.82465 15.5544 3.74998 15.9812C3.64546 16.3933 3.56333 16.82 3.5036 17.2542V18.4388C3.4812 18.9171 3.56333 19.388 3.74998 19.8442C3.92917 20.2931 4.20542 20.6978 4.55633 21.0363C4.91471 21.3674 5.33281 21.6176 5.78825 21.7794C6.19889 21.9266 6.62446 22.0002 7.06497 22.0002C7.11723 22.0002 7.16203 22.0002 7.21429 22.0002H16.7934C16.8382 22.0002 16.8905 22.0002 16.9427 22.0002C17.3758 22.0002 17.8088 21.9266 18.212 21.7794C18.6749 21.6102 19.0855 21.3674 19.4439 21.0363C19.8023 20.6904 20.071 20.2931 20.2502 19.8442C20.4294 19.3954 20.519 18.9171 20.4966 18.4315V17.2836C20.4668 16.8421 20.407 16.4153 20.3324 16.0033ZM16.7934 20.6389H7.20682C7.14709 20.6389 7.1023 20.6463 7.0575 20.6463C6.79618 20.6463 6.53487 20.6021 6.28102 20.5138C5.98984 20.4108 5.72105 20.2563 5.4896 20.0503C5.28055 19.8442 5.11629 19.5941 5.0043 19.3145C4.89231 19.0348 4.85498 18.7405 4.86991 18.4388V17.3351C4.89231 16.9746 4.94457 16.5993 5.01923 16.2314C5.07896 15.8561 5.17602 15.4882 5.29548 15.135C5.40001 14.8039 5.54187 14.4875 5.70612 14.1858C5.86291 13.9136 6.05703 13.6707 6.28102 13.45C6.49754 13.2513 6.74392 13.0968 7.02764 12.9864C7.32628 12.876 7.63986 12.8172 7.96091 12.8098H7.98331C8.05797 12.8466 8.13263 12.8908 8.19983 12.9423L9.03604 13.4647C9.45414 13.7149 9.89465 13.9136 10.3576 14.0534C10.8876 14.2226 11.4476 14.3109 12.0076 14.3109C12.5675 14.3109 13.12 14.2226 13.6576 14.0534C14.1205 13.9136 14.5685 13.7149 14.9791 13.4647L15.8004 12.9423C15.8751 12.8908 15.9497 12.8466 16.0318 12.8025C16.338 12.8098 16.6366 12.8687 16.9203 12.9791C17.1966 13.0821 17.4504 13.244 17.6669 13.4426C17.8909 13.656 18.085 13.8988 18.2418 14.1711C18.4136 14.4728 18.5554 14.7892 18.6674 15.1203C18.7794 15.4735 18.8765 15.8414 18.9362 16.2093C19.0034 16.6066 19.0556 16.9893 19.0855 17.3351C19.1079 17.5559 19.1004 17.784 19.093 18.0268C19.093 18.1519 19.0855 18.277 19.0855 18.4094C19.1079 18.7184 19.0706 19.0128 18.9735 19.2924C18.8765 19.572 18.7197 19.8222 18.5106 20.0429C18.2866 20.2342 18.0253 20.3961 17.7267 20.4991C17.4728 20.5874 17.2115 20.6316 16.9502 20.6316C16.883 20.6463 16.8382 20.6463 16.7934 20.6389ZM6.82605 20.8082C6.77379 20.8008 6.72899 20.8008 6.67673 20.7935C6.72152 20.8082 6.77379 20.8082 6.82605 20.8082ZM17.316 20.8008C17.2638 20.8082 17.219 20.8082 17.1667 20.8155C17.219 20.8082 17.2638 20.8082 17.316 20.8008ZM16.7113 11.7576C16.9502 11.8018 17.1816 11.8606 17.4131 11.9489C17.1816 11.8606 16.9502 11.8018 16.7113 11.7576ZM16.002 11.6914C16.1588 11.6914 16.3156 11.7135 16.4724 11.7355C16.3081 11.7135 16.1513 11.6914 15.987 11.6914C15.987 11.6914 15.9945 11.6914 16.002 11.6914ZM11.5895 13.1557C11.5148 13.1483 11.4401 13.1483 11.3655 13.1409C11.4401 13.1483 11.5148 13.1483 11.5895 13.1557ZM6.49007 21.7574C6.27355 21.7206 6.0645 21.6691 5.85545 21.5955C6.0645 21.6691 6.27355 21.7279 6.49007 21.7574ZM7.06497 21.8089C6.94551 21.8089 6.82605 21.7868 6.69912 21.7794C6.86338 21.7942 7.0351 21.8162 7.20682 21.8089C7.16203 21.8089 7.10976 21.8089 7.06497 21.8089ZM16.7934 21.8089C16.9651 21.8162 17.1368 21.8015 17.3011 21.7794C17.1816 21.7942 17.0622 21.8089 16.9427 21.8089C16.8905 21.8089 16.8457 21.8089 16.7934 21.8089ZM17.5176 21.7574C17.7341 21.7206 17.9432 21.6691 18.1522 21.5955C17.9432 21.6764 17.7341 21.7279 17.5176 21.7574Z" fill="#ADB4B6"/>--}}
{{--                                </svg>--}}
{{--                                <input class="signup-input-text" placeholder="H??? v?? t??n" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="signup-input">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M21.8118 17.0866C21.6895 16.8137 21.5013 16.569 21.313 16.409L18.8377 13.9619C18.6495 13.7455 18.4142 13.5761 18.1601 13.4631C17.6236 13.2184 16.993 13.2184 16.4565 13.4631C16.1836 13.5855 15.9577 13.7643 15.7883 13.9525L15.713 14.0278C15.2613 14.4796 14.8001 14.9313 14.3483 15.3925C14.2636 15.3455 14.1695 15.3078 14.0848 15.2608C13.8965 15.1666 13.7083 15.0819 13.5483 14.9784C12.1271 14.0561 10.8848 12.9266 9.82125 11.5808C9.34125 10.9878 8.93655 10.3572 8.58831 9.63252C8.99302 9.23723 9.39772 8.83252 9.79302 8.42782L9.96243 8.2584C10.1977 8.07017 10.386 7.82546 10.5083 7.55252C10.6307 7.27958 10.706 6.9784 10.706 6.67723C10.706 6.37605 10.6401 6.07487 10.5083 5.80193C10.386 5.52899 10.1977 5.28429 10.0095 5.1337L8.77655 3.89134C8.38125 3.49605 7.96713 3.07252 7.58125 2.69605C7.38361 2.47958 7.14831 2.30076 6.88478 2.1784C6.34831 1.9337 5.72714 1.9337 5.19066 2.1784C4.91772 2.30076 4.68243 2.47958 4.52243 2.66781C4.31537 2.86546 4.10831 3.07252 3.90125 3.27958C3.60008 3.59017 3.28949 3.90076 2.9789 4.19252C2.39537 4.7384 2.04714 5.48193 2.00949 6.29134C1.96243 7.43017 2.16949 8.5784 2.60243 9.6137C3.41184 11.7125 4.56949 13.6419 6.03772 15.3266C7.97655 17.6513 10.3389 19.4961 13.0495 20.8137C14.3013 21.4725 15.6471 21.8584 17.0401 21.9808C17.1624 21.9902 17.2942 21.9996 17.4165 21.9996C17.8213 21.9996 18.2354 21.9243 18.6118 21.7831C19.1107 21.5949 19.5624 21.2843 19.9201 20.8796C20.193 20.5784 20.4848 20.2866 20.786 19.9949C20.9648 19.8255 21.1436 19.6466 21.2754 19.5055C21.5013 19.3078 21.6895 19.0725 21.8118 18.809C21.9342 18.5455 22.0095 18.2443 22.0095 17.9431C22.0001 17.6419 21.9342 17.3596 21.8118 17.0866ZM20.7389 18.3102C20.6824 18.4231 20.6071 18.5266 20.466 18.649C20.2965 18.8184 20.1271 18.9878 19.9577 19.1572C19.6471 19.4678 19.3271 19.769 19.0354 20.0984C18.8001 20.3619 18.5083 20.5596 18.1883 20.6819C17.8683 20.8043 17.5107 20.8513 17.1436 20.8043C15.8918 20.7008 14.6965 20.3525 13.5671 19.7596C10.9883 18.5078 8.75772 16.7666 6.92243 14.5643C5.5389 12.9643 4.45655 11.1572 3.68478 9.17135C3.30831 8.27723 3.12949 7.2984 3.17655 6.34782C3.20478 5.84899 3.42125 5.38781 3.78831 5.04899C4.10831 4.7384 4.42831 4.42781 4.7389 4.10781C4.93655 3.91017 5.14361 3.70311 5.36949 3.46781C5.45419 3.3737 5.54831 3.2984 5.67066 3.25134C5.78361 3.19487 5.90596 3.17605 6.03772 3.17605C6.16949 3.17605 6.28243 3.20429 6.40478 3.25134C6.50831 3.30781 6.61184 3.38311 6.72478 3.50546C7.1389 3.91017 7.55302 4.32429 7.96714 4.74781L9.2189 5.99958C9.31302 6.08429 9.39772 6.18782 9.45419 6.30076C9.51066 6.42311 9.5389 6.54546 9.5389 6.67723C9.5389 6.80899 9.51066 6.93134 9.45419 7.0537C9.39772 7.17605 9.32243 7.27017 9.17184 7.38311L8.96478 7.59958C8.53184 8.04193 8.0989 8.47487 7.70361 8.86076C7.53419 8.99252 7.42125 9.18076 7.37419 9.39723C7.33655 9.6137 7.37419 9.83017 7.44949 9.96193C7.82596 10.809 8.31537 11.609 8.90831 12.3055C10.0377 13.7266 11.3836 14.9502 12.9177 15.9478C13.1248 16.0796 13.3507 16.1831 13.5671 16.2961C13.6989 16.3619 13.8307 16.4184 13.8965 16.4561C13.9907 16.5219 14.0942 16.569 14.226 16.5972C14.3389 16.6255 14.4613 16.6255 14.5742 16.5972C14.6871 16.5784 14.8001 16.5313 14.8942 16.4655C14.9789 16.409 15.0448 16.3431 15.1107 16.2678C15.5813 15.7878 16.0613 15.3078 16.5413 14.8372L16.6448 14.7337C16.7295 14.6396 16.8236 14.5643 16.946 14.5078C17.1718 14.4043 17.4354 14.4043 17.6707 14.5078C17.7836 14.5549 17.8871 14.6302 17.9718 14.7337L20.5224 17.2561C20.6165 17.3408 20.7013 17.4443 20.7483 17.5572C20.7954 17.689 20.8236 17.8113 20.8236 17.9431C20.8236 18.0749 20.7954 18.1972 20.7389 18.3102Z" fill="#ADB4B6"/>--}}
{{--                                </svg>--}}

{{--                                <input class="signup-input-text" placeholder="S??? ??i???n tho???i" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4 company-size">Company size</div>--}}
{{--                                <div class="col-md-8 company-size-option">--}}
{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input--}}
{{--                                            class="form-check-input radio-button"--}}
{{--                                            type="radio"--}}
{{--                                            name="exampleRadios"--}}
{{--                                            id="exampleRadios1"--}}
{{--                                            value="option1"--}}
{{--                                            checked--}}
{{--                                        />--}}
{{--                                        <label class="form-check-label" for="exampleRadios1">--}}
{{--                                            <50--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input--}}
{{--                                            class="form-check-input radio-button"--}}
{{--                                            type="radio"--}}
{{--                                            name="exampleRadios"--}}
{{--                                            id="exampleRadios2"--}}
{{--                                            value="option2"--}}
{{--                                        />--}}
{{--                                        <label class="form-check-label" for="exampleRadios2">--}}
{{--                                            50-100--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input--}}
{{--                                            class="form-check-input radio-button"--}}
{{--                                            type="radio"--}}
{{--                                            name="exampleRadios"--}}
{{--                                            id="exampleRadios3"--}}
{{--                                            value="option3"--}}
{{--                                        />--}}
{{--                                        <label class="form-check-label" for="exampleRadios3">--}}
{{--                                            100-500--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input--}}
{{--                                            class="form-check-input radio-button"--}}
{{--                                            type="radio"--}}
{{--                                            name="exampleRadios"--}}
{{--                                            id="exampleRadios4"--}}
{{--                                            value="option4"--}}
{{--                                        />--}}
{{--                                        <label class="form-check-label" for="exampleRadios4">--}}
{{--                                            >500--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button--}}
{{--                                    type="submit"--}}
{{--                                    class="button-filled"--}}
{{--                                    style="width: 100%; margin-top: 40px"--}}
{{--                                >--}}
{{--                                    Tr???i nghi???m ngay--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="col-lg-6 col-md-12 col-sm-12 signup-thumbnail"--}}
{{--                style="display: flex; align-items: center; justify-content: center"--}}
{{--            >--}}
{{--                <img--}}
{{--                    src="{{ env('APP_URL') }}img/signup.png"--}}
{{--                    alt="Blog and Me-signup"--}}
{{--                    class="img-thumbnail"--}}
{{--                    style="background-color: transparent"--}}
{{--                />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="white-section">--}}
{{--    <div class="container section-8">--}}
{{--        <div class="section-8--header">--}}
{{--            <div class="section-8--title-wrapper">--}}
{{--                <h2 class="title">TH??NG TIN H???U ??CH</h2>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <a href="#">--}}
{{--                    <button class="section-8--see-more-button-wrapper-top">--}}
{{--                        Xem th??m--}}
{{--                        <img src="{{ env('APP_URL') }}img/arrow-right.png" alt="arrow-right-icon" />--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section-8--items row">--}}
{{--            <div class="">--}}
{{--                <div class="section-8--item margin-right-16">--}}
{{--                    <div class="section-8--item-thumbnail">--}}
{{--                        <img--}}
{{--                            src="{{ env('APP_URL') }}img/placeholder.png"--}}
{{--                            alt="blog-thumbnail"--}}
{{--                            class="img-thumbnail"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                    <div class="section-8--item-info">--}}
{{--                        <h6>This is title 1</h6>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed--}}
{{--                            do eiusmod tempot labore et dolore magna aliqua. Nisl--}}
{{--                            tincidunt ....--}}
{{--                        </p>--}}
{{--                        <div class="section-8--item-footer">--}}
{{--                            <div style="flex: 1">BY <span>AUTHOR NAME</span></div>--}}
{{--                            <a href="#">--}}
{{--                                <div class="see-more">--}}
{{--                                    Xem th??m--}}
{{--                                    <img--}}
{{--                                        src="{{ env('APP_URL') }}img/arrow-right.png"--}}
{{--                                        alt="arrow-right-icon"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <div class="section-8--item margin-right-16">--}}
{{--                    <div class="section-8--item-thumbnail">--}}
{{--                        <img src="{{ env('APP_URL') }}img/placeholder.png" class="img-thumbnail" alt="blog-thumbnail" />--}}
{{--                    </div>--}}
{{--                    <div class="section-8--item-info">--}}
{{--                        <h6>This is title 2</h6>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed--}}
{{--                            do eiusmod tempot labore et dolore magna aliqua. Nisl--}}
{{--                            tincidunt ....--}}
{{--                        </p>--}}
{{--                        <div class="section-8--item-footer">--}}
{{--                            <div style="flex: 1">BY <span>AUTHOR NAME</span></div>--}}
{{--                            <a href="#">--}}
{{--                                <div class="see-more">--}}
{{--                                    Xem th??m--}}
{{--                                    <img--}}
{{--                                        src="{{ env('APP_URL') }}img/arrow-right.png"--}}
{{--                                        alt="arrow-right-icon"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <div class="section-8--item">--}}
{{--                    <div class="section-8--item-thumbnail">--}}
{{--                        <img src="{{ env('APP_URL') }}img/placeholder.png" class="img-thumbnail" alt="blog-thumbnail"  />--}}
{{--                    </div>--}}
{{--                    <div class="section-8--item-info">--}}
{{--                        <h6>This is title 3</h6>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed--}}
{{--                            do eiusmod tempot labore et dolore magna aliqua. Nisl--}}
{{--                            tincidunt ....--}}
{{--                        </p>--}}
{{--                        <div class="section-8--item-footer">--}}
{{--                            <div style="flex: 1">BY <span>AUTHOR NAME</span></div>--}}
{{--                            <a href="#">--}}
{{--                                <div class="see-more">--}}
{{--                                    Xem th??m--}}
{{--                                    <img--}}
{{--                                        src="{{ env('APP_URL') }}img/arrow-right.png"--}}
{{--                                        alt="arrow-right-icon"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section-8--see-more-button-wrapper-bottom-wrapper">--}}
{{--            <a href="#">--}}
{{--                <button class="section-8--see-more-button-wrapper-bottom">--}}
{{--                    Xem t???t c???--}}
{{--                    <img src="{{ env('APP_URL') }}img/arrow-right.png" alt="arrow-right-icon" />--}}
{{--                </button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@yield('footer')

</div>
<script>
    (function ($) {
        function calcStepSize(optionNode) {
            var breakM = 990;
            var breakS = 768;
            var breakX = 559;
            var width = $(window).innerWidth();

            if (width < breakX) {
                var key = "x";
            } else if (width < breakS) {
                key = "s";
            } else if (width < breakM) {
                key = "m";
            } else {
                key = "l";
            }

            var cnt = 1 * optionNode.data("itemcount-" + key);

            return cnt > 0 ? cnt : 1;
        }

        function repartition(container, items, count) {
            container.children().remove();

            for (var i = 0; i < items.length; i++) {
                var cBlock = $('<div class="carousel-item" ></div').appendTo(
                    container
                );
                var cInnerBlock = $('<div class="row"></div>').appendTo(cBlock);

                for (var j = 0; j < count; j++) {
                    var cIdx = (i + j) % items.length;

                    cInnerBlock.append($(items.get(cIdx)).clone());
                }
            }

            container.children().first().addClass("active");
        }

        $(".carousel.multi").each(function (idx, El) {
            var carousel = $(El);
            var container = carousel.find(".carousel-inner");

            if (!container.children().first().hasClass("carousel-item")) {
                var items = container.children().clone();

                var lastSize = calcStepSize(carousel);
                repartition(container, items, lastSize);

                $(window).resize(function () {
                    var cSize = calcStepSize(carousel);

                    if (cSize != lastSize) {
                        repartition(container, items, cSize);
                        lastSize = cSize;
                    }
                });
            } else {
                container.children().first().addClass("active");
            }

            carousel.carousel({
                interval: false,
            });
        });
    })(jQuery);
</script>
</body>
</html>
