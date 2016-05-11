@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Хэрэглэгчийн мэдээлэл
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/user_account.css') }}">

@stop

{{-- Page content --}}
@section('content')
    <div class="container">
        <div class="welcome">
            <h3>Миний аккаунт</h3>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <!--main content-->
                    <div class="position-center">
                        <!-- Notifications -->
                        @include('notifications')

                        <div>
                            <h3 class="text-primary">Хувийн мэдээлэл</h3>
                        </div>
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data"
                              action="{{ route('my-account') }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Зураг:</label>
                                <div class="col-md-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
                                            @if($user->pic)
                                                <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                                                     class="img-responsive"/>
                                            @else
                                                <img src="http://placehold.it/200x150" alt="..."
                                                     class="img-responsive"/>
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Зураг сонгох</span>
                                                                <span class="fileinput-exists">Солих</span>
                                                                <input type="file" name="pic" id="pic" />
                                                            </span>
                                            <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Устгах</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Нэр:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw fa-user-md text-primary"></i>
                                    </span>
                                        <input type="text" placeholder=" " name="first_name" id="u-name"
                                               class="form-control" value="{!! old('first_name',$user->first_name) !!}">
                                    </div>
                                    <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Овог:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                            </span>
                                        <input type="text" placeholder=" " name="last_name" id="u-name"
                                               class="form-control"
                                               value="{!! old('last_name',$user->last_name) !!}"></div>
                                    <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    И-мэйл хаяг:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-envelope text-primary"></i>
                                                                </span>
                                        <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                               value="{!! old('email',$user->email) !!}"></div>
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                <p class="text-warning col-md-offset-2"><strong>Хэрвээ та нууц үгээ солихгүй бол... хоосон орхино уу</strong></p>
                                <label class="col-lg-2 control-label">
                                    Нууц үг:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                        <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Нууц үгээ баталгаажуулах:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                        <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                    <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Хүйс: </label>
                                <div class="col-lg-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />
                                            Эрэгтэй
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />
                                            Эмэгтэй
                                        </label>
                                    </div>
                                  
                                </div>
                            </div>

                            <div>
                                <h3 class="text-primary">Холбоо барих: </h3>
                            </div>

                            <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Хаяг:
                                </label>
                                <div class="col-lg-6">
                                            <textarea rows="5" cols="30" class="form-control" id="add1"
                                                      name="address">{!! old('address',$user->address) !!}</textarea>
                                </div>
                                <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                            </div>

                            <div class="form-group {{ $errors->first('province', 'has-error') }}">
                                <label class="control-label  col-md-2">Аймаг / Хот: </label>
                                <div class="col-md-6">
                                    {!! Form::select('province', $provinces, $user->province,['class' => 'form-control select2', 'id' => 'provinces']) !!}
                                    <span class="help-block">{{ $errors->first('province', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('state', 'has-error') }}">
                                <label class="col-lg-2 control-label" for="state">Улс:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="state" class="form-control" name="state"
                                               value="{!! old('state',$user->state) !!}"/>
                                    </div>
                                </div>
                                <span class="help-block">{{ $errors->first('state', ':message') }}</span>
                            </div>

                            <div class="form-group {{ $errors->first('city', 'has-error') }}">
                                <label class="col-lg-2 control-label" for="city">Хот:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="city" class="form-control" name="city"
                                               value="{!! old('city',$user->city) !!}"/>
                                    </div>
                                </div>
                                <span class="help-block">{{ $errors->first('city', ':message') }}</span>
                            </div>

                            <div class="form-group {{ $errors->first('postal', 'has-error') }}">
                                <label class="col-lg-2 control-label" for="postal">Шуудангийн хайрцаг:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="postal" class="form-control"
                                               name="postal" value="{!! old('postal',$user->postal) !!}"/>
                                    </div>
                                    <span class="help-block">{{ $errors->first('postal', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Төрсөн огноо:
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar text-primary"></i>
                                            </span>
                                        {!!  Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD','readonly'=>'readonly'))  !!}
                                    </div>
                                    <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Хадгалах</button>
                                </div>
                            </div>

                        </form>{{--{!!  Form::close()  !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/user_account.js') }}"></script>
@stop
