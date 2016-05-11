@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit User
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Edit user</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Админ
            </a>
        </li>
        <li>Хэрэглэгчид</li>
        <li class="active">Хэрэглэгч засах</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="users" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        {!! $user->first_name!!} {!! $user->last_name!!}-ийн мэдээллийг засах
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">

                    <!-- errors -->
                    <div class="has-error">
                        {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('group', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('pic', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('dob', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('bio', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('state', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('postal', '<span class="help-block">:message</span>') !!}
                        {!! $errors->first('groups', '<span class="help-block">:message</span>') !!}


                    </div>

                    <!--main content-->
                    <div class="row">

                        <div class="col-md-12">
                            <form id="commentForm" action="{{ route('admin.users.update', $user) }}"
                                  method="POST" id="wizard-validation" enctype="multipart/form-data" class="form-horizontal">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_method" value="PATCH"/>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="first_name" class="col-md-3 control-label">Хэрэглэгчийн нэр *</label>
                                            <div class="col-md-9">
                                                <input id="first_name" name="first_name" type="text"
                                                       placeholder="Хэрэглэгчийн нэр" class="form-control required"
                                                       value="{!! old('first_name', $user->first_name) !!}"/>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="last_name" class="col-md-3 control-label">Овог *</label>
                                            <div class="col-md-9">
                                                <input id="last_name" name="last_name" type="text" placeholder="Овог"
                                                       class="form-control required" value="{!! old('last_name', $user->last_name) !!}"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-md-3 control-label">И-мэйл *</label>
                                            <div class="col-md-9">
                                                <input id="email" name="email" placeholder="И-мэйл" type="text"
                                                       class="form-control required email" value="{!! old('email', $user->email) !!}"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-md-3 control-label">Нууц үг *</label>
                                            <div class="col-md-9">
                                                <input id="password" name="password" type="password" placeholder="Нууц үг"
                                                       class="form-control required" value="{!! old('password') !!}"/>
                                            </div>
                                        </div>


                                        
                                                            
                                        <div class="form-group">
                                            <label for="password_confirm" class="col-md-3 control-label">Нууц үг баталгаажилт *</label>
                                            <div class="col-md-9">
                                                <input id="password_confirm" name="password_confirm" type="password"
                                                       placeholder="Нууц үг баталгаажилт" class="form-control required"
                                                       value="{!! old('password_confirm') !!}"/>
                                            </div>
                                        </div>

                                         <div class="form-group {{ $errors->first('gender', 'has-error') }}">
                                                            <label for="email" class="col-md-3 control-label">Хүйс</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" title="Select Gender..." name="gender">
                                                                    <option value="">Сонгох</option>
                                                                    <option value="male" @if($user->gender === 'Эрэгтэй') selected="selected" @endif >Эрэгтэй</option>
                                                        <option value="female" @if($user->gender === 'Эмэгтэй') selected="selected" @endif >Эмэгтэй</option>
                                                                   
                                                                </select>
                                                            </div>
                                                            <span class="help-block">{{ $errors->first('gender', ':message') }}</span>
                                                        </div>

                                        <div class="form-group required">
                                            <label for="dob" class="col-md-3 control-label">Төрсөн огноо</label>
                                            <div class="col-md-9">
                                                <input id="dob" name="dob" type="text" class="form-control"
                                                       data-mask="9999-99-99" value="{!! old('dob', $user->dob) !!}"
                                                       placeholder="yyyy-mm-dd"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                        </div>
                                                            

                                                    </div>
                                                    <div class="col-md-6">
                                                      
                                        
                                                       <div class="form-group">
                                                <label for="pic" class="col-md-3 control-label">Профайл зураг</label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                            @if($user->pic)
                                                                <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="profile pic">
                                                            @else
                                                                <img src="http://placehold.it/200x200" alt="profile pic">
                                                            @endif
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                        <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Зураг сонгох</span>
                                                        <span class="fileinput-exists">Солих</span>
                                                        <input id="pic" name="pic_file" type="file"
                                                               class="form-control"/>
                                                    </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Устгах</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                       

                                                        <div class="form-group required">
                                                            <label for="group" class="col-md-3 control-label">Бүлэг *</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control required" title="Select group..." name="group"
                                                                        id="group">
                                                                    <option value="">Сонгох</option>
                                                                    @foreach($roles as $role)
                                                            <option value="{!! $role->id !!}" {{ (array_key_exists($role->id, $userRoles) ? ' selected="selected"' : '') }}>{{ $role->name }}</option>
                                                        @endforeach
                                                                </select>
                                                            </div>
                                                            <span class="help-block">{{ $errors->first('group', ':message') }}</span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="activate" class="col-md-3 control-label">Хэрэглэгч идэвхжүүлэх</label>
                                                            <div class="col-md-9">
                                                               <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30" value="1" @if($status) checked="checked" @endif  >
                                                            <span>dfgdfgdfgdf</span></div>
                                                        </div>

                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <input type="submit" class="btn btn-primary" value="Хэрэглэгч нэмэх">
                                                            <input type="reset" class="btn btn-default" value="Болих"></div>
                                                    </div>
                                                </div>

                              
                            </form>
                        </div>
                    </div>
                    <!--main content end--> 
                </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/edituser.js') }}"></script>
@stop