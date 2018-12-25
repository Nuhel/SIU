@extends('dashboard/dash_inc.adjust')
@push('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@section('content')
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom text-center">Edit Notice</h2>
            </div>
        </header>


        <section class="notice_form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="width:80%;margin:0 auto;">
                            <div class="card-body">
                                <div class="previous_img" style="display: table;margin: 0 auto;margin-bottom: 15px;">
                                    @if($data->image == 'no_image.jpg')
                                        <img src="/storage/siu/siu.png" alt="Image" height="200" style="border-radius: 10px;">
                                    @else
                                        <img src="/storage/uploaded/notice/{{$data->image}}" alt="Image" height="200" style="border-radius: 10px;">
                                        @endif
                                </div>
                                <div class="form-inner">

                                    {!! Form::open(['route' => ['update.notice', $data->id],'files' => true])!!}

                                    <div class="form-group row">
                                        {!! Form::label('image', 'image (If Applicable Update)',['class'=>'col-sm-3 form-control-label','files' => true] ) !!}
                                        {!! Form::hidden('old_image',$data->image) !!}
                                        <div class="col-sm-9">
                                            {!! Form::file('new_image', null, ['class' => 'form-control form-control-success','placeholder' => "Description",'min' => '0','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('image'))
                                                    <small class="form-text-error">  {{$errors->first('image')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {!! Form::label('title', "Title",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::text('title',$data->title, ['class' => 'form-control form-control-success', 'placeholder' => "Title",'min' => '0','required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('title'))
                                                    <small class="form-text-error">  {{$errors->first('title')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('description', "Description",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::textarea('description', $data->description, ['class' => 'form-control form-control-success','placeholder' => "Description",'min' => '0','required' => '1', 'rows' => 4, 'cols' => 54]) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('description'))
                                                    <small class="form-text-error">  {{$errors->first('description')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {!! Form::label('notice_date', "Date",['class'=>'col-sm-3 form-control-label','autocomplete'=>"off"]) !!}

                                        <div class="col-sm-9">
                                            {!! Form::text('notice_date',  $data->notice_date, ['autocomplete' => 'false','class' => 'form-control form-control-success','placeholder' => "MM/DD/YY",'required' => '1']) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('notice_date'))

                                                    <small class="form-text-error">  {{$errors->first('notice_date')}}</small>

                                                @endif
                                            @endif

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            {!! Form::hidden('department',Session::get('discipline')) !!}
                                            @if(count($errors)>0)
                                                @if($errors->has('department'))
                                                    <small class="form-text-error">  {{$errors->first('department')}}</small>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('is_pinned', "Is Pinned",['class'=>'col-sm-3 form-control-label']) !!}

                                        <div class="col-sm-9">
                                            {!! Form::select('is_pinned', array('0' => 'Not','1' => 'Yes'), $data->is_pinned, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','required' => '1'])!!}
                                            @if(count($errors)>0)
                                                @if($errors->has('is_pinned'))

                                                    <small class="form-text-error">  {{$errors->first('is_pinned')}}</small>

                                                @endif
                                            @endif

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        {!! Form::label('', "",['class'=>'col-sm-3 form-control-label']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
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