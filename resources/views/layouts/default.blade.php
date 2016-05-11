<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        | Үндэсний цус судлалын төвд тавтай морилно уу
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/custom.css') }}">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">admin@donor.app</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:" class="text-white">(976) 11333322</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#">_<i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ route('home') }}"> Нүүр</a>
                    </li>
                    <li class="dropdown {!! (Request::is('taniltsuulga') || Request::is('dargiinmendchilgee') || Request::is('erhemzorilgo') ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Бидний тухай</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('taniltsuulga') }}">Танилцуулга</a>
                            </li>
                            <li><a href="{{ URL::to('dargiinmendchilgee') }}">Даргын мэндчилгээ</a>
                            </li>
                            <li><a href="{{ URL::to('erhemzorilgo') }}">Эрхэм зорилго</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown {!! (Request::is('aboutus') || Request::is('timeline') || Request::is('faq') || Request::is('blank_page')  ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Донор таньд</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('donoriin-talaar-medeelel') }}">Донорын талаарх мэдээлэл</a>
                            </li>
                            <li><a href="{{ URL::to('tsusaa-haana-uguh-we') }}">Цусаа хаана өгөх вэ?</a></li>
                            <li><a href="{{ URL::to('tsusnii-donor-gej-hen-we') }}">Цусны донор гэж хэн бэ?</a>
                            </li>
                         
                        </ul>
                    </li>
                   <li class="dropdown {!! (Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Шилэн данс</a>
                       
                    </li>
                   
                    <li {!! (Request::is('news') || Request::is('news_item/*') ? 'class="active"' : '') !!}><a href="{{ URL::to('news') }}"> Мэдээ</a>
                    </li>
                    <li {!! (Request::is('contact') ? 'class="active"' : '') !!}><a href="{{ URL::to('contact') }}">Холбоо барих</a>
                    </li>
                    {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                        <li><a href="{{ URL::to('login') }}">Нэвтрэх</a>
                        </li>
                    @else
                        <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}">Миний удирдлага</a>
                        </li>
                        <li><a href="{{ URL::to('logout') }}">Гарах</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer>
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>Бидний тухай</h4>
                <p>
                    Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... Бидний тухай мэдээлэл энд байрлана... 
                </p>
                <h4>Биднийг дага</h4>
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //About us Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Холбоо барих хаяг</h4>
                <ul class="list-unstyled">
                    <li>Сүхбаатар дүүрэг 1 дүгээр хороо энх тайвны өргөн чөлөө 13</li>
                    <li>Улаанбаатар хот, Монгол улс.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Утас: (976) 11 312857</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Факс: (976) 11 312857</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> И-мэйл:<span class="text-success">
                         nctm.nctm@yahoo.com</span>
                    </li>
                   
                </ul>
               
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
                <h4>Сүүлд нэмэгдсэн</h4>
                <div class="media">
                   
                    <div class="media-body">
                        <p class="media-heading">Гемофилитэй тэмцэх дэлхийн өдөр
                        </p>
                        <p class="pull-right"><i>дэлгэрэнгүй</i></p>
                    </div>
                </div>
                <div class="media">
                    
                    <div class="media-body">
                        <p class="media-heading">САХИЛГА, ДЭГ ЖУРАМ, ҮЙЛЧИЛГЭЭГ САЙЖРУУЛАХ ЗАРИМ АРГА ХЭМЖЭЭНИЙ ТУХАЙ
                        </p>
                        <p class="pull-right"><i>дэлгэрэнгүй</i></p>
                    </div>
                </div>
                <div class="media">
                    
                    <div class="media-body">
                        <p class="media-heading">Хандив тусламжийн хэмжээ, түүний зарцуулалтын тайлан
                        </p>
                        <p class="pull-right"><i>дэлгэрэнгүй</i></p>
                    </div>
                </div>
                <div class="media">
                  
                    <div class="media-body">
                        <p class="media-heading">Цус Сэлбэлт Судлалын Үндэсний Төвд цусны хүүдий, оношлуур, эм, эмнэлгийн хэрэгсэл нийлүүлэх 2016 он 03 дугаартай тендерийн ерөнхий мэдээлэл
                        </p>
                        <p class="pull-right"><i>дэлгэрэнгүй</i></p>
                    </div>
                </div>
            </div>
            <!-- //Recent Post Section End -->
        </div>
    </footer>
    <!-- //Footer Section End -->
    <div class="copyright">
        <div class="container">
        <p>&copy; Цусны үндэсний төв. 2016 он</p>
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/josh_frontend.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
