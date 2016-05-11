@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New page
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/trumbowyg/css/trumbowyg.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
    
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Pages</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>pages</li>
        <li class="active">Create New page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new page
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => 'admin/pages',  'class' => 'form-horizontal']) !!}
                     <div class="form-body">

                        <div class="form-group">
                            {!! Form::label('title', 'Гарчиг:', ['class' => 'col-md-2 control-label', 'for' => 'title']) !!}
                            <div class="col-md-7">
                                <div class="input-group">
                                     <span class="input-group-addon">
                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                     </span>
                                     {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'name' => 'title']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                     
    					<div class="form-group">
                            {!! Form::label('slug', 'Слаг нэр:', ['class' => 'col-md-2 control-label', 'for' => 'slug']) !!}
                            <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                </span>
                                     {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

    					<div class="form-group">
                            {!! Form::label('category', 'Ангилал:', ['class' => 'col-md-2 control-label', 'for' => 'category']) !!}
                            <div class="col-md-7">

                               <select id="category" name="category" class="form-control" size="1">
                                                                            <option value="0">Please select</option>
                                                                            <option value="1">Bootstrap</option>
                                                                            <option value="2">CSS</option>
                                                                            <option value="3">Javascript</option>
                                                                            <option value="4">HTML</option>
                                                                        </select>
                            </div>
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Контент:', ['class' => 'col-md-2 control-label', 'for' => 'slug']) !!}
                            <div class="col-md-7">
                               {!! Form::textarea('body', null, ['class' => 'textarea editor-cls']) !!}
                            </div>
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>


    					 

    					<div class="form-group">
                            {!! Form::label('active', 'Идэвхжүүлэх:', ['class' => 'col-md-2 control-label', 'for' => 'active']) !!}
                            <div class="col-md-1">
                                <label class="radio-inline">
                                     {!! Form::radio('active', 1, true) !!}
                                     Тийм
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline">
                                    {!! Form::radio('active', 0, false) !!}
                                    Үгүй
                                </label>
                            </div>
                          
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                 <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                                &nbsp;
                                <a class="btn btn-danger" href="{{ route('admin.pages.index') }}">
                                    @lang('button.cancel')
                                </a>
                               
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop

@section('footer_scripts')
    
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/trumbowyg/js/trumbowyg.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/js/pages/editor2.js') }}"  type="text/javascript"></script>
    
@stop