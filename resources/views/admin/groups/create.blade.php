@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    @lang('admin/groups/title.create')
    @parent
@stop

{{-- page level styles --}}
    @section('header_styles')
            <!--page level css -->
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
      <!--end of page level css-->

    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>

        <script>

        $(function() {

            // run on change for the selectbox
            $( "#province" ).change(function() {  
                updateDistrictDivs();
            });

            // handle the updating of the district divs
            function updateDistrictDivs() {
                // hide all form-duration-divs
                $('#district-div').hide();

                if($( "#province option:selected" ).val() == 'ulaanbaatar'){
                    $('#district-div').show();
                }                
                else
                {
                    $('#district-div').hide();
                }
            }        

            // run at load, for the currently selected div to show up
            updateDistrictDivs();

        });
        </script>
@stop

{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>
        @lang('groups/title.create')
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li>@lang('groups/title.groups')</li>
        <li class="active">
            @lang('groups/title.create')
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        @lang('groups/title.create')
                    </h4>
                </div>
                <div class="panel-body">
                    {!! $errors->first('slug', '<span class="help-block">Another role with same slug exists, please choose another name</span> ') !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="post" action=""  enctype="multipart/form-data">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                @lang('groups/form.name')
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Group Name"
                                       value="{!! old('name') !!}">
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="province" class="col-sm-2 control-label">Аймаг / Улс</label>
                            <div class="col-sm-5">
                                {!! Form::select('province', $provinces, array('class' => 'form-control','id' =>'province')) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('province', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                          <div id="district-div" class="form-group">
                            <label for="district" class="col-sm-2 control-label">Дүүрэг</label>
                            <div class="col-sm-5">
                                {!! Form::select('district', $districts, array('class' => 'form-control', 'id' => 'district')) !!}

                            </div>
                             <div class="col-sm-4">
                                {!! $errors->first('district', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="{{ route('groups') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop


{{-- page level scripts --}}
@section('footer_scripts')



@stop
