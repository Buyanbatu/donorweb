@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
hun_huchnii_tailan
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
        <li class="active">hun_huchnii_tailans</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    hun_huchnii_tailan {{ $hun_huchnii_tailan->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $hun_huchnii_tailan->id }}</td></tr>
                     <tr><td>ih_emch_bugd</td><td>{{ $hun_huchnii_tailan['ih_emch_bugd'] }}</td></tr>
					<tr><td>ih_emch_orontoo</td><td>{{ $hun_huchnii_tailan['ih_emch_orontoo'] }}</td></tr>
					<tr><td>baga_emch_bugd</td><td>{{ $hun_huchnii_tailan['baga_emch_bugd'] }}</td></tr>
					<tr><td>baga_emch_orontoo</td><td>{{ $hun_huchnii_tailan['baga_emch_orontoo'] }}</td></tr>
					<tr><td>suvilagch_bugd</td><td>{{ $hun_huchnii_tailan['suvilagch_bugd'] }}</td></tr>
					<tr><td>suvilagch_orontoo</td><td>{{ $hun_huchnii_tailan['suvilagch_orontoo'] }}</td></tr>
					<tr><td>laborant_bugd</td><td>{{ $hun_huchnii_tailan['laborant_bugd'] }}</td></tr>
					<tr><td>laborant_orontoo</td><td>{{ $hun_huchnii_tailan['laborant_orontoo'] }}</td></tr>
					<tr><td>ariutgagch_bugd</td><td>{{ $hun_huchnii_tailan['ariutgagch_bugd'] }}</td></tr>
					<tr><td>ariutgagch_orontoo</td><td>{{ $hun_huchnii_tailan['ariutgagch_orontoo'] }}</td></tr>
					<tr><td>uilchlegch_bugd</td><td>{{ $hun_huchnii_tailan['uilchlegch_bugd'] }}</td></tr>
					<tr><td>uilchlegch_orontoo</td><td>{{ $hun_huchnii_tailan['uilchlegch_orontoo'] }}</td></tr>
					<tr><td>busad_mergejilten_bugd</td><td>{{ $hun_huchnii_tailan['busad_mergejilten_bugd'] }}</td></tr>
					<tr><td>busad_mergejilten_orontoo</td><td>{{ $hun_huchnii_tailan['busad_mergejilten_orontoo'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop