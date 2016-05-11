@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a sazutailanmayagt
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Sazutailanmayagts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>sazutailanmayagts</li>
        <li class="active">Create New sazutailanmayagt</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit sazutailanmayagt
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

                    {!! Form::model($sazutailanmayagt, ['method' => 'PATCH', 'action' => ['SazutailanmayagtsController@update', $sazutailanmayagt->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('gurav', 'Gurav: ') !!}
                        {!! Form::text('gurav', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gurav1', 'Gurav1: ') !!}
                        {!! Form::text('gurav1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gurav2', 'Gurav2: ') !!}
                        {!! Form::text('gurav2', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gurav3', 'Gurav3: ') !!}
                        {!! Form::text('gurav3', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gurav4', 'Gurav4: ') !!}
                        {!! Form::text('gurav4', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('gurav5', 'Gurav5: ') !!}
                        {!! Form::text('gurav5', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('duruv', 'Duruv: ') !!}
                        {!! Form::text('duruv', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('duruv1', 'Duruv1: ') !!}
                        {!! Form::text('duruv1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('duruv2', 'Duruv2: ') !!}
                        {!! Form::text('duruv2', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('duruv3', 'Duruv3: ') !!}
                        {!! Form::text('duruv3', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('duruv4', 'Duruv4: ') !!}
                        {!! Form::text('duruv4', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tav1', 'Tav1: ') !!}
                        {!! Form::text('tav1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tav2', 'Tav2: ') !!}
                        {!! Form::text('tav2', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tav3', 'Tav3: ') !!}
                        {!! Form::text('tav3', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tav4', 'Tav4: ') !!}
                        {!! Form::text('tav4', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tav5', 'Tav5: ') !!}
                        {!! Form::text('tav5', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa1', 'Zurgaa1: ') !!}
                        {!! Form::text('zurgaa1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa2', 'Zurgaa2: ') !!}
                        {!! Form::text('zurgaa2', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa3', 'Zurgaa3: ') !!}
                        {!! Form::text('zurgaa3', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa4', 'Zurgaa4: ') !!}
                        {!! Form::text('zurgaa4', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa5', 'Zurgaa5: ') !!}
                        {!! Form::text('zurgaa5', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa6', 'Zurgaa6: ') !!}
                        {!! Form::text('zurgaa6', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa7', 'Zurgaa7: ') !!}
                        {!! Form::text('zurgaa7', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('zurgaa7', 'Zurgaa7: ') !!}
                        {!! Form::text('zurgaa7', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('doloo', 'Doloo: ') !!}
                        {!! Form::text('doloo', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('doloo1', 'Doloo1: ') !!}
                        {!! Form::text('doloo1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('doloo2', 'Doloo2: ') !!}
                        {!! Form::text('doloo2', null, ['class' => 'form-control']) !!}
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