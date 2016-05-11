@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Сургалтанд хамрагдалтын тайлан оруулах
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>ЭМТ-308.7 Тухайн жилд сургалтанд хамрагдалтын тайлан</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>Тухайн жилд сургалтанд хамрагдалтын тайлан</li>
        <li class="active">Сургалтанд хамрагдалтын тайлан оруулах</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        ЭМТ-308.7 Тухайн жилд сургалтанд хамрагдалтын тайлан
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
</section>

@stop