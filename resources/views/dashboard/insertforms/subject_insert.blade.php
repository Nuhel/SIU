
     @extends('dashboard/dash_inc.adjust')
     @section('content')

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add New Subject</h2>
            </div>
          </header>
         
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">

                

                <!-- Horizontal Form-->
                <div class="col-lg-12">
                  <div class="card "style="width:80%;margin:0 auto;">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Subject and semester combination with credit</h3>
                    </div>
                    <div class="card-body">
                      {!! Form::open(['method' => 'POST','action' => 'SubjectController@store','class' => 'form-horizontal']) !!}
                        <div class="form-group row">
                          {!! Form::label('course_title', "Course Title",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                            {!! Form::text('course_title', null, ['class' => 'form-control form-control-success','placeholder' => "Course Title",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('course_title'))
                                    
                                   <small class="form-text-error">  {{$errors->first('course_title')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                      <div class="form-group row">
                          {!! Form::label('course_code', "Course Code",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                            {!! Form::text('course_code', null, ['class' => 'form-control form-control-success','placeholder' => "Course Code",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('course_code'))
                                    
                                   <small class="form-text-error">  {{$errors->first('course_code')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('course_credit', "Course Credit",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::select('course_credit', array('' => 'Select','1.0' => '1.0','1.5' => '1.5','2.0' => '2.0','2.5' => '2.5','3.0' => '3.0','3.5' => '3.5','4.0' => '4.0'), null, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}
                            @if(count($errors)>0)
                                 @if($errors->has('course_credit'))
                                    
                                   <small class="form-text-error">  {{$errors->first('course_credit')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('discipline', "Discipline",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                             {!! Form::select('discipline', array('' => 'Select','CSE' => 'CSE','ECE' => 'ECE','EEE' => 'EEE','BBA' => 'BBA','LLB' => 'LLB','ENG' => 'ENG'), null, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}
                            @if(count($errors)>0)
                                 @if($errors->has('discipline'))
                                    
                                   <small class="form-text-error">  {{$errors->first('discipline')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('semester', "Semester",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                             {!! Form::select('semester', array('' => 'Select','1-1' => '1-1','1-2' => '1-2','2-1' => '2-1','2-2' => '2-2','3-1' => '3-1','3-2' => '3-2','4-1' => '4-1','4-2' => '4-2'), null, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}
                            @if(count($errors)>0)
                                 @if($errors->has('semester'))
                                    
                                   <small class="form-text-error">  {{$errors->first('semester')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>


                      </div>
                       <span style="margin-bottom: 5px;"></span>
                  </div>
                 
                </div>

           

                <div class="col-lg-12">
                  <div class="card" style="width:80%;margin:0 auto;">
                    <div class="card-body">
                            
                          <div class="pull-right">
                             {{ Form::button('Save Details <i class="fa fa-check"></i></span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-labeled'])  }}

                        </div>

                    </div>
                  </div>
                </div>
                {!! Form::close() !!} 
              </div>
            </div>
          </section>


          


    @endsection