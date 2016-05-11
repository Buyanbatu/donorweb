@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
tsusanbuteegdehuuntailan
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
        <li class="active">tsusanbuteegdehuuntailans</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    tsusanbuteegdehuuntailan {{ $tsusanbuteegdehuuntailan->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $tsusanbuteegdehuuntailan->id }}</td></tr>
                     <tr><td>talbar1</td><td>{{ $tsusanbuteegdehuuntailan['talbar1'] }}</td></tr>
					<tr><td>talbar2</td><td>{{ $tsusanbuteegdehuuntailan['talbar2'] }}</td></tr>
					<tr><td>talbar3</td><td>{{ $tsusanbuteegdehuuntailan['talbar3'] }}</td></tr>
					<tr><td>talbar4</td><td>{{ $tsusanbuteegdehuuntailan['talbar4'] }}</td></tr>
					<tr><td>talbar5</td><td>{{ $tsusanbuteegdehuuntailan['talbar5'] }}</td></tr>
					<tr><td>talbar6</td><td>{{ $tsusanbuteegdehuuntailan['talbar6'] }}</td></tr>
					<tr><td>talbar7</td><td>{{ $tsusanbuteegdehuuntailan['talbar7'] }}</td></tr>
					<tr><td>talbar8</td><td>{{ $tsusanbuteegdehuuntailan['talbar8'] }}</td></tr>
					<tr><td>talbar9</td><td>{{ $tsusanbuteegdehuuntailan['talbar9'] }}</td></tr>
					<tr><td>talbar10</td><td>{{ $tsusanbuteegdehuuntailan['talbar10'] }}</td></tr>
					<tr><td>talbar11</td><td>{{ $tsusanbuteegdehuuntailan['talbar11'] }}</td></tr>
					<tr><td>talbar12</td><td>{{ $tsusanbuteegdehuuntailan['talbar12'] }}</td></tr>
					<tr><td>talbar13</td><td>{{ $tsusanbuteegdehuuntailan['talbar13'] }}</td></tr>
					<tr><td>talbar14</td><td>{{ $tsusanbuteegdehuuntailan['talbar14'] }}</td></tr>
					<tr><td>talbar15</td><td>{{ $tsusanbuteegdehuuntailan['talbar15'] }}</td></tr>
					<tr><td>talbar16</td><td>{{ $tsusanbuteegdehuuntailan['talbar16'] }}</td></tr>
					<tr><td>talbar17</td><td>{{ $tsusanbuteegdehuuntailan['talbar17'] }}</td></tr>
					<tr><td>talbar18</td><td>{{ $tsusanbuteegdehuuntailan['talbar18'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop