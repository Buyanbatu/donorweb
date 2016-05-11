@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a tsusanbuteegdehuuntailan
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Tsusanbuteegdehuuntailans</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>tsusanbuteegdehuuntailans</li>
        <li class="active">Create New tsusanbuteegdehuuntailan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit tsusanbuteegdehuuntailan
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

                    {!! Form::model($tsusanbuteegdehuuntailan, ['method' => 'PATCH', 'action' => ['TsusanbuteegdehuuntailansController@update', $tsusanbuteegdehuuntailan->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('talbar1', 'Talbar1: ') !!}
                        {!! Form::text('talbar1', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar2', 'Talbar2: ') !!}
                        {!! Form::text('talbar2', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar3', 'Talbar3: ') !!}
                        {!! Form::text('talbar3', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar4', 'Talbar4: ') !!}
                        {!! Form::text('talbar4', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar5', 'Talbar5: ') !!}
                        {!! Form::text('talbar5', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar6', 'Talbar6: ') !!}
                        {!! Form::text('talbar6', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar7', 'Talbar7: ') !!}
                        {!! Form::text('talbar7', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar8', 'Talbar8: ') !!}
                        {!! Form::text('talbar8', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar9', 'Talbar9: ') !!}
                        {!! Form::text('talbar9', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar10', 'Talbar10: ') !!}
                        {!! Form::text('talbar10', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar11', 'Talbar11: ') !!}
                        {!! Form::text('talbar11', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar12', 'Talbar12: ') !!}
                        {!! Form::text('talbar12', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar13', 'Talbar13: ') !!}
                        {!! Form::text('talbar13', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar14', 'Talbar14: ') !!}
                        {!! Form::text('talbar14', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar15', 'Talbar15: ') !!}
                        {!! Form::text('talbar15', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar16', 'Talbar16: ') !!}
                        {!! Form::text('talbar16', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar17', 'Talbar17: ') !!}
                        {!! Form::text('talbar17', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('talbar18', 'Talbar18: ') !!}
                        {!! Form::text('talbar18', null, ['class' => 'form-control']) !!}
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