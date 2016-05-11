@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{$news->title}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
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
                    <a href="#">News Item</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="list-ul" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> News Item
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Jelly-o sesame Section Strat -->
            <div class="col-sm-7 col-md-8">
                <div class="col-md-12">
                    <div class="news_item_image thumbnail">
                        <label>
                            <a href="{{ URL::to('news_item') }}"><h3 class="primary news_headings">{{$news->title}}</h3></a>
                        </label>
                        @if($news->image)
                            <img src="{{ URL::to('/uploads/news/'.$news->image)  }}" class="img-responsive" alt="Image">
                        @endif
                        <div class="news_item_text_1">
                            <p>
                                {!! $news->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                 <!-- Media left section start -->
                <h3 class="comments">{{$news ->comments->count()}} Сэтгэгдлүүд</h3><br />
                <ul class="media-list">
                    @foreach($news->comments as $comment)
                    <li class="media">
                        <div class="media-body">
                            <h4 class="media-heading"><i>{{$comment->name}}</i></h4>
                            <p>{{$comment->comment}}</p>
                            <p class="text-danger">
                                <small> {!! $comment->created_at!!}</small>
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!-- //Media left section End -->
                <!-- Comment Section Start -->
                <h3>Сэтгэгдэл үлдээх</h3>
                {!! Form::open(array('url' => URL::to('news_item/'.$news->id.'/comment'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::text('name', null, array('class' => 'form-control input-lg','required' => 'required', 'placeholder'=>'Таны нэр')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', null, array('class' => 'form-control input-lg','required' => 'required', 'placeholder'=>'Таны и-мэйл')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                    {!! Form::text('website', null, array('class' => 'form-control input-lg', 'placeholder'=>'Таны вэбсайт')) !!}
                    <span class="help-block">{{ $errors->first('website', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                    {!! Form::textarea('comment', null, array('class' => 'form-control input-lg no-resize','required' => 'required', 'style'=>'height: 200px', 'placeholder'=>'Таны сэтгэгдэл')) !!}
                    <span class="help-block">{{ $errors->first('comment', ':message') }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-md"><i class="fa fa-comment"></i>
                        Илгээх
                    </button>
                </div>
                {!! Form::close() !!}
                <!-- //Comment Section End -->
                </div>
            </div>
            <div class="col-sm-5 col-md-4 col-full-width-left">
                <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                <!-- Recent Post Section Start -->
                <div class="the-box">
                    <h3 class="small-heading more-margin-bottom">Сүүлд нэмэгдсэн мэдээ</h3>

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
                <!-- Recent Post Section End -->
                <div class="the-box">
                    <h3>Top Reviews</h3>
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets/images/image_13.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#"><h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a>
                                <h6 class="text-danger">May 13, 2015</h6>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets/images/image_14.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#"><h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5>
                                        </a>
                                <h6 class="text-danger">May 12, 2015</h6>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star-o text-primary"></i>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets/images/image_15.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#"><h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a>
                                <h6 class="text-danger">May 11, 2015</h6>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star text-primary"></i>
                                <i class="fa fa-star-o text-primary"></i>
                                <i class="fa fa-star-o text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.the-box .no-border -->
            </div>
            <!-- //Jelly-o sesame Section End -->
        </div>
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
