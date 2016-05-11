@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
2. Хэрэглэсэн цус, цусан бүтээгдэхүүн /Тасаг, нэгжээр/
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>2. Хэрэглэсэн цус, цусан бүтээгдэхүүн /Тасаг, нэгжээр/</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>2. Хэрэглэсэн цус, цусан бүтээгдэхүүн /Тасаг, нэгжээр/</li>
        <li class="active">Оруулах хэсэг</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        1-р улиралд Хэрэглэсэн цус, цусан бүтээгдэхүүн /Тасаг, нэгжээр/оруулах
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

                    {!! Form::open(['url' => 'admin/hereglesen_tstsb_tasagaars']) !!}


                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                        <th width="2%">№</th>
                                        <th align="center" width="200px">ЦЦБ-ний нэр төрөл</th>
                                        <th align="center" width="8%" colspan="2"><small>Мэс засал</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Дотор</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Хавдар</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Төрөх, Эмэгтэйчүүд</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Хүүхэд</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Гэмтэл</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Бусад</small></th>
                                      
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
                                        <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="buheltsus0" name="buheltsus[]" class="form-control" placeholder="Мл"></td>
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
                                        <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="ulaanesutguruuleg" name="ulaanesutguruuleg[]" class="form-control" placeholder="Мл"></td>
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
                                        <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
                                        <td><input type="text" id="darshilsanulaanes" name="darshilsanulaanes[]" class="form-control" placeholder="Мл"></td>
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
                            <a class="btn btn-danger" href="{{ route('admin.hereglesen_tstsb_tasagaars.index') }}">
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
</section>

@stop