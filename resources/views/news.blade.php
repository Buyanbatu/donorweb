@extends('layouts/default')

{{-- Page title --}}
@section('title')
News
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
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
                    <a href="#">News</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> News
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <div class="col-md-8">
                @forelse ($news as $medee)
                    <!-- BEGIN FEATURED POST -->
                <div class="blog thumbnail">
                    <label>
                        <a href="{{ URL::to('news_item/'.$medee->slug) }}"><h3 class="primary news_headings">{{$medee->title}}</h3></a>
                    </label>
                     @if($medee->image)
                        <img src="{{ URL::to('/uploads/news/'.$medee->image)  }}" class="img-responsive" alt="Image">
                        @endif
                       <div class="featured-text relative-left">
                            <p>
                                {!! $medee->content !!}
                            </p>
                            <hr>
                            <p class="text-right">
                                <a href="{{ URL::to('news_item/'.$medee->slug) }}" class="btn btn-primary text-white">Дэлгэрэнгүй</a>
                            </p>
                        </div>
                        <!-- /.featured-text -->
                </div>
                <!-- //News1 Section End -->
                <!-- /.featured-post-wide -->
                    <!-- END FEATURED POST -->
                    @empty
                        <h3>Мэдээ байхгүй байна!</h3>
                    @endforelse
                    <ul class="pager">
                        {!! $news->render() !!}
                    </ul>



            </div>
            <div class="col-md-4 ">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Онцлох мэдээ </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Сүүлд нэмэгдсэн </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                            @forelse ($featured as $fe)
                            
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ URL::to('/uploads/news/'.$fe->image)  }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ URL::to('news_item/'.$fe->slug) }}">
                                            <h5 class="media-heading text-primary">{{$fe->title}}</h5></a><span class="text-danger">{{$fe->created_at}}</span>
                                    </div>
                                </div>
                                

                            @empty
                                <h3>Мэдээ байхгүй байна!</h3>
                            @endforelse
                                

                                
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                @forelse ($latest as $la)
                           
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ URL::to('/uploads/news/'.$la->image)  }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ URL::to('news_item/'.$la->slug) }}">
                                            <h5 class="media-heading text-primary">{{$la->title}}</h5></a><span class="text-danger">{{$la->created_at}}</span>
                                    </div>
                                </div>
                                


                            @empty
                                <h3>Мэдээ байхгүй байна!</h3>
                            @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments">
                    <h3>Сэтгэгдлүүд</h3>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_13.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5> </a>
                            <span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_14.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 11, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_15.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!--tags-->
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <!-- end of page level js -->

@stop
