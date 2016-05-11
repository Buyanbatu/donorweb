@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New tsusanbuteegdehuuntailan
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Tsusanbuteegdehuuntailans</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>tsusanbuteegdehuuntailans</li>
        <li class="active">Create New tsusanbuteegdehuuntailan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new tsusanbuteegdehuuntailan
                    </h4>
                </div>

  <div class="panel-body">
                    {!! Form::open(['url' => 'admin/tsusanbuteegdehuuntailans', 'id' => 'commentForm', 'class' => 'form-horizontal form-bordered']) !!}
                        <div id="rootwizard">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab">First</a></li>
                                <li><a href="#tab2" data-toggle="tab">Second</a></li>
                                <li><a href="#tab3" data-toggle="tab">Third</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <h2 class="hidden">&nbsp;</h2>


                                    <div class="form-group striped-col">
                                        <div class="col-md-1">
                                           <label>№</label> 
                                        </div>
                                        <div class="col-md-5">
                                           <label>ЦЦБ-ний нэр төрөл</label> 
                                        </div>
                                        <div class="col-md-2">
                                            <label class="col-md-2">Захиалсан</label><br>
                                            <label class="col-md-1">Нэгж</label>&nbsp; 
                                            <label class="col-md-1">Mл</label> 
                                        </div>
                                        <div class="col-md-2">
                                            <label class="col-md-2">Хүчингүй захиалга</label><br>
                                            <label class="col-md-1">Нэгж</label>&nbsp; 
                                            <label class="col-md-1">Мл</label> 
                                        </div>
                                        <div class="col-md-2">
                                            <label class="col-md-2">Захиалгын дагуу хүлээн авсан</label><br>
                                            <label class="col-md-1">Нэгж</label>&nbsp; 
                                            <label class="col-md-1">Мл</label> 
                                        </div>
                                        
                                    </div>

                                    <div class="form-group" name="buheltsus">
                                        <div class="col-md-1">
                                            <b>1.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Бүхэл цус</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus1" name="buheltsus[]" class="form-control" placeholder="Нэгж">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus2" name="buheltsus[]" class="form-control" placeholder="Мл">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus3" name="buheltsus[]" class="form-control" placeholder="Нэгж">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus4" name="buheltsus[]" class="form-control" placeholder="Мл">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus5" name="buheltsus[]" class="form-control" placeholder="Нэгж">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="buheltsus6" name="buheltsus[]" class="form-control" placeholder="Мл">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>2.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Улаан эсийн өтгөрүүлэг</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>3.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Даршилсан улаан эс</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>4.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Угаасан улаан эс</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>5.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Цагаан эсгүйжүүлсэн бүхэл цус</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>6.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Цагаан эсгүйжүүлсэн даршилсан улаан эс</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>7.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Цагаан эсгүйжүүлсэн улаан эсийн өтгөрүүлэг</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>8.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Хөлдөөсөн шинэ сийвэн</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>9.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Шингэн сийвэн</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>10.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Бүхэл цуснаас гаргаж авсан ЯЭӨ</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>11.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Цитоферезийн аргаар бэлтгэсэн ЯЭӨ</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>12.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Криопреципитат</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>13.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>К сийвэн</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>14.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Туяагаар шарсан улаан эс</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>15.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Хөлдөөж, угаасан улаан эс</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>16.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Туяагаар шарсан сийвэн</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>17.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Туяагаар шарсан ЯЭӨ</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>18.</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Бусад</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>

                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            
                                        </div>                                                                 
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1">
                                            <b>-</b>
                                        </div>
                                        <div class="col-md-5">
                                           <label>Дүн</label> 
                                        </div>
                                                                                               
                                        <div class="col-md-1">
                                            
                                            
                                        </div>
                                        <div class="col-md-1">
                                            
                                            
                                        </div>

                                        <div class="col-md-1">
                                            
                                            
                                        </div>
                                        <div class="col-md-1">
                                            
                                            
                                        </div>
                                        
                                        <div class="col-md-1">
                                            
                                            
                                        </div>
                                        <div class="col-md-1">
                                            
                                            
                                        </div>                                                                 
                                    </div>



                                </div>
                                <div class="tab-pane" id="tab2" disabled="disabled">
                                    <h2 class="hidden">&nbsp;</h2>
                                    <div class="form-group">
                                        <label for="name">First name *</label>
                                        <input id="name" name="fname" placeholder="Enter your First name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Last name *</label>
                                        <input id="surname" name="lname" type="text" placeholder=" Enter your Last name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Gender</label>
                                        <select class="form-control" name="gender" id="gender" title="Select an account type...">
                                            <option>Select</option>
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input id="address" name="address" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age *</label>
                                        <input id="age" name="age" type="text"  maxlength="3" class="form-control number">
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3" disabled="disabled">
                                    <div class="form-group">
                                        <label>Home number</label>
                                        <input type="text" class="form-control" id="phone1" name="phone1" placeholder="(999)999-9999">
                                    </div>
                                    <div class="form-group">
                                        <label>Personal number</label>
                                        <input type="text" class="form-control" id="phone2" name="phone2" placeholder="(999)999-9999">
                                    </div>
                                    <div class="form-group">
                                        <label>Alternate number</label>
                                        <input type="text" class="form-control" id="phone3" name="phone3" placeholder="(999)999-9999">
                                    </div>
                                    <h2 class="hidden">&nbsp;</h2>
                                    <div class="form-group">
                                        <span>Terms and Conditions</span>

                                        <label>
                                            <input id="acceptTerms" name="acceptTerms" type="checkbox">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                                 <input type="hidden" class="form-control" id="talbar1" name="talbar1" placeholder="">
                                <ul class="pager wizard">
                                    <li class="previous"><a href="#">Өмнөх</a></li>
                                    <li class="next"><a href="#">Дараахь</a></li>
                                    <li class="next finish" style="display:none;">
                                         <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     {!! Form::close() !!}

                     <p><tt id="results"></tt></p>
                </div
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript">
    
      function showValues() {
    var str = $( "buheltsus :input" ).serialize();
    $( "#results" ).text( str );
  }
  $( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues );
  $( "input[type='text']").on( "change", showValues );
  $( "select" ).on( "change", showValues );
  showValues();
</script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"  type="text/javascript"></script>
@stop