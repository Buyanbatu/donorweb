@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{$slug->title}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Blog Item</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="doc-landscape" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blog Item
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <h2 class="primary marl12">{{$slug->title}}</h2>
        <div class="row content">
            <!-- Business Deal Section Start -->
            <div class="col-sm-8 col-md-8">
                <div class=" thumbnail featured-post-wide img">
                    @if($slug->image)
                        <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-responsive" alt="Image">
                    @endif
                    <!-- /.blog-detail-image -->
                    <div class="the-box no-border blog-detail-content">
                     
                        <p class="text-justify">
                            {!! $slug->body !!}
                        </p>
                       
                    </div>
                </div>
                <!-- /the.box .no-border -->
                <!-- Media left section start -->
               
            </div>
            <!-- //Business Deal Section End -->
            <!-- /.col-sm-9 -->
            <!-- Recent Posts Section Start -->
            <div class="col-sm-4 col-md-4 col-full-width-left">
                <div class="the-box">
                        <h3 class="small-heading text-center">RECENT POSTS</h3>
                        <ul class="media-list media-xs media-dotted">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('assets/images/authors/avatar1.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Elizabeth Owens at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">2hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                            <hr>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('assets/images/authors/avatar4.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Harold Chavez at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">5hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                            <hr>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('assets/images/authors/avatar5.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Mihaela Cihac at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">10hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                        </ul>
                </div>
                <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
            </div>
            <!-- //Recent Posts Section End -->
            <!-- /.col-sm-3 -->
        </div>
    </div>
    <!-- //Conatainer Section End -->
@stop
