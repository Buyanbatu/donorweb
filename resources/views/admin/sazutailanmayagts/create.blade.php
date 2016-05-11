@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Салбар зөвлөлийн тайлан маягт бөглөх
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/x-editable/bootstrap-editable.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet"/>
    
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Салбар зөвлөлийн тайлан маягт</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ хуудас
            </a>
        </li>
        <li>Салбар зөвлөлийн тайлан маягт</li>
        <li class="active">Бөглөх хэсэг</li>
    </ol>
</section>


 <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="folders" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                           Салбар зөвлөлийн тайлан маягт</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="doc-portrait" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Цус, цусан бүтээгдэхүүний тайлан</a>
                    </li>
                     <li>
                        <a href="#tab3" data-toggle="tab">
                            <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Сургалтанд хамрагдалтын тайлан</a>
                    </li>
                 
                </ul>

                <div  class="tab-content mar-top">

                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">

                        @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => 'admin/sazutailanmayagts', 'class' => 'form-horizontal', 'method' => 'post']) !!}

                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            Заавар, журам, бүртгэлтэй холбоотой ерөнхий мэдээлэл
                                        </h3>
                                        <hr>

                                    </div>
                                    <div class="panel-body">
                                        <!--   ####### GURAV dugaar heseg ehlel  #######    <div class="form-body"></div>   -->

                        <div class="form-group">
                            {!! Form::label('gurav', 'Эмнэлэгийн дэргэдэх цус сэлбэлтийг зохицуулах салбар зөвлөлтэй эсэх:', ['class' => 'col-md-7 control-label']) !!}
                            
                            <div class="col-md-1">
                                <label class="radio-inline">
                                     {!! Form::radio('gurav', 1, true) !!}
                                     Тийм
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline">
                                    {!! Form::radio('gurav', 0, false) !!}
                                    Үгүй
                                </label>
                            </div>
                            
                        </div>

                        <div class="form-group">
                             {!! Form::label('gurav1', 'Тийм бол тушаалын хуулбарыг хавсаргах:', ['class' => 'col-md-7 control-label']) !!}
                           <div class="col-md-4">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                     <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">Файл оруулах</span>
                                    <span class="fileinput-exists">Солих</span>
                                    <input id="gurav1" name="gurav1" type="file">
                                </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Устгах</a>
                            </div>
                            </div>
                        </div>

                                        
                        <div class="form-group">
                            {!! Form::label('gurav2', 'Жилийн ажлын төлөвлөгөөтэй ажилладаг эсэх: ', ['class' => 'col-md-7 control-label', 'for' => 'gurav2']) !!}
                            <div class="col-md-1">
                                <label class="radio-inline">
                                     {!! Form::radio('gurav2', 1, true) !!}
                                     Тийм
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline">
                                    {!! Form::radio('gurav2', 0, false) !!}
                                    Үгүй
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('gurav3', 'Зөвлөлийн хурал хийсэн удаа: ', ['class' => 'col-md-7 control-label', 'for' => 'gurav3']) !!}
                            <div class="col-md-2">
                                     {!! Form::text('gurav3', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('gurav4', 'Зөвлөлийн хурлын протокол хавсаргах:', ['class' => 'col-md-7 control-label', 'for' => 'gurav4']) !!}
                            
                           <div class="col-md-4">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                     <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">Файл оруулах</span>
                                    <span class="fileinput-exists">Солих</span>
                                    <input type="file" name="gurav4"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Устгах</a>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('gurav5', 'Цус сэлбэх үйл ажиллагаанд хяналт үнэлгээ хийсэн эсэх:', ['class' => 'col-md-7 control-label', 'for' => 'gurav5']) !!}
                            
                                <div class="col-md-1">
                                <label class="radio-inline">
                                     {!! Form::radio('gurav5', 1, true) !!}
                                     Тийм
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline">
                                    {!! Form::radio('gurav5', 0, false) !!}
                                    Үгүй
                                </label>
                            </div>
                            
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>
  
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            ЦЦБ-ний нөөцийн хадгалалт, тээвэрлэлт
                                        </h3>
                                        <hr>

                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                            {!! Form::label('duruv', 'Эмнэлзүйн цус сэлбэлтийн нэгж нь ЦЦБ-нийг нөөцөлж хадгалдаг эсэх:', ['class' => 'col-md-7 control-label', 'for' => 'duruv']) !!}
                            
                                <div class="col-md-1">
                                <label class="radio-inline">
                                     {!! Form::radio('duruv', 1, true) !!}
                                     Тийм
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline">
                                    {!! Form::radio('duruv', 0, false) !!}
                                    Үгүй
                                </label>
                            </div>
                            
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('duruv1', 'Зориулалтын хөргөгчтэй эсэх: ', ['class' => 'col-md-7 control-label', 'for' => 'duruv1']) !!}
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
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('duruv2', 'Зориулалтын хөлдөөгчтэй эсэх: ', ['class' => 'col-md-7 control-label', 'for' => 'duruv2']) !!}
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
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('duruv3', 'ЦЦБ-нийг тээвэрлэх савтай эсэх: ', ['class' => 'col-md-7 control-label', 'for' => 'duruv3']) !!}
                            
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
                            
                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('duruv4', 'ЦЦБ-нийг тээвэрлэх савны тоо:', ['class' => 'col-md-7 control-label', 'for' => 'duruv4']) !!}
                            
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

                            <div class="col-md-3">
                                Tailbar end bairlana!!!
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                             ЦЦБ сэлбэсэн өвчтөний тоо
                                        </h3>
                                        <hr>

                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                            {!! Form::label('tav', 'Өвчтөний нас хүйс:', ['class' => 'col-md-7 control-label', 'for' => 'tav']) !!}
                            
                               {!! Form::label('tav', 'Эрэгтэй', ['class' => 'col-md-1 control-label', 'for' => 'tav']) !!}

                               {!! Form::label('tav', 'Эмэгтэй', ['class' => 'col-md-1 control-label', 'for' => 'tav']) !!}
                            
                           
                        </div>

                        <div class="form-group">
                            {!! Form::label('tav1', '5-аас доош насны:', ['class' => 'col-md-7 control-label', 'for' => 'tav1']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('tav1', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('tav1', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('tav2', '5-аас 15-н насны:', ['class' => 'col-md-7 control-label', 'for' => 'tav2']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('tav2', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('tav2', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('tav3', '16-аас 44-н насны:', ['class' => 'col-md-7 control-label', 'for' => 'tav3']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('tav3', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('tav3', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('tav4', '45-аас 59 насны:', ['class' => 'col-md-7 control-label', 'for' => 'tav4']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('tav4', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('tav4', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('tav5', '60-аас дээш насны:', ['class' => 'col-md-7 control-label', 'for' => 'tav1']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('tav5', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('tav5', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>

        


                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            Фракцинацаар гаргаж авсан бэлдмэлүүдийн хэрэгцээ тоо
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                            {!! Form::label('zurgaa', 'Бэлдмэлийн нэр:', ['class' => 'col-md-6 control-label', 'for' => 'zurgaa']) !!}
                            
                            {!! Form::label('zurgaa', 'Нийт хэрэглээ нэгж /фл/', ['class' => 'col-md-2', 'for' => 'zurgaa']) !!}

                            {!! Form::label('zurgaa', 'Хэрэглэсэн өвчтөний тоо', ['class' => 'col-md-2', 'for' => 'zurgaa']) !!}
                              
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa1', 'Альбумин:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa1']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa1', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa1', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa2', 'Иммуноглобурин:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa2']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa2', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa2', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa3', 'Гемофилийн эсрэг 8-р фактор:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa3']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa3', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa3', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa4', 'Гемофилийн эсрэг 9-р фактор:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa4']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa4', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa4', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa5', 'Эритропоэтин:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa5']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa5', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa5', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa6', 'Протеин:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa6']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa6', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa6', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa7', 'Цагаан эс өсгөгч фактор:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa7']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa7', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa7', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('zurgaa8', 'Тромбоцит өсгөгч фактор:', ['class' => 'col-md-7 control-label', 'for' => 'zurgaa8']) !!}
                            
                            <div class="col-md-1">
                                {!! Form::text('zurgaa8', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                {!! Form::text('zurgaa8', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
  
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Сургалтын талаар
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        

                                 <div class="form-group">
                            {!! Form::label('doloo', 'Сургалт хийсэн удаа:', ['class' => 'col-md-7 control-label', 'for' => 'doloo']) !!}
                            <div class="col-md-2">
                            {!! Form::text('doloo', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('doloo1', 'Сургалтан хамрагдсан хүний тоо:', ['class' => 'col-md-7 control-label', 'for' => 'doloo1']) !!}
                            <div class="col-md-2">
                            {!! Form::text('doloo1', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('doloo2', 'Сургалтын хөтөлбөр, тайланг хавсаргах:', ['class' => 'col-md-7 control-label', 'for' => 'doloo2']) !!}
                            <div class="col-md-4">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                     <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">Файл оруулах</span>
                                    <span class="fileinput-exists">Солих</span>
                                    <input id="gurav4" type="file" name="..."></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Устгах</a>
                            </div>
                            </div>
                        </div>

                                    </div>
                                </div>
                            </div>



                    <div class="form-group">
                       <div class="col-md-offset-2 col-md-10">
                            
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                            <a class="btn btn-danger" href="{{ route('admin.sazutailanmayagts.index') }}">
                                @lang('button.cancel')
                            </a>
                        </div>
                    </div>

              {!! Form::close() !!}                


           </div>
        </div>


        <div id="tab2" class="tab-pane fade">
            <div class="row">
              <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            1-р улирлын цус, цусан бүтээгдэхүүний тайлан оруулах
                        </h3>
                    </div>
                
                    <div class="panel-body table-responsive">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => 'admin/tsusanbuteegdehuuntailans']) !!}


                          <table class="table table-striped table-bordered" id="table2">
                              <thead>
                              <tr>
                                  <th>№</th>
                                  <th align="center" width="200px">ЦЦБ-ний нэр төрөл</th>
                                  <th align="center" width="20px" colspan="2"><small>Захиалсан</small></th>
                                  <th align="center" width="20px" colspan="2"><small>Хүчингүй /цуцлагдсан/ захиалга</small></th>
                                  <th align="center" width="20px" colspan="2"><small>Захиалгын дагуу хүлээн авсан</small></th>
                                  <th align="center" width="20px" colspan="2"><small>Захиалгын дагуу хүлээн аваагүй</small></th>
                                  <th align="center"><small>Хувийн тохиргоо үзсэн</small></th>
                                  <th align="center" colspan="2"><small>Хэрэглэсэн</small></th>
                                  <th align="center"><small>Урвал хүндрэл</small></th>
                                  <th align="center" colspan="2"><small>Хэрэглээгүй актлагдсан</small></th>
                                
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td>Бүхэл цус</td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Mл"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>Улаан эсийн өтгөрүүлэг</td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                              </tr><tr>
                                  <td>3.</td>
                                  <td>Даршилсан улаан эс</td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                              </tr><tr>
                                  <td>4.</td>
                                  <td>Угаасан улаан эс</td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="ugaasanulaanes" name="ugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Цагаан эсгүйжүүлсэн бүхэл цус</td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguibuheltsus" name="tsagaanesguibuheltsus[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>6.</td>
                                  <td>Цагаан эсгүйжүүлсэн даршилсан улаан эс</td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguidarshilsanulaanes" name="tsagaanesguidarshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>7.</td>
                                  <td>Цагаан эсгүйжүүлсэн улаан эсийн өтгөрүүлэг</td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsagaanesguiulaanesutguruuleg" name="tsagaanesguiulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>8.</td>
                                  <td>Хөлдөөсөн шинэ сийвэн</td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduusunshinesiiven" name="hulduusunshinesiiven[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>9.</td>
                                  <td>Шингэн сийвэн</td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="shingensiiven" name="shingensiiven[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>10.</td>
                                  <td>Бүхэл цуснаас гаргаж авсан ЯЭӨ</td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="buheltsusnaasawsanYAEU" name="buheltsusnaasawsanYAEU[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>11.</td>
                                  <td>Цитоферезийн аргаар бэлтгэсэн ЯЭӨ</td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tsitoferezeerbeltgesenYAEU" name="tsitoferezeerbeltgesenYAEU[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>12.</td>
                                  <td>Криопреципитат</td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="kriopretsipitat" name="kriopretsipitat[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>13.</td>
                                  <td>К сийвэн</td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="k-siiven" name="k-siiven[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>14.</td>
                                  <td>Туяагаар шарсан улаан эс</td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanulaanes" name="tuyagaarsharsanulaanes[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>15.</td>
                                  <td>Хөлдөөж, угаасан улаан эс</td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="hulduujugaasanulaanes" name="hulduujugaasanulaanes[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>16.</td>
                                  <td>Туяагаар шарсан сийвэн</td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsansiiven" name="tuyagaarsharsansiiven[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>17.</td>
                                  <td>Туяагаар шарсан ЯЭӨ</td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="tuyagaarsharsanYAEU" name="tuyagaarsharsanYAEU[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              <tr>
                                  <td>18.</td>
                                  <td>Бусад</td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Нэгж"></td>
                                  <td><input type="text" id="busad" name="busad[]" class="form-control" placeholder="Мл"></td>
                              </tr>
                              </tbody>
                          </table>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                                <a class="btn btn-danger" href="{{ route('admin.sazutailanmayagts.index') }}">
                                    @lang('button.cancel')
                                </a>
                                
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 3 dahi tab -->
          <div id="tab3" class="tab-pane fade">
                       <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        ЭМТ-308.7 Тухайн жилд сургалтанд хамрагдалтын тайлан
                    </h3>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => 'admin/surgaltand_hamragdaltiin_tailans']) !!}

                     <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                      <tr>
                                        <th width="2%" rowspan="2">№</th>
                                        <th align="middle" rowspan="2">Сургалтын нэр</th>
                                        <th align="middle" colspan="2"><small>Мэргэжил дээшлүүлэх</small></th>
                                        <th align="middle" colspan="2"><small>Мэргэжил олгох</small></th>
                                    
                                        
                                    </tr>
                                    <tr>
                                        <th align="middle"><small>Их эмч</small></th>
                                        <th align="middle"><small>Тусгай</small></th>
                                        <th align="middle"><small>Их эмч</small></th>
                                        <th align="middle"><small>Тусгай</small></th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Үйлдвэрлэлийн трансфузиологи</td>
                                        <td>{!! Form::text('ih_emch_mdeeshuuleh_uildwerlel', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshluuleh_uildwerlel', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_uildwerlel', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_uildwerlel', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Эмнэлзүйн трансфузиологи</td>
                                        <td>{!! Form::text('ih_emch_mdeeshuuleh_emnelzui', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshuuleh_emnelzui', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_emnelzui', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_emnelzui', null, ['class' => 'form-control']) !!}</td>
                                    </tr><tr>
                                        <td>3.</td>
                                        <td>Иммуногематологи</td>
                                        <td>{!! Form::text('ih_emch_mdeeshuuleh_immune', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshuuleh_immune', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_immune', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_immune', null, ['class' => 'form-control']) !!}</td>
                                    </tr><tr>
                                        <td>4.</td>
                                        <td>Вирус судлал</td>
                                        <td>{!! Form::text('ih_emch_mdeeshluuleh_virus', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshluuleh_virus', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_virus', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_virus', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Чанарын хяналт</td>
                                        <td>{!! Form::text('ih_emch_mdeeshluuleh_chanar', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshluuleh_chanar', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_chanar', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_chanar', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>ЦЦБ-ний Зохистой хэрэглээ</td>
                                        <td>{!! Form::text('ih_emch_mdeeshluuleh_tstsb_hereglee', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_mdeeshluuleh_tstsb_hereglee', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('ih_emch_molgoh_tstsb_hereglee', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::text('tusgai_molgoh_tstsb_hereglee', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                   </tbody>
                                </table>

                        

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                            <a class="btn btn-danger" href="{{ route('admin.surgaltand_hamragdaltiin_tailans.index') }}">
                                @lang('button.cancel')
                            </a>
                            
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
        </div>       

    <!-- End 3 dahi tab -->

                  



                </div>
            </div>
        </div>
    </section>



@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
   


@stop