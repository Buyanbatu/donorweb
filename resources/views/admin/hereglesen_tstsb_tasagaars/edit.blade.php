@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a hereglesen_tstsb_tasagaar
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Hereglesen_tstsb_tasagaars</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>hereglesen_tstsb_tasagaars</li>
        <li class="active">Create New hereglesen_tstsb_tasagaar</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit hereglesen_tstsb_tasagaar
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

                    {!! Form::model($hereglesen_tstsb_tasagaar, ['method' => 'PATCH', 'action' => ['Hereglesen_tstsb_tasagaarsController@update', $hereglesen_tstsb_tasagaar->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('meszasal_negj', 'Meszasal Negj: ') !!}
                        {!! Form::text('meszasal_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('meszasal_ml', 'Meszasal Ml: ') !!}
                        {!! Form::text('meszasal_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('dotor_negj', 'Dotor Negj: ') !!}
                        {!! Form::text('dotor_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('dotor_ml', 'Dotor Ml: ') !!}
                        {!! Form::text('dotor_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('havdar_negj', 'Havdar Negj: ') !!}
                        {!! Form::text('havdar_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('havdar_ml', 'Havdar Ml: ') !!}
                        {!! Form::text('havdar_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('turuh_negj', 'Turuh Negj: ') !!}
                        {!! Form::text('turuh_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('turuh_ml', 'Turuh Ml: ') !!}
                        {!! Form::text('turuh_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('huuhed_negj', 'Huuhed Negj: ') !!}
                        {!! Form::text('huuhed_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('huuhed_ml', 'Huuhed Ml: ') !!}
                        {!! Form::text('huuhed_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gemtel_negj', 'Gemtel Negj: ') !!}
                        {!! Form::text('gemtel_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gemtel_ml', 'Gemtel Ml: ') !!}
                        {!! Form::text('gemtel_ml', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('busad_negj', 'Busad Negj: ') !!}
                        {!! Form::text('busad_negj', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('busad_ml', 'Busad Ml: ') !!}
                        {!! Form::text('busad_ml', null, ['class' => 'form-control']) !!}
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