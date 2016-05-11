@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
sazutailanmayagt
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Салбар зөвлөлийн тайлан маягт</h1>
    <ol class="breadcrumb">
          <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ хуудас
            </a>
        </li>
        <li>Салбар зөвлөлийн тайлан маягт</li>
        <li class="active">Бөглөх хэсэг</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    sazutailanmayagt {{ $sazutailanmayagt->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $sazutailanmayagt->id }}</td></tr>
                     <tr><td>gurav</td><td>{{ $sazutailanmayagt['gurav'] }}</td></tr>
					<tr><td>gurav1</td><td>{{ $sazutailanmayagt['gurav1'] }}</td></tr>
					<tr><td>gurav2</td><td>{{ $sazutailanmayagt['gurav2'] }}</td></tr>
					<tr><td>gurav3</td><td>{{ $sazutailanmayagt['gurav3'] }}</td></tr>
					<tr><td>gurav4</td><td>{{ $sazutailanmayagt['gurav4'] }}</td></tr>
					<tr><td>gurav5</td><td>{{ $sazutailanmayagt['gurav5'] }}</td></tr>
					<tr><td>duruv</td><td>{{ $sazutailanmayagt['duruv'] }}</td></tr>
					<tr><td>duruv1</td><td>{{ $sazutailanmayagt['duruv1'] }}</td></tr>
					<tr><td>duruv2</td><td>{{ $sazutailanmayagt['duruv2'] }}</td></tr>
					<tr><td>duruv3</td><td>{{ $sazutailanmayagt['duruv3'] }}</td></tr>
					<tr><td>duruv4</td><td>{{ $sazutailanmayagt['duruv4'] }}</td></tr>
					<tr><td>tav1</td><td>{{ $sazutailanmayagt['tav1'] }}</td></tr>
					<tr><td>tav2</td><td>{{ $sazutailanmayagt['tav2'] }}</td></tr>
					<tr><td>tav3</td><td>{{ $sazutailanmayagt['tav3'] }}</td></tr>
					<tr><td>tav4</td><td>{{ $sazutailanmayagt['tav4'] }}</td></tr>
					<tr><td>tav5</td><td>{{ $sazutailanmayagt['tav5'] }}</td></tr>
					<tr><td>zurgaa1</td><td>{{ $sazutailanmayagt['zurgaa1'] }}</td></tr>
					<tr><td>zurgaa2</td><td>{{ $sazutailanmayagt['zurgaa2'] }}</td></tr>
					<tr><td>zurgaa3</td><td>{{ $sazutailanmayagt['zurgaa3'] }}</td></tr>
					<tr><td>zurgaa4</td><td>{{ $sazutailanmayagt['zurgaa4'] }}</td></tr>
					<tr><td>zurgaa5</td><td>{{ $sazutailanmayagt['zurgaa5'] }}</td></tr>
					<tr><td>zurgaa6</td><td>{{ $sazutailanmayagt['zurgaa6'] }}</td></tr>
					<tr><td>zurgaa7</td><td>{{ $sazutailanmayagt['zurgaa7'] }}</td></tr>
					<tr><td>zurgaa7</td><td>{{ $sazutailanmayagt['zurgaa7'] }}</td></tr>
					<tr><td>doloo</td><td>{{ $sazutailanmayagt['doloo'] }}</td></tr>
					<tr><td>doloo1</td><td>{{ $sazutailanmayagt['doloo1'] }}</td></tr>
					<tr><td>doloo2</td><td>{{ $sazutailanmayagt['doloo2'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop