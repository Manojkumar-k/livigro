<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<link rel="shortcut icon" href="{{asset('images/livigro.png')}}" />

    <!-- Scripts -->
 <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap@4.0.0/dist/css/bootstrap.css" rel="stylesheet" />
<link href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      <!-- <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script> -->
<script src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js"></script>
<script src="https://unpkg.com/bootstrap@4.0.0/dist/js/bootstrap.js"></script>
    <!-- <script src="{{ asset('js/jquery.min.js') }}" defer></script> -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<style type="text/css">
/*contact*/
section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
/*product*/
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}




/*product end*/
.navbar .navbar-nav li > a{
  color: #199fc5 !important;
}
.navbar .navbar-nav li > a:active{
  color: #de3d7d !important;
}
.head{


    background: #f7f7f7;
    padding: 40px 25px;
    border-bottom: 1px solid #eaeaea;
}
 li span {
    border: 1px solid #47beb9;
    border-radius: 15px;
    color: #7a7a7a;
    font-size: 12px;
    padding: 3px 11px;
    margin-right: 8px;
}
.pro-content{

    margin-top: 15px;
}
.pro-content li{

    
    font-family: GothamNarrow-Book;
    color: #7a7a7a;
    text-transform: capitalize;
    font-size: 13px;
    padding: 0 0 5px;
    margin: 0;
        line-height: 20px;

}
.bgded {
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
}
#pageintro article {
    display: block;
    max-width: 60%;
    margin: 0 auto;
    text-align: center;
    position: relative;
    right: 5%;
}
.heading  {
    color: #fff !important;
    font-size: 40px !important;
    font-family: 'Do Hyeon', sans-serif;

}

em {
    font-style: italic;
    font-size: 30px;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
        margin-top: 0;
    margin-bottom: 10px;
}
.header_list_top  li:before {
    /*content: "\2714\0020";*/
    content: '✓';
    width: 25px;
    height: 25px;
    display: inline-block;
    color: #de3e7e;
    position: relative;
    right: 33px;
    padding: 0px 6px;
    margin-right: -23px;
    font-size: 30px;
    font-weight: 900;
}
 ul li {
     list-style: none;
    line-height: 40px;
    font-size: 18px;

}
.header_list_top {
    padding-left: 50px;
    font-size: 50px !important;
}


#pageintro p {
    max-width: 75%;
    margin: 0 auto;
}
#pageintro footer {
    margin-top: 50px;
}
address, article, aside, figcaption, figure, footer, header, main, nav, section {
    display: block;
    margin: 0;
    padding: 0;
}
*, *::before, *::after {
    transition: all .3s ease-in-out;
}

*, *::before, *::after {
    box-sizing: border-box;
}
#pageintro footer form {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 auto;
    overflow: hidden;
}

.clear, .clear::after, .group, .group::after {
    clear: both;
}
.clear, .group {
    display: block;
}
#sel{

color: #333;
    font-family: SFCompact L;
    width: 140px;
    border-top-right-radius: 0;
    padding: 0;
    height: 40px;
    font-size: 16px;
}
#sub
{

      background-color: #de3e7e;
    color: #fff;
    padding: 3px 26px;
    border: 1px solid #fff;
    font-size: 16px;
    letter-spacing: 0;
    font-family: "SFCompact M";
    text-transform: capitalize;
    border: none;
    height: 40px;
}

#txt {
    color: #333;
    font-size: 16px;
    background-color: #fff;
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #fff;
    padding: 0  5px 0 0;
    outline: none;
    max-width: 390px;
    font-family: "SFCompact L";
    letter-spacing: 0;
    height: 40px;
    margin-left: 2px;
}


#pageintro {
    color: #FFFFFF;
}
#pageintro {
    padding: 180px 0;
}
@media screen and (max-width: 978px)
.hoc {
    max-width: 90%;
}
.hoc {
    display: block;
    margin: 0 auto;
}
.clear, .clear::after, .group, .group::after {
    clear: both;
}

.clear, .group {
    display: block;
}
/*last block*/
 h2.sow-headline {
    text-align: center;
    line-height: 1.4em;
    position: relative;
    font-family: "SFCompact T";
    border-bottom: 1px solid #aaaaaa;
    display: table;
    margin: 20px auto !important;
    margin-top: 20px;
    font-weight: 200;
}
h3.sow-sub-headline {
    text-align: center;
    line-height: 1.4em;
    font-size: 16px;
    font-family: "SFCompact L";
    color: #555555;
    line-height: normal;
    max-width: 100%;
    margin: 35px auto 0px !important;
    text-align: center !important;
}
.sow-headline::after {
    content: "";
    background: #199fc5;
    background: -moz-linear-gradient(left, #199fc5 0%, #199fc5 46%, #199fc5 46%, #199fc5 49%, #199fc5 49%, #199fc5 49%, #de3d7e 50%, #de3d7e 50%, #de3d7e 96%);
    background: -webkit-linear-gradient(left, #199fc5 0%,#199fc5 46%,#199fc5 46%,#199fc5 49%,#199fc5 49%,#199fc5 49%,#de3d7e 50%,#de3d7e 50%,#de3d7e 96%);
    background: linear-gradient(to right, #199fc5 0%,#199fc5 46%,#199fc5 46%,#199fc5 49%,#199fc5 49%,#199fc5 49%,#de3d7e 50%,#de3d7e 50%,#de3d7e 96%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#199fc5', endColorstr='#de3d7e',GradientType=1 );
    position: absolute;
    width: 52px;
    height: 4px;
    bottom: -1px;
    left: 50%;
    transform: translateX(-50%);
}

.textwidget {
    margin: auto;
    flex-direction: column;
    text-align: center;
    font-size: 16px;
    font-family: "SFCompact L";
    color: #555555;
    line-height: normal;
}
h5 a {
    color: inherit;
    text-decoration: none;
}
.textwidget h5 {
    font-size: 24px;
    color: #333333;
    font-family: "SFCompact R";
}
.sow-icon-image {
    text-decoration: none;
    color: #FFFFFF;
    width: 84px;
    height: 84px;
    position: relative;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

/*logo slider*/
/* Slider */

.main {
  font-family:Arial;
  width:500px;
  display:block;
  margin:0 auto;
}
.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
    @media screen and (min-width: 768px) {
  .carousel-inner .active,
  .carousel-inner .active+.carousel-item {
    display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item {
    -webkit-transition: none;
    transition: none;
  }
  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -50%;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* left or forward direction */
  .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* right or prev direction */
  .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}

/* Desktop and up */

@media screen and (min-width: 992px) {
  .carousel-inner .active,
  .carousel-inner .active+.carousel-item,
  .carousel-inner .active+.carousel-item+.carousel-item {
    display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
    -webkit-transition: none;
    transition: none;
  }
  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* left or forward direction */
  .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* right or prev direction */
  .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}


/*search*/
.home-search-box {
    left: 0;
    right: 0;
    width: 100%;
    background: rgba(0,0,0,.4);
    transition: all .5s ease;
    position: absolute;
    bottom: 185px;
    z-index: 3;
    height: 300px;
}
a, abbr, acronym, address, applet, b, big, blockquote, body, capti, center, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, form, h1, h2, h3, h4, h5, h6, html, i, iframe, img, ins, kbd, label, legend, li, object, ol, p, pre, q, s, samp, small, span, strike, strong, sub, sup, table, tt, u, ul, var {
    border: 0;
    box-sizing: border-box;
    font: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    vertical-align: baseline;
}
*, :after, :before {
    box-sizing: border-box;
}
*, :after, :before, input[type=checkbox], input[type=radio] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
* {
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: subpixel-antialiased;
}
*, .testInfo .testrequire, .testInfo .testrequire p {
    -moz-osx-font-smoothing: grayscale;
}

div {
    display: block;
}



</style>
    <!-- Styles -->
       <!-- <link rel="stylesheet" href="{{ URL::asset('css/shop-homepage.css') }}" /> -->
<link rel="stylesheet" href="{{ URL::asset('css/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    

<nav class="navbar navbar-expand-md navbar-light " >
    <div class="container">
        <a class="navbar-brand" href="index.html"> <img src="{{asset('images/livi-logo.jpg')}}" style="height:10vh;">
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{  url('product') }}">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('cart') }}">My Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm" >
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!(Session::has('email')))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('log') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    User <!-- <span class="caret"></span> -->
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </div>
    </div>
</nav>

















        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="fh5co-footer" role="contentinfo" style="background-image: url('/larapro/public/images/704532.jpg')"><div class="overlay"></div><div class="container"><div class="row row-pb-md"><div class="col-md-3 fh5co-widget"><h1 class="logo">Medical.</h1><p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p></div><div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget"><h3>Links</h3><ul class="fh5co-footer-links"><li><a href="#">Department</a></li><li><a href="#">Blog</a></li><li><a href="#">Contact</a></li><li><a href="#">Terms</a></li><li><a href="#">Shop</a></li></ul></div><div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget"><h3>Our Services</h3><ul class="fh5co-footer-links"><li><a href="#">Heart Surgery</a></li><li><a href="#">Surgical Treatment</a></li><li><a href="#">General Treatment</a></li><li><a href="#">Medical Treatment</a></li><li><a href="#">Held Desk</a></li></ul></div><div class="col-md-4 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget"><h3>Drop us a line</h3><form class="contact-form" name="contactForm" id="contactForm" novalidate="novalidate"><div class="form-group"><label for="name" class="sr-only">Name</label><input type="text" class="form-control" id="name1" name="name" placeholder="Name"></div><div class="form-group"><label for="email" class="sr-only">Email</label><input type="email" class="form-control" id="email1" name="email" placeholder="Email"></div><div class="form-group"><label for="message" class="sr-only">Message</label><textarea class="form-control" id="message" name="message" rows="7" placeholder="Message"></textarea></div><div class="form-group"><input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message"><div class="submitting"></div></div></form><div id="form-message-warning"></div><div id="form-message-success">Your message was sent, thank you!</div></div></div></div><div class="copyright"><div class="col-md-12 text-center"><p><small class="block">© 2016 Free HTML5. All Rights Reserved.</small> <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small></p></div></div></footer>
</body>
</html>
