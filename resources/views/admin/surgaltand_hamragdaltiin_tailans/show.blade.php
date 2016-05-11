@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
surgaltand_hamragdaltiin_tailan
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
        <li class="active">surgaltand_hamragdaltiin_tailans</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    surgaltand_hamragdaltiin_tailan {{ $surgaltand_hamragdaltiin_tailan->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $surgaltand_hamragdaltiin_tailan->id }}</td></tr>
                     <tr><td>ih_emch_mdeeshuuleh_uildwerlel</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshuuleh_uildwerlel'] }}</td></tr>
					<tr><td>ih_emch_molgoh_uildwerlel</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_uildwerlel'] }}</td></tr>
					<tr><td>tusgai_mdeeshluuleh_uildwerlel</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshluuleh_uildwerlel'] }}</td></tr>
					<tr><td>tusgai_molgoh_uildwerlel</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_uildwerlel'] }}</td></tr>
					<tr><td>ih_emch_mdeeshuuleh_emnelzui</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshuuleh_emnelzui'] }}</td></tr>
					<tr><td>ih_emch_molgoh_emnelzui</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_emnelzui'] }}</td></tr>
					<tr><td>tusgai_mdeeshuuleh_emnelzui</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshuuleh_emnelzui'] }}</td></tr>
					<tr><td>tusgai_molgoh_emnelzui</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_emnelzui'] }}</td></tr>
					<tr><td>ih_emch_mdeeshuuleh_immune</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshuuleh_immune'] }}</td></tr>
					<tr><td>ih_emch_molgoh_immune</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_immune'] }}</td></tr>
					<tr><td>tusgai_mdeeshuuleh_immune</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshuuleh_immune'] }}</td></tr>
					<tr><td>tusgai_molgoh_immune</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_immune'] }}</td></tr>
					<tr><td>ih_emch_mdeeshluuleh_virus</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshluuleh_virus'] }}</td></tr>
					<tr><td>ih_emch_molgoh_virus</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_virus'] }}</td></tr>
					<tr><td>tusgai_mdeeshluuleh_virus</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshluuleh_virus'] }}</td></tr>
					<tr><td>tusgai_molgoh_virus</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_virus'] }}</td></tr>
					<tr><td>ih_emch_mdeeshluuleh_chanar</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshluuleh_chanar'] }}</td></tr>
					<tr><td>ih_emch_molgoh_chanar</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_chanar'] }}</td></tr>
					<tr><td>tusgai_mdeeshluuleh_chanar</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshluuleh_chanar'] }}</td></tr>
					<tr><td>tusgai_molgoh_chanar</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_chanar'] }}</td></tr>
					<tr><td>ih_emch_mdeeshluuleh_tstsb_hereglee</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_mdeeshluuleh_tstsb_hereglee'] }}</td></tr>
					<tr><td>ih_emch_molgoh_tstsb_hereglee</td><td>{{ $surgaltand_hamragdaltiin_tailan['ih_emch_molgoh_tstsb_hereglee'] }}</td></tr>
					<tr><td>tusgai_mdeeshluuleh_tstsb_hereglee</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_mdeeshluuleh_tstsb_hereglee'] }}</td></tr>
					<tr><td>tusgai_molgoh_tstsb_hereglee</td><td>{{ $surgaltand_hamragdaltiin_tailan['tusgai_molgoh_tstsb_hereglee'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop