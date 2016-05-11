@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a surgaltand_hamragdaltiin_tailan
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Surgaltand_hamragdaltiin_tailans</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>surgaltand_hamragdaltiin_tailans</li>
        <li class="active">Create New surgaltand_hamragdaltiin_tailan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit surgaltand_hamragdaltiin_tailan
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

                    {!! Form::model($surgaltand_hamragdaltiin_tailan, ['method' => 'PATCH', 'action' => ['Surgaltand_hamragdaltiin_tailansController@update', $surgaltand_hamragdaltiin_tailan->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('ih_emch_mdeeshuuleh_uildwerlel', 'Ih Emch Mdeeshuuleh Uildwerlel: ') !!}
                        {!! Form::text('ih_emch_mdeeshuuleh_uildwerlel', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_uildwerlel', 'Ih Emch Molgoh Uildwerlel: ') !!}
                        {!! Form::text('ih_emch_molgoh_uildwerlel', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshluuleh_uildwerlel', 'Tusgai Mdeeshluuleh Uildwerlel: ') !!}
                        {!! Form::text('tusgai_mdeeshluuleh_uildwerlel', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_uildwerlel', 'Tusgai Molgoh Uildwerlel: ') !!}
                        {!! Form::text('tusgai_molgoh_uildwerlel', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_mdeeshuuleh_emnelzui', 'Ih Emch Mdeeshuuleh Emnelzui: ') !!}
                        {!! Form::text('ih_emch_mdeeshuuleh_emnelzui', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_emnelzui', 'Ih Emch Molgoh Emnelzui: ') !!}
                        {!! Form::text('ih_emch_molgoh_emnelzui', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshuuleh_emnelzui', 'Tusgai Mdeeshuuleh Emnelzui: ') !!}
                        {!! Form::text('tusgai_mdeeshuuleh_emnelzui', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_emnelzui', 'Tusgai Molgoh Emnelzui: ') !!}
                        {!! Form::text('tusgai_molgoh_emnelzui', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_mdeeshuuleh_immune', 'Ih Emch Mdeeshuuleh Immune: ') !!}
                        {!! Form::text('ih_emch_mdeeshuuleh_immune', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_immune', 'Ih Emch Molgoh Immune: ') !!}
                        {!! Form::text('ih_emch_molgoh_immune', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshuuleh_immune', 'Tusgai Mdeeshuuleh Immune: ') !!}
                        {!! Form::text('tusgai_mdeeshuuleh_immune', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_immune', 'Tusgai Molgoh Immune: ') !!}
                        {!! Form::text('tusgai_molgoh_immune', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_mdeeshluuleh_virus', 'Ih Emch Mdeeshluuleh Virus: ') !!}
                        {!! Form::text('ih_emch_mdeeshluuleh_virus', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_virus', 'Ih Emch Molgoh Virus: ') !!}
                        {!! Form::text('ih_emch_molgoh_virus', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshluuleh_virus', 'Tusgai Mdeeshluuleh Virus: ') !!}
                        {!! Form::text('tusgai_mdeeshluuleh_virus', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_virus', 'Tusgai Molgoh Virus: ') !!}
                        {!! Form::text('tusgai_molgoh_virus', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_mdeeshluuleh_chanar', 'Ih Emch Mdeeshluuleh Chanar: ') !!}
                        {!! Form::text('ih_emch_mdeeshluuleh_chanar', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_chanar', 'Ih Emch Molgoh Chanar: ') !!}
                        {!! Form::text('ih_emch_molgoh_chanar', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshluuleh_chanar', 'Tusgai Mdeeshluuleh Chanar: ') !!}
                        {!! Form::text('tusgai_mdeeshluuleh_chanar', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_chanar', 'Tusgai Molgoh Chanar: ') !!}
                        {!! Form::text('tusgai_molgoh_chanar', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_mdeeshluuleh_tstsb_hereglee', 'Ih Emch Mdeeshluuleh Tstsb Hereglee: ') !!}
                        {!! Form::text('ih_emch_mdeeshluuleh_tstsb_hereglee', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ih_emch_molgoh_tstsb_hereglee', 'Ih Emch Molgoh Tstsb Hereglee: ') !!}
                        {!! Form::text('ih_emch_molgoh_tstsb_hereglee', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_mdeeshluuleh_tstsb_hereglee', 'Tusgai Mdeeshluuleh Tstsb Hereglee: ') !!}
                        {!! Form::text('tusgai_mdeeshluuleh_tstsb_hereglee', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('tusgai_molgoh_tstsb_hereglee', 'Tusgai Molgoh Tstsb Hereglee: ') !!}
                        {!! Form::text('tusgai_molgoh_tstsb_hereglee', null, ['class' => 'form-control']) !!}
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