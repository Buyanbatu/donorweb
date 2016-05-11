@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ЭМТ-308.7 Тухайн жилд сургалтанд хамрагдалтын тайлан харах
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Сургалтанд хамрагдалтын тайлан</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>Сургалтанд хамрагдалтын тайлан</li>
        <li class="active">Сургалтанд хамрагдалтын тайлан харах</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    ЭМТ-308.7 Тухайн жилд сургалтанд хамрагдалтын тайлан харах
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.surgaltand_hamragdaltiin_tailans.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
             @foreach ($surgaltand_hamragdaltiin_tailans as $surgaltand_hamragdaltiin_tailan)

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
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_uildwerlel !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_uildwerlel !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_uildwerlel !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_uildwerlel !!}</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Эмнэлзүйн трансфузиологи</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_emnelzui !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshuuleh_emnelzui !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_emnelzui !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_emnelzui !!}</td>
                                    </tr><tr>
                                        <td>3.</td>
                                        <td>Иммуногематологи</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_immune !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshuuleh_immune !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_immune !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_immune !!}</td>
                                    </tr><tr>
                                        <td>4.</td>
                                        <td>Вирус судлал</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_virus !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_virus !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_virus !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_virus !!}</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Чанарын хяналт</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_chanar !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_chanar !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_chanar !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_chanar !!}</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>ЦЦБ-ний Зохистой хэрэглээ</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_tstsb_hereglee !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_tstsb_hereglee !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_tstsb_hereglee !!}</td>
                                        <td>{!! $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_tstsb_hereglee !!}</td>
                                    </tr>
                                    <tr>
                                        <td><b>7.</b></td>
                                        <td><b>Бусад</b></td>
                                        <td><b>{!! $total_mdeeshluuleh_ih_emch = $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_uildwerlel + $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_emnelzui + $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshuuleh_immune + $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_virus + $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_chanar + $surgaltand_hamragdaltiin_tailan->ih_emch_mdeeshluuleh_tstsb_hereglee !!}</b></td>

                                        <td><b>{!! $total_mdeeshluuleh_tusgai = $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_uildwerlel + $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshuuleh_emnelzui + $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshuuleh_immune + $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_virus + $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_chanar + $surgaltand_hamragdaltiin_tailan->tusgai_mdeeshluuleh_tstsb_hereglee !!}</b></td>

                                        <td><b>{!! $total_molgoh_ih_emch = $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_uildwerlel + $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_emnelzui + $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_immune + $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_virus + $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_chanar + $surgaltand_hamragdaltiin_tailan->ih_emch_molgoh_tstsb_hereglee !!}</b></td>
                                        
                                        <td><b>{!! $total_molgoh_tusgai = $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_uildwerlel + $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_emnelzui + $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_immune + $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_virus + $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_chanar + $surgaltand_hamragdaltiin_tailan->tusgai_molgoh_tstsb_hereglee !!}</b></td>
                                    </tr>
                                   </tbody>
                                </table>

                
                    @endforeach

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
