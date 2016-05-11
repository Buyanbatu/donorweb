@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop


    

{{-- slider --}}
@section('top')

  @include('notifications')
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('assets/images/slide_1.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slide_2.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slide_3.jpg') }}" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')


    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1 class="purchae-hed">Та цусаа өгч болох хүн мөн үү?</h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-styl pull-right">Өөрийгөө шалгах</a></div>
                </div>
            </div>
        </section>
        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Донор таньд</span></h3>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Цусны донорын талаар</h3>
                        <p>Энэхүү санамжыг уншиж байх зуур хэн нэгний амь нас үхлийн ирмэг дээр тулж ирээд үхэх, сэхэх нь зөвхөн тохирох бүлгийн жаахан ч болов цус бэлэн байгаа эсэхээс шууд хамаарч байж болох юм. Эрдэнэт хүний амь насыг аврахад хэдхэн хором зарцуулна уу.</p>
                        <div class="text-right primary"><a href="#">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->
            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-4">
                <!-- Box Start -->
                <div class="box">
                    <div class="box-icon box-icon1">
                        <i class="livicon icon1" data-name="address" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">цусаа хаана өгөх вэ?</h3>
                        <p>1.    Улаанбаатар хотод ЦССҮТ –ийн цус цуглуулах хэсэгт

    2.    Хөдөө орон нутагт аймгийн нэгдсэн эмнэлгийн цусны салбар банкинд өдөр бүр 08.00-13.00 хооронд цус цуглуулдаг.
    Мөн Хархорин, Зүүнхараа, Замын үүд,Тосонцэнгэл, Ховд аймгийн  Булган сумын эмнэлэгт цусны салбар банк ажилладаг.</p>
                        <div class="text-right primary"><a href="#">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Easy to Use Section End -->
            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14" data-hc="#f89a14"></i>
                    </div>
                    <div class="info">
                        <h3 class="warning text-center">Цусны донор гэж хэн бэ</h3>
                        <p>“Цусны донор” гэж бусдын эрүүл мэндийг сайжруулах амь насыг аврахад зориулан сайн дураараа цусаа өгөгчийг хэлнэ.     Цус, цусан бүтээгдэхүүн хэсгийг бэлэглэж байгаагаар нь:

 

•    Бүхэл цусны донор
•    Сийвэнгийн донор
•    Эсийн донор гэж хуваадаг</p>
                        <div class="text-right primary"><a href="#">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->
          
        </div>
        <!-- //Services Section End -->
    </div>
  
    <!-- //Container End -->
@stop

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js ends-->

@stop
