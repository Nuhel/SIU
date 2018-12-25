@extends('dashboard/dash_inc.adjust')
@push('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@section('content')
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom text-center">Add Teacher</h2>
            </div>
        </header>


        <section class="notice_form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="width:80%;margin:0 auto;">
                            <div class="card-body">
                                <div class="form-inner">
                                    {!! Form::open(['route' => 'store.teacher','files' => true])!!}

                                    <div class="form-group row">
                                        {!! Form::label('image', "Image",['class'=>'col-sm-3 form-control-label','files' => true] ) !!}
                                        <div class="col-sm-9">
                                            {!! Form::file('image', null, ['class' => 'form-control form-control-success','placeholder' => "Description",'min' => '0','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('image'))
                                                    <small class="form-text-error">  {{$errors->first('image')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {!! Form::label('name', "Name",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::text('name', null, ['class' => 'form-control form-control-success','placeholder' => "Name",'min' => '0','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('name'))
                                                    <small class="form-text-error">  {{$errors->first('name')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {!! Form::label('phone', "Phone No",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::number('phone', null, ['class' => 'form-control form-control-success','placeholder' => "Phone Number",'min' => '0','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('phone'))
                                                    <small class="form-text-error">  {{$errors->first('phone')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {!! Form::label('email', "Email-Address",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::email('email', null, ['class' => 'form-control form-control-success','placeholder' => "Email-Address",'min' => '0','required' => '1', 'rows' => 4, 'cols' => 54]) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('email'))
                                                    <small class="form-text-error">  {{$errors->first('email')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('designation', "Designation",['class'=>'col-sm-3 form-control-label']) !!}

                                        <div class="col-sm-9">
                                            {!! Form::text('designation', null, ['class' => 'form-control form-control-success','placeholder' => "Designation",'required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('designation'))

                                                    <small class="form-text-error">  {{$errors->first('designation')}}</small>

                                                @endif
                                            @endif

                                        </div>
                                    </div>

                                  
                                       <div class="form-group  row">
                                         {!! Form::label('facebook', "Facebook Profile",['class'=>'col-sm-3 form-control-label']) !!}
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">https://www.fb.com/</span></div>
                                            {!! Form::text('facebook', null, ['class' => 'form-control form-control-success','placeholder' => "username",'required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('facebook'))

                                                    <small class="form-text-error">  {{$errors->first('facebook')}}</small>

                                                @endif
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        {!! Form::label('linkedin', "Linkedin Profile",['class'=>'col-sm-3 form-control-label']) !!}
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">https://www.linkedin.com/in/</span></div>
                                                    {!! Form::text('linkedin', null, ['class' => 'form-control form-control-success','placeholder' => "username",'required' => '1']) !!}
                                                    @if(count($errors)>0)
                                                    @if($errors->has('linkedin'))

                                                    <small class="form-text-error">  {{$errors->first('linkedin')}}</small>

                                                @endif
                                            @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('department', "Department",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::select('department', ['CSE' => 'CSE', 'ECE' => 'ECE','EEE' => 'EEE', 'CSI' => 'CSI','LLB' => 'LLB', 'English' => 'English', 'BBA' => 'BBA'], null, ['placeholder' => 'Select Department','class' => 'form-control','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('department'))
                                                    <small class="form-text-error">  {{$errors->first('department')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        {!! Form::label('', "",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::submit('Submit',['class'=>'btn btn-success']) !!}
                                        </div>
                                    </div>


                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection


@push('custom-scripts')
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
                $( function() {
                    $( "#notice_date" ).datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                } );
                $( document ).ready(function() {
                    $('input').attr('autocomplete','off');
                });
            </script>

@endpush

