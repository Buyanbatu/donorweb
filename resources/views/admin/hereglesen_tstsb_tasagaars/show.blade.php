@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
hereglesen_tstsb_tasagaar
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
        <li class="active">hereglesen_tstsb_tasagaars</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    hereglesen_tstsb_tasagaar {{ $hereglesen_tstsb_tasagaar->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $hereglesen_tstsb_tasagaar->id }}</td></tr>
                     <tr><td>meszasal_negj</td><td>{{ $hereglesen_tstsb_tasagaar['meszasal_negj'] }}</td></tr>
					<tr><td>meszasal_ml</td><td>{{ $hereglesen_tstsb_tasagaar['meszasal_ml'] }}</td></tr>
					<tr><td>dotor_negj</td><td>{{ $hereglesen_tstsb_tasagaar['dotor_negj'] }}</td></tr>
					<tr><td>dotor_ml</td><td>{{ $hereglesen_tstsb_tasagaar['dotor_ml'] }}</td></tr>
					<tr><td>havdar_negj</td><td>{{ $hereglesen_tstsb_tasagaar['havdar_negj'] }}</td></tr>
					<tr><td>havdar_ml</td><td>{{ $hereglesen_tstsb_tasagaar['havdar_ml'] }}</td></tr>
					<tr><td>turuh_negj</td><td>{{ $hereglesen_tstsb_tasagaar['turuh_negj'] }}</td></tr>
					<tr><td>turuh_ml</td><td>{{ $hereglesen_tstsb_tasagaar['turuh_ml'] }}</td></tr>
					<tr><td>huuhed_negj</td><td>{{ $hereglesen_tstsb_tasagaar['huuhed_negj'] }}</td></tr>
					<tr><td>huuhed_ml</td><td>{{ $hereglesen_tstsb_tasagaar['huuhed_ml'] }}</td></tr>
					<tr><td>gemtel_negj</td><td>{{ $hereglesen_tstsb_tasagaar['gemtel_negj'] }}</td></tr>
					<tr><td>gemtel_ml</td><td>{{ $hereglesen_tstsb_tasagaar['gemtel_ml'] }}</td></tr>
					<tr><td>busad_negj</td><td>{{ $hereglesen_tstsb_tasagaar['busad_negj'] }}</td></tr>
					<tr><td>busad_ml</td><td>{{ $hereglesen_tstsb_tasagaar['busad_ml'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop