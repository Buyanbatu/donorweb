@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
1. Эмнэлзүйн цус сэлбэлтийн нэгжийн цус, цусан бүтээгдэхүүний тайлан
@parent
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
        <li class="active">Цус, цусан бүтээгдэхүүний тайлан харах</li>
    </ol>
</section>


 <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                           Хэрэглэгчийн мэдээлэл</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Нууц үг солих</a>
                    </li>
                 
                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            Хэрэглэгчийн мэдээлэл
                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                @if($user->pic)
                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="profile pic" class="img-max">
                                                @else
                                                    <img src="http://placehold.it/200x200" alt="profile pic">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td>@lang('users/title.first_name')</td>
                                                            <td>
                                                                {{ $user->first_name }}
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.last_name')</td>
                                                            <td>
                                                                {{ $user->last_name }}
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.email')</td>
                                                            <td>
                                                                {{ $user->email }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                @lang('users/title.gender')
                                                            </td>
                                                            <td>
                                                                {{ $user->gender }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.dob')</td>
                                                            <td>
                                                                {{ $user->dob }}
                                                            </td>
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>@lang('users/title.status')</td>
                                                            <td>

                                                                @if($user->deleted_at)
                                                                    Устгагдсан
                                                                @elseif($activation = Activation::completed($user))
                                                                    Идэвхтэй
                                                                @else
                                                                    Хүлээгдэж буй
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.created_at')</td>
                                                            <td>
                                                                {!! $user->created_at->diffForHumans() !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-3 control-label">
                                                Нууц үг
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password" placeholder="Нууц үг"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                Нууц үг баталгаажилт
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Нууц үг давтах"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary" id="change-password">Нууц үг солих
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Болих</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Цэвэрлэх"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    1-р улирлын цус, цусан бүтээгдэхүүний тайлан харах
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.tsusanbuteegdehuuntailans.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span> @lang('button.edit')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
             <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                        <th width="2%" rowspan="2">№</th>
                                        <th align="center" rowspan="2">ЦЦБ-ний нэр төрөл</th>
                                        <th align="center" width="8%" colspan="2"><small>Захиалсан</small>
                                        </th>
                                        <th align="center" width="8%" colspan="2"><small>Хүчингүй /цуцлагдсан/ захиалга</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Захиалгын дагуу хүлээн авсан</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Захиалгын дагуу хүлээн аваагүй</small></th>
                                        <th align="center" width="4%"><small>Хувийн тохиргоо үзсэн</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Хэрэглэсэн</small></th>
                                        <th align="center" width="4%"><small>Урвал хүндрэл</small></th>
                                        <th align="center" width="8%" colspan="2"><small>Хэрэглээгүй актлагдсан</small></th>
                                        <th align="center" width="10%" colspan="2"><small>Үлдэгдэл нөөц</small></th>
                                    </tr>
                                     <tr>
                                       
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="4%"><small>Мл</small>
                                        </th>
                                         <th align="center" width="5%"><small>Нэгж</small>
                                        </th>
                                        <th align="center" width="5%"><small>Мл</small>
                                        </th>
                                       
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td width="5px">1.</td>
                                        <td width="200px">Бүхэл цус</td>
                                        <td width="20px">{!! $buheltsus[0] !!}</td>
                                        <td width="20px">{!! $buheltsus[1] !!}</td>
                                        <td width="20px">{!! $buheltsus[2] !!}</td>
                                        <td width="20px">{!! $buheltsus[3] !!}</td>
                                        <td width="20px">{!! $buheltsus[4] !!}</td>
                                        <td width="20px">{!! $buheltsus[5] !!}</td>
                                        <td width="20px">{!! $buheltsus[6] !!}</td>
                                        <td width="20px">{!! $buheltsus[7] !!}</td>
                                        <td width="20px">{!! $buheltsus[8] !!}</td>
                                        <td width="20px">{!! $buheltsus[9] !!}</td>
                                        <td width="20px">{!! $buheltsus[10] !!}</td>
                                        <td width="20px">{!! $buheltsus[11] !!}</td>
                                        <td width="20px">{!! $buheltsus[12] !!}</td>
                                        <td width="20px">{!! $buheltsus[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>


                                    
                                    <tr>
                                        <td>2.</td>
                                        <td>Улаан эсийн өтгөрүүлэг</td>
                                        <td>{!! $ulaanesutguruuleg[0] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[1] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[2] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[3] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[4] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[5] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[6] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[7] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[8] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[9] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[10] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[11] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[12] !!}</td>
                                        <td>{!! $ulaanesutguruuleg[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr><tr>
                                        <td>3.</td>
                                        <td>Даршилсан улаан эс</td>
                                        <td>{!! $darshilsanulaanes[0] !!}</td>
                                        <td>{!! $darshilsanulaanes[1] !!}</td>
                                        <td>{!! $darshilsanulaanes[2] !!}</td>
                                        <td>{!! $darshilsanulaanes[3] !!}</td>
                                        <td>{!! $darshilsanulaanes[4] !!}</td>
                                        <td>{!! $darshilsanulaanes[5] !!}</td>
                                        <td>{!! $darshilsanulaanes[6] !!}</td>
                                        <td>{!! $darshilsanulaanes[7] !!}</td>
                                        <td>{!! $darshilsanulaanes[8] !!}</td>
                                        <td>{!! $darshilsanulaanes[9] !!}</td>
                                        <td>{!! $darshilsanulaanes[10] !!}</td>
                                        <td>{!! $darshilsanulaanes[11] !!}</td>
                                        <td>{!! $darshilsanulaanes[12] !!}</td>
                                        <td>{!! $darshilsanulaanes[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr><tr>
                                        <td>4.</td>
                                        <td>Угаасан улаан эс</td>
                                        <td>{!! $ugaasanulaanes[0] !!}</td>
                                        <td>{!! $ugaasanulaanes[1] !!}</td>
                                        <td>{!! $ugaasanulaanes[2] !!}</td>
                                        <td>{!! $ugaasanulaanes[3] !!}</td>
                                        <td>{!! $ugaasanulaanes[4] !!}</td>
                                        <td>{!! $ugaasanulaanes[5] !!}</td>
                                        <td>{!! $ugaasanulaanes[6] !!}</td>
                                        <td>{!! $ugaasanulaanes[7] !!}</td>
                                        <td>{!! $ugaasanulaanes[8] !!}</td>
                                        <td>{!! $ugaasanulaanes[9] !!}</td>
                                        <td>{!! $ugaasanulaanes[10] !!}</td>
                                        <td>{!! $ugaasanulaanes[11] !!}</td>
                                        <td>{!! $ugaasanulaanes[12] !!}</td>
                                        <td>{!! $ugaasanulaanes[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Цагаан эсгүйжүүлсэн бүхэл цус</td>
                                        <td>{!! $tsagaanesguibuheltsus[0] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[1] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[2] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[3] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[4] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[5] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[6] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[7] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[8] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[9] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[10] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[11] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[12] !!}</td>
                                        <td>{!! $tsagaanesguibuheltsus[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Цагаан эсгүйжүүлсэн даршилсан улаан эс</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[0] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[1] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[2] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[3] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[4] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[5] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[6] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[7] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[8] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[9] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[10] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[11] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[12] !!}</td>
                                        <td>{!! $tsagaanesguidarshilsanulaanes[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Цагаан эсгүйжүүлсэн улаан эсийн өтгөрүүлэг</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[0] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[1] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[2] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[3] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[4] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[5] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[6] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[7] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[8] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[9] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[10] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[11] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[12] !!}</td>
                                        <td>{!! $tsagaanesguiulaanesutguruuleg[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Хөлдөөсөн шинэ сийвэн</td>
                                        <td>{!! $hulduusunshinesiiven[0] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[1] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[2] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[3] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[4] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[5] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[6] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[7] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[8] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[9] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[10] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[11] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[12] !!}</td>
                                        <td>{!! $hulduusunshinesiiven[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Шингэн сийвэн</td>
                                        <td>{!! $shingensiiven[0] !!}</td>
                                        <td>{!! $shingensiiven[1] !!}</td>
                                        <td>{!! $shingensiiven[2] !!}</td>
                                        <td>{!! $shingensiiven[3] !!}</td>
                                        <td>{!! $shingensiiven[4] !!}</td>
                                        <td>{!! $shingensiiven[5] !!}</td>
                                        <td>{!! $shingensiiven[6] !!}</td>
                                        <td>{!! $shingensiiven[7] !!}</td>
                                        <td>{!! $shingensiiven[8] !!}</td>
                                        <td>{!! $shingensiiven[9] !!}</td>
                                        <td>{!! $shingensiiven[10] !!}</td>
                                        <td>{!! $shingensiiven[11] !!}</td>
                                        <td>{!! $shingensiiven[12] !!}</td>
                                        <td>{!! $shingensiiven[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Бүхэл цуснаас гаргаж авсан ЯЭӨ</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[0] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[1] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[2] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[3] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[4] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[5] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[6] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[7] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[8] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[9] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[10] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[11] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[12] !!}</td>
                                        <td>{!! $buheltsusnaasawsanYAEU[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Цитоферезийн аргаар бэлтгэсэн ЯЭӨ</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[0] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[1] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[2] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[3] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[4] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[5] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[6] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[7] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[8] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[9] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[10] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[11] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[12] !!}</td>
                                        <td>{!! $tsitoferezeerbeltgesenYAEU[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Криопреципитат</td>
                                        <td>{!! $kriopretsipitat[0] !!}</td>
                                        <td>{!! $kriopretsipitat[1] !!}</td>
                                        <td>{!! $kriopretsipitat[2] !!}</td>
                                        <td>{!! $kriopretsipitat[3] !!}</td>
                                        <td>{!! $kriopretsipitat[4] !!}</td>
                                        <td>{!! $kriopretsipitat[5] !!}</td>
                                        <td>{!! $kriopretsipitat[6] !!}</td>
                                        <td>{!! $kriopretsipitat[7] !!}</td>
                                        <td>{!! $kriopretsipitat[8] !!}</td>
                                        <td>{!! $kriopretsipitat[9] !!}</td>
                                        <td>{!! $kriopretsipitat[10] !!}</td>
                                        <td>{!! $kriopretsipitat[11] !!}</td>
                                        <td>{!! $kriopretsipitat[12] !!}</td>
                                        <td>{!! $kriopretsipitat[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>К сийвэн</td>
                                        <td>{!! $k_siiven[0] !!}</td>
                                        <td>{!! $k_siiven[1] !!}</td>
                                        <td>{!! $k_siiven[2] !!}</td>
                                        <td>{!! $k_siiven[3] !!}</td>
                                        <td>{!! $k_siiven[4] !!}</td>
                                        <td>{!! $k_siiven[5] !!}</td>
                                        <td>{!! $k_siiven[6] !!}</td>
                                        <td>{!! $k_siiven[7] !!}</td>
                                        <td>{!! $k_siiven[8] !!}</td>
                                        <td>{!! $k_siiven[9] !!}</td>
                                        <td>{!! $k_siiven[10] !!}</td>
                                        <td>{!! $k_siiven[11] !!}</td>
                                        <td>{!! $k_siiven[12] !!}</td>
                                        <td>{!! $k_siiven[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Туяагаар шарсан улаан эс</td>
                                        <td>{!! $tuyagaarsharsanulaanes[0] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[1] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[2] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[3] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[4] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[5] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[6] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[7] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[8] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[9] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[10] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[11] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[12] !!}</td>
                                        <td>{!! $tuyagaarsharsanulaanes[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Хөлдөөж, угаасан улаан эс</td>
                                        <td>{!! $hulduujugaasanulaanes[0] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[1] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[2] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[3] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[4] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[5] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[6] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[7] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[8] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[9] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[10] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[11] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[12] !!}</td>
                                        <td>{!! $hulduujugaasanulaanes[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Туяагаар шарсан сийвэн</td>
                                        <td>{!! $tuyagaarsharsansiiven[0] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[1] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[2] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[3] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[4] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[5] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[6] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[7] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[8] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[9] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[10] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[11] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[12] !!}</td>
                                        <td>{!! $tuyagaarsharsansiiven[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Туяагаар шарсан ЯЭӨ</td>
                                        <td>{!! $tuyagaarsharsanYAEU[0] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[1] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[2] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[3] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[4] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[5] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[6] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[7] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[8] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[9] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[10] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[11] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[12] !!}</td>
                                        <td>{!! $tuyagaarsharsanYAEU[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Бусад</td>
                                        <td>{!! $busad[0] !!}</td>
                                        <td>{!! $busad[1] !!}</td>
                                        <td>{!! $busad[2] !!}</td>
                                        <td>{!! $busad[3] !!}</td>
                                        <td>{!! $busad[4] !!}</td>
                                        <td>{!! $busad[5] !!}</td>
                                        <td>{!! $busad[6] !!}</td>
                                        <td>{!! $busad[7] !!}</td>
                                        <td>{!! $busad[8] !!}</td>
                                        <td>{!! $busad[9] !!}</td>
                                        <td>{!! $busad[10] !!}</td>
                                        <td>{!! $busad[11] !!}</td>
                                        <td>{!! $busad[12] !!}</td>
                                        <td>{!! $busad[13] !!}</td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                     <tr>
                                        <td></td>
                                        <td><b>ДҮН</b></td>
                                        <td><b>{!! $total_zahialsan_negj = $buheltsus[0] + $ulaanesutguruuleg[0] + $darshilsanulaanes[0] + $ugaasanulaanes[0] + $tsagaanesguibuheltsus[0] + $tsagaanesguidarshilsanulaanes[0] + $tsagaanesguiulaanesutguruuleg[0] + $hulduusunshinesiiven[0] + $shingensiiven[0] + $buheltsusnaasawsanYAEU[0] + $tsitoferezeerbeltgesenYAEU[0] + $kriopretsipitat[0] + $k_siiven[0] + $tuyagaarsharsanulaanes[0] + $hulduujugaasanulaanes[0] + $tuyagaarsharsansiiven[0] + $tuyagaarsharsanYAEU[0] + $busad[0] !!}</b></td>

                                        <td><b>{!! $total_zahialsan_ml = $buheltsus[1] + $ulaanesutguruuleg[1] + $darshilsanulaanes[1] + $ugaasanulaanes[1] + $tsagaanesguibuheltsus[1] + $tsagaanesguidarshilsanulaanes[1] + $tsagaanesguiulaanesutguruuleg[1] + $hulduusunshinesiiven[1] + $shingensiiven[1] + $buheltsusnaasawsanYAEU[1] + $tsitoferezeerbeltgesenYAEU[1] + $kriopretsipitat[1] + $k_siiven[1] + $tuyagaarsharsanulaanes[1] + $hulduujugaasanulaanes[1] + $tuyagaarsharsansiiven[1] + $tuyagaarsharsanYAEU[1] + $busad[1] !!}</b></td>

                                        <td><b>{!! $total_huchingui_negj = $buheltsus[2] + $ulaanesutguruuleg[2] + $darshilsanulaanes[2] + $ugaasanulaanes[2] + $tsagaanesguibuheltsus[2] + $tsagaanesguidarshilsanulaanes[2] + $tsagaanesguiulaanesutguruuleg[2] + $hulduusunshinesiiven[2] + $shingensiiven[2] + $buheltsusnaasawsanYAEU[2] + $tsitoferezeerbeltgesenYAEU[2] + $kriopretsipitat[2] + $k_siiven[2] + $tuyagaarsharsanulaanes[2] + $hulduujugaasanulaanes[2] + $tuyagaarsharsansiiven[2] + $tuyagaarsharsanYAEU[2] + $busad[2] !!}</b></td>

                                        <td><b>{!! $total_huchingui_ml = $buheltsus[3] + $ulaanesutguruuleg[3] + $darshilsanulaanes[3] + $ugaasanulaanes[3] + $tsagaanesguibuheltsus[3] + $tsagaanesguidarshilsanulaanes[3] + $tsagaanesguiulaanesutguruuleg[3] + $hulduusunshinesiiven[3] + $shingensiiven[3] + $buheltsusnaasawsanYAEU[3] + $tsitoferezeerbeltgesenYAEU[3] + $kriopretsipitat[3] + $k_siiven[3] + $tuyagaarsharsanulaanes[3] + $hulduujugaasanulaanes[3] + $tuyagaarsharsansiiven[3] + $tuyagaarsharsanYAEU[3] + $busad[3] !!}</b></td>
                                       

                                        <td><b>{!! $total_huleenavsan_negj = $buheltsus[4] + $ulaanesutguruuleg[4] + $darshilsanulaanes[4] + $ugaasanulaanes[4] + $tsagaanesguibuheltsus[4] + $tsagaanesguidarshilsanulaanes[4] + $tsagaanesguiulaanesutguruuleg[4] + $hulduusunshinesiiven[4] + $shingensiiven[4] + $buheltsusnaasawsanYAEU[4] + $tsitoferezeerbeltgesenYAEU[4] + $kriopretsipitat[4] + $k_siiven[4] + $tuyagaarsharsanulaanes[4] + $hulduujugaasanulaanes[4] + $tuyagaarsharsansiiven[4] + $tuyagaarsharsanYAEU[4] + $busad[4] !!}</b></td>

                                        <td><b>{!! $total_huleenavsan_ml = $buheltsus[5] + $ulaanesutguruuleg[5] + $darshilsanulaanes[5] + $ugaasanulaanes[5] + $tsagaanesguibuheltsus[5] + $tsagaanesguidarshilsanulaanes[5] + $tsagaanesguiulaanesutguruuleg[5] + $hulduusunshinesiiven[5] + $shingensiiven[5] + $buheltsusnaasawsanYAEU[5] + $tsitoferezeerbeltgesenYAEU[5] + $kriopretsipitat[5] + $k_siiven[5] + $tuyagaarsharsanulaanes[5] + $hulduujugaasanulaanes[5] + $tuyagaarsharsansiiven[5] + $tuyagaarsharsanYAEU[5] + $busad[5] !!}</b></td>

                                        <td><b>{!! $total_huleenavaagui_negj = $buheltsus[6] + $ulaanesutguruuleg[6] + $darshilsanulaanes[6] + $ugaasanulaanes[6] + $tsagaanesguibuheltsus[6] + $tsagaanesguidarshilsanulaanes[6] + $tsagaanesguiulaanesutguruuleg[6] + $hulduusunshinesiiven[6] + $shingensiiven[6] + $buheltsusnaasawsanYAEU[6] + $tsitoferezeerbeltgesenYAEU[6] + $kriopretsipitat[6] + $k_siiven[6] + $tuyagaarsharsanulaanes[6] + $hulduujugaasanulaanes[6] + $tuyagaarsharsansiiven[6] + $tuyagaarsharsanYAEU[6] + $busad[6] !!}</b></td>

                                        <td><b>{!! $total_huleenavaagui_ml = $buheltsus[7] + $ulaanesutguruuleg[7] + $darshilsanulaanes[7] + $ugaasanulaanes[7] + $tsagaanesguibuheltsus[7] + $tsagaanesguidarshilsanulaanes[7] + $tsagaanesguiulaanesutguruuleg[7] + $hulduusunshinesiiven[7] + $shingensiiven[7] + $buheltsusnaasawsanYAEU[7] + $tsitoferezeerbeltgesenYAEU[7] + $kriopretsipitat[7] + $k_siiven[7] + $tuyagaarsharsanulaanes[7] + $hulduujugaasanulaanes[7] + $tuyagaarsharsansiiven[7] + $tuyagaarsharsanYAEU[7] + $busad[7] !!}</b></td>

                                        <td><b>{!! $total_huviin_tohirgoo_uzsen = $buheltsus[8] + $ulaanesutguruuleg[8] + $darshilsanulaanes[8] + $ugaasanulaanes[8] + $tsagaanesguibuheltsus[8] + $tsagaanesguidarshilsanulaanes[8] + $tsagaanesguiulaanesutguruuleg[8] + $hulduusunshinesiiven[8] + $shingensiiven[8] + $buheltsusnaasawsanYAEU[8] + $tsitoferezeerbeltgesenYAEU[8] + $kriopretsipitat[8] + $k_siiven[8] + $tuyagaarsharsanulaanes[8] + $hulduujugaasanulaanes[8] + $tuyagaarsharsansiiven[8] + $tuyagaarsharsanYAEU[8] + $busad[8] !!}</b></td>

                                        <td><b>{!! $total_hereglesen_negj = $buheltsus[9] + $ulaanesutguruuleg[9] + $darshilsanulaanes[9] + $ugaasanulaanes[9] + $tsagaanesguibuheltsus[9] + $tsagaanesguidarshilsanulaanes[9] + $tsagaanesguiulaanesutguruuleg[9] + $hulduusunshinesiiven[9] + $shingensiiven[9] + $buheltsusnaasawsanYAEU[9] + $tsitoferezeerbeltgesenYAEU[9] + $kriopretsipitat[9] + $k_siiven[9] + $tuyagaarsharsanulaanes[9] + $hulduujugaasanulaanes[9] + $tuyagaarsharsansiiven[9] + $tuyagaarsharsanYAEU[9] + $busad[9] !!}</b></td>

                                        <td><b>{!! $total_hereglesen_ml = $buheltsus[10] + $ulaanesutguruuleg[10] + $darshilsanulaanes[10] + $ugaasanulaanes[10] + $tsagaanesguibuheltsus[10] + $tsagaanesguidarshilsanulaanes[10] + $tsagaanesguiulaanesutguruuleg[10] + $hulduusunshinesiiven[10] + $shingensiiven[10] + $buheltsusnaasawsanYAEU[10] + $tsitoferezeerbeltgesenYAEU[10] + $kriopretsipitat[10] + $k_siiven[10] + $tuyagaarsharsanulaanes[10] + $hulduujugaasanulaanes[10] + $tuyagaarsharsansiiven[10] + $tuyagaarsharsanYAEU[10] + $busad[10] !!}</b></td>

                                        <td><b>{!! $total_urval_hundrel = $buheltsus[11] + $ulaanesutguruuleg[11] + $darshilsanulaanes[11] + $ugaasanulaanes[11] + $tsagaanesguibuheltsus[11] + $tsagaanesguidarshilsanulaanes[11] + $tsagaanesguiulaanesutguruuleg[11] + $hulduusunshinesiiven[11] + $shingensiiven[11] + $buheltsusnaasawsanYAEU[11] + $tsitoferezeerbeltgesenYAEU[11] + $kriopretsipitat[11] + $k_siiven[11] + $tuyagaarsharsanulaanes[11] + $hulduujugaasanulaanes[11] + $tuyagaarsharsansiiven[11] + $tuyagaarsharsanYAEU[11] + $busad[11] !!}</b></td>

                                        <td><b>{!! $total_aktlagdsan_negj = $buheltsus[12] + $ulaanesutguruuleg[12] + $darshilsanulaanes[12] + $ugaasanulaanes[12] + $tsagaanesguibuheltsus[12] + $tsagaanesguidarshilsanulaanes[12] + $tsagaanesguiulaanesutguruuleg[12] + $hulduusunshinesiiven[12] + $shingensiiven[12] + $buheltsusnaasawsanYAEU[12] + $tsitoferezeerbeltgesenYAEU[12] + $kriopretsipitat[12] + $k_siiven[12] + $tuyagaarsharsanulaanes[12] + $hulduujugaasanulaanes[12] + $tuyagaarsharsansiiven[12] + $tuyagaarsharsanYAEU[12] + $busad[12] !!}</b></td>

                                        <td><b>{!! $total_aktlagdsan_ml = $buheltsus[13] + $ulaanesutguruuleg[13] + $darshilsanulaanes[13] + $ugaasanulaanes[13] + $tsagaanesguibuheltsus[13] + $tsagaanesguidarshilsanulaanes[13] + $tsagaanesguiulaanesutguruuleg[13] + $hulduusunshinesiiven[13] + $shingensiiven[13] + $buheltsusnaasawsanYAEU[13] + $tsitoferezeerbeltgesenYAEU[13] + $kriopretsipitat[13] + $k_siiven[13] + $tuyagaarsharsanulaanes[13] + $hulduujugaasanulaanes[13] + $tuyagaarsharsansiiven[13] + $tuyagaarsharsanYAEU[13] + $busad[13] !!}</b></td>

                                        <td width="20px">бодох</td>
                                        <td width="20px">бодох</td>
                                    </tr>
                                    </tbody>
                                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
