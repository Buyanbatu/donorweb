@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ЭМТ-308.6 Хүн хүчний тайлан
@parent
@stop
@section('header_styles')    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css') }}" />
    <link href="{{ asset('assets/css/pages/alertmessage.css') }}" rel="stylesheet"  type="text/css"/>
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>ЭМТ-308.6 Хүн хүчний тайлан</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>hun_huchnii_tailans</li>
        <li class="active">hun_huchnii_tailans</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    ЭМТ-308.6 Хүн хүчний тайлан
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.hun_huchnii_tailans.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-briefcase"></i>
                                                    Цусны алба
                                                </th>
                                                <th class="hidden-xs">
                                                    <i class="fa fa-question"></i>
                                                    Мэргэжилтэнүүд
                                                </th>
                                                <th>
                                                    <i class="fa fa-bookAir"></i>
                                                    Нийт
                                                </th>
                                                <th><i class="fa fa-bookAir"></i>
                                                    Орон тоо</th>
                                            </tr>
                                        </thead>

                                        <tbody> 
                                        @foreach ($hun_huchnii_tailans as $hun_huchnii_tailan)
                                            <tr>
                                                <td>
                                                    Дээд мэргэжилтэн
                                                </td>
                                                <td>
                                                    Их эмч
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->ih_emch_bugd !!}</td>
                                                <td>
                                                    {!! $ih_emch_huvi = ($hun_huchnii_tailan->ih_emch_bugd * 100) / $hun_huchnii_tailan->ih_emch_orontoo !!} %
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" data-transitiongoal="{!! $ih_emch_huvi = ($hun_huchnii_tailan->ih_emch_bugd * 100) / $hun_huchnii_tailan->ih_emch_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" align="middle">
                                                    Тусгай мэргэжилтэн
                                                </td>
                                                <td>
                                                    Бага эмч
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->baga_emch_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="{!! $baga_emch_huvi = ($hun_huchnii_tailan->baga_emch_bugd * 100) / $hun_huchnii_tailan->baga_emch_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Сувилагч
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->suvilagch_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="{!! $suvilagch_huvi = ($hun_huchnii_tailan->suvilagch_bugd * 100) / $hun_huchnii_tailan->suvilagch_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Лаборант
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->laborant_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="{!! $laborant_huvi = ($hun_huchnii_tailan->laborant_bugd * 100) / $hun_huchnii_tailan->laborant_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">
                                                    Бусад
                                                </td>
                                                <td>
                                                    Ариутгагч
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->ariutgagch_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="{!! $ariutgagch_huvi = ($hun_huchnii_tailan->ariutgagch_bugd * 100) / $hun_huchnii_tailan->ariutgagch_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    Үйлчлэгч
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->uilchlegch_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" data-transitiongoal="{!! $uilchlegch_huvi = ($hun_huchnii_tailan->uilchlegch_bugd * 100) / $hun_huchnii_tailan->uilchlegch_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    Бусад дээд мэргэжилтэн
                                                </td>
                                                <td class="hidden-xs">{!! $hun_huchnii_tailan->busad_mergejilten_bugd !!}</td>
                                                <td>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" data-transitiongoal="{!! $busad_mergejilten_huvi = ($hun_huchnii_tailan->busad_mergejilten_bugd * 100) / $hun_huchnii_tailan->busad_mergejilten_orontoo !!}"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="info">
                                                <td>
                                                    <b>Нийт тоо</b>
                                                </td>
                                                <td class="hidden-xs"></td>
                                                <td>
                                                    <b>{!! $total = $hun_huchnii_tailan->ih_emch_bugd + $hun_huchnii_tailan->baga_emch_bugd + $hun_huchnii_tailan->suvilagch_bugd + $hun_huchnii_tailan->laborant_bugd + $hun_huchnii_tailan->ariutgagch_bugd + $hun_huchnii_tailan->uilchlegch_bugd + $hun_huchnii_tailan->busad_mergejilten_bugd !!}</b>
                                                </td>
                                                <td></td>
                                            </tr>
                                             @endforeach
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

<script type='text/javascript' src="{{ asset('assets/vendors/bootstrap-progressbar/js/bootstrap-progressbar.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/general.js') }}" ></script>
@stop
