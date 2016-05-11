@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a hun_huchnii_tailan
@parent
@stop


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
        <li class="active">Create New hun_huchnii_tailan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit hun_huchnii_tailan
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

                    {!! Form::model($hun_huchnii_tailan, ['method' => 'PATCH', 'action' => ['Hun_huchnii_tailansController@update', $hun_huchnii_tailan->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('ih_emch_bugd', 'Ih Emch Bugd: ') !!}
                        {!! Form::text('ih_emch_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_orontoo', 'Ih Emch Orontoo: ') !!}
                        {!! Form::text('ih_emch_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('baga_emch_bugd', 'Baga Emch Bugd: ') !!}
                        {!! Form::text('baga_emch_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('baga_emch_orontoo', 'Baga Emch Orontoo: ') !!}
                        {!! Form::text('baga_emch_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('suvilagch_bugd', 'Suvilagch Bugd: ') !!}
                        {!! Form::text('suvilagch_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('suvilagch_orontoo', 'Suvilagch Orontoo: ') !!}
                        {!! Form::text('suvilagch_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('laborant_bugd', 'Laborant Bugd: ') !!}
                        {!! Form::text('laborant_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('laborant_orontoo', 'Laborant Orontoo: ') !!}
                        {!! Form::text('laborant_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ariutgagch_bugd', 'Ariutgagch Bugd: ') !!}
                        {!! Form::text('ariutgagch_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ariutgagch_orontoo', 'Ariutgagch Orontoo: ') !!}
                        {!! Form::text('ariutgagch_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('uilchlegch_bugd', 'Uilchlegch Bugd: ') !!}
                        {!! Form::text('uilchlegch_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('uilchlegch_orontoo', 'Uilchlegch Orontoo: ') !!}
                        {!! Form::text('uilchlegch_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('busad_mergejilten_bugd', 'Busad Mergejilten Bugd: ') !!}
                        {!! Form::text('busad_mergejilten_bugd', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('busad_mergejilten_orontoo', 'Busad Mergejilten Orontoo: ') !!}
                        {!! Form::text('busad_mergejilten_orontoo', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop