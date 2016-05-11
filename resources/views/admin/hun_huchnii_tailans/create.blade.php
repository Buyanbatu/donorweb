@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ЭМТ-308.6 Хүн хүчний тайлан оруулах
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Hun_huchnii_tailans</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>hun_huchnii_tailans</li>
        <li class="active">ЭМТ-308.6 Хүн хүчний тайлан оруулах</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        ЭМТ-308.6 Хүн хүчний тайлан оруулах
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

                    {!! Form::open(['url' => 'admin/hun_huchnii_tailans']) !!}


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
                                            <tr>
                                                <td>
                                                    Дээд мэргэжилтэн
                                                </td>
                                                <td>
                                                    Их эмч
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('ih_emch_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('ih_emch_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">
                                                    Тусгай мэргэжилтэн
                                                </td>
                                                <td>
                                                    Бага эмч
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('baga_emch_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('baga_emch_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Сувилагч
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('suvilagch_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('suvilagch_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Лаборант
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('laborant_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('laborant_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">
                                                    Бусад
                                                </td>
                                                <td>
                                                    Ариутгагч
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('ariutgagch_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('ariutgagch_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    Үйлчлэгч
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('uilchlegch_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('uilchlegch_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    Бусад дээд мэргэжилтэн
                                                </td>
                                                <td class="hidden-xs">{!! Form::text('busad_mergejilten_bugd', null, ['class' => 'form-control']) !!}</td>
                                                <td>
                                                    {!! Form::text('busad_mergejilten_orontoo', null, ['class' => 'form-control']) !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                    
					

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>

                            <a class="btn btn-danger" href="{{ route('admin.hun_huchnii_tailans.index') }}">
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