@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Хэрэглэгчийн дэлгэрэнгүй мэдээлэл
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/x-editable/bootstrap-editable.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>Хэрэглэгчийн профайл</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Админ хуудас
                </a>
            </li>
            <li>
                <a href="#">Хэрэглэгч</a>
            </li>
            <li class="active">Профайл</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                           Хэрэглэгчийн мэдээлэл</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Нууц үг солих</a>
                    </li>
                 
                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            Хэрэглэгчийн мэдээлэл
                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                @if($user->pic)
                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="profile pic" class="img-max">
                                                @else
                                                    <img src="http://placehold.it/200x200" alt="profile pic">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td>@lang('users/title.first_name')</td>
                                                            <td>
                                                                {{ $user->first_name }}
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.last_name')</td>
                                                            <td>
                                                                {{ $user->last_name }}
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.email')</td>
                                                            <td>
                                                                {{ $user->email }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                @lang('users/title.gender')
                                                            </td>
                                                            <td>
                                                                {{ $user->gender }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.dob')</td>
                                                            <td>
                                                                {{ $user->dob }}
                                                            </td>
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>@lang('users/title.status')</td>
                                                            <td>

                                                                @if($user->deleted_at)
                                                                    Устгагдсан
                                                                @elseif($activation = Activation::completed($user))
                                                                    Идэвхтэй
                                                                @else
                                                                    Хүлээгдэж буй
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>@lang('users/title.created_at')</td>
                                                            <td>
                                                                {!! $user->created_at->diffForHumans() !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-3 control-label">
                                                Нууц үг
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password" placeholder="Нууц үг"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                Нууц үг баталгаажилт
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Нууц үг давтах"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary" id="change-password">Нууц үг солих
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Болих</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Цэвэрлэх"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- Bootstrap WYSIHTML5 -->
<script  src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                var sendData = '_token={{ Session::getToken() }}' + '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                if ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }
                if (check) {
                    $.ajax({
                        url: 'passwordreset',
                        type: "post",
                        data: sendData,
                        success: function (data) {
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                } else {
                    alert('password and password confirm does not match');
                }
            });
        });
    </script>
@stop