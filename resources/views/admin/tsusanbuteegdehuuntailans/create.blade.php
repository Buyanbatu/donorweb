@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
1. Эмнэлзүйн цус сэлбэлтийн нэгжийн цус, цусан бүтээгдэхүүний тайлан оруулах
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
  
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>1. Эмнэлзүйн цус сэлбэлтийн нэгжийн цус, цусан бүтээгдэхүүний тайлан</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>Цус, цусан бүтээгдэхүүний тайлан</li>
        <li class="active">Цус, цусан бүтээгдэхүүний тайлан оруулах</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        1-р улирлын цус, цусан бүтээгдэхүүний тайлан оруулах
                    </h4>
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
                            <a class="btn btn-danger" href="{{ route('admin.tsusanbuteegdehuuntailans.index') }}">
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
    <!-- row-->
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"  type="text/javascript"></script>
@stop