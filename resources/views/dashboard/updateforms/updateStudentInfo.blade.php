
     @extends('dashboard/dash_inc.adjust')
         @push('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
     @section('content')

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Student Information</h2>
            </div>
          </header>
          <br>
          <div class="row">
          <div class="col-md-6 col-sm-12">
         <img src="/storage/uploaded/students/{{$data->picture}}"class="img-thumbnail" style="height: 200px;width: 200px;display: block;margin-left: auto;margin-right: auto;">
          </div>
          <div class="col-md-6 col-sm-12" style="margin-top: 30px">
               <div class="row">
                    <div class="col-md-2 col-sm-6">
                         <P>Name</P>
                    </div>
                    <div class="col-md-10 col-sm-6">
                    <P>{{$data->student_name}}</P>
                    </div>
                    <div class="col-md-2 col-sm-6">
                         <P>Roll No.</P>
                    </div>
                    <div class="col-md-10 col-sm-6">
                    <P>{{$data->roll_number}}</P>
                    </div>
                    <div class="col-md-2 col-sm-6">
                         <P>Reg No.</P>
                    </div>
                    <div class="col-md-10 col-sm-6">
                    <P>{{$data->registration_number}}</P>
                    </div>
                    <div class="col-md-2 col-sm-6">
                         <P>Discipline</P>
                    </div>
                    <div class="col-md-10 col-sm-6">
                    <P>{{$data->discipline}}</P>
                    </div>
               </div>
          </div>
          </div>
         <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
                  
              <div class="row">

                

                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Basic Informations</h3>
                    </div>
                    <div class="card-body">
                      {!! Form::open(['files' => 'true','method' => 'POST','action' => 'StudentInfoController@update','class' => 'form-horizontal']) !!}

                         <div class="form-group row">

                           {!! Form::label('picture', "New Picture",['class'=>'col-sm-3 form-control-label']) !!}
                
                          <div class="col-sm-9">
                               {{ Form::hidden('old_picture',$data->picture) }}
                              {{ Form::hidden('id',$id) }}
                            {{Form::file('picture',['class'=>'form-control-file'])}}

                             @if(count($errors)>0)
                                 @if($errors->has('picture'))
                                    
                                   <small class="form-text-error">  {{$errors->first('picture')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('student_name', "Applicant's Name",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                            {!! Form::text('student_name', $data->student_name, ['class' => 'form-control form-control-success','placeholder' => "Applicant's Name",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('student_name'))
                                    
                                   <small class="form-text-error">  {{$errors->first('student_name')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('fathers_name', "Father's Name",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                            {!! Form::text('fathers_name', $data->fathers_name, ['class' => 'form-control form-control-success','placeholder' => "Father's Name",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('fathers_name'))
                                    
                                   <small class="form-text-error">  {{$errors->first('fathers_name')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                        {!! Form::label('mothers_name', "Mother's Name",['class'=>'col-sm-3 form-control-label']) !!}
                
                          <div class="col-sm-9">
                             {!! Form::text('mothers_name', $data->mothers_name, ['class' => 'form-control form-control-success','placeholder' => "Mother's Name",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('mothers_name'))
                                    
                                   <small class="form-text-error">  {{$errors->first('mothers_name')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('dob', "Date Of Birth",['class'=>'col-sm-3 form-control-label']) !!}
                          <div class="col-sm-9">
                             {!! Form::text('dob', $data->dob, ['autocomplete' => 'false','class' => 'form-control form-control-success','placeholder' => "MM/DD/YY",'required' => '1']) !!}
                           
                             @if(count($errors)>0)
                                 @if($errors->has('dob'))
                                    
                                   <small class="form-text-error">  {{$errors->first('dob')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                      </div>
                       <span style="margin-bottom: 5px;"></span>
                  </div>
                 
                </div>



                <div class="col-lg-6">
                  <div class="card">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Academic Informations</h3>
                    </div>
                    <div class="card-body">
                     
                        <div class="form-group row">
                           {!! Form::label('registration_number', "Registration No.",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                             {!! Form::number('registration_number', $data->registration_number, ['class' => 'form-control form-control-success','placeholder' => "Registration No",'min' => '0','required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('registration_number'))
                                    
                                   <small class="form-text-error">  {{$errors->first('registration_number')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('academic_year', "Academic Year",['class'=>'col-sm-3 form-control-label']) !!}
                   
                          <div class="col-sm-9">
                             {!! Form::text('academic_year', $data->academic_year, ['class' => 'form-control form-control-success','placeholder' => "Academic Year",'required' => '1']) !!}
                             @if(count($errors)>0)
                                 @if($errors->has('academic_year'))
                                    
                                   <small class="form-text-error">  {{$errors->first('academic_year')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('discipline', "Discipline",['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                             {!! Form::select('discipline', array('Select' => 'Select','CSE' => 'CSE','ECE' => 'ECE','EEE' => 'EEE','BBA' => 'BBA','LLB' => 'LLB','ENG' => 'ENG'), $data->discipline, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}
                            @if(count($errors)>0)
                                 @if($errors->has('discipline'))
                                    
                                   <small class="form-text-error">  {{$errors->first('discipline')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('roll_number', "Roll No.",['class'=>'col-sm-3 form-control-label']) !!}

                          <div class="col-sm-9">

                            {!! Form::number('roll_number', $data->roll_number, ['class' => 'form-control form-control-success','placeholder' => "Roll No",'min' => '0','required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('roll_number'))
                                    
                                   <small class="form-text-error">  {{$errors->first('roll_number')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('doa', "Date Of Admission",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                             {!! Form::text('doa', $data->doa, ['autocomplete' => 'false','class' => 'form-control form-control-success','placeholder' => "MM/DD/YY",'required' => '1']) !!}
                             
                             @if(count($errors)>0)
                                 @if($errors->has('doa'))
                                    
                                   <small class="form-text-error">  {{$errors->first('doa')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('isActive', "Student Status",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                              {!! Form::select('isActive', array('Active' => 'Active','InActive' => 'InActive'), $data->isActive, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}
                             @if(count($errors)>0)
                                 @if($errors->has('isActive'))
                                    
                                   <small class="form-text-error">  {{$errors->first('isActive')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>



                    </div>
                  </div>
                </div>



                                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Contact Informations</h3>
                    </div>
                    <div class="card-body">
                     


                        <div class="form-group row">
                           {!! Form::label('emargency_contact_address', 'Emergency Contact Address',['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                             {!! Form::text('emargency_contact_address', $data->emargency_contact_address, ['class' => 'form-control form-control-success','placeholder' => "Emergency Contact Address",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('emargency_contact_address'))
                                    
                                   <small class="form-text-error">  {{$errors->first('emargency_contact_address')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('emargency_contact_number', 'Phone No.',['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::number('emargency_contact_number', $data->emargency_contact_number, ['class' => 'form-control form-control-success','placeholder' => "Emergency Phone No",'min' => '0','required' => '1']) !!}
                             @if(count($errors)>0)
                                 @if($errors->has('emargency_contact_number'))
                                    
                                   <small class="form-text-error">{{$errors->first('emargency_contact_number')}}</small>
    
                                 @endif
                             @endif
                            
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('permanent_address', 'Permanent Address',['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::text('permanent_address', $data->permanent_address, ['class' => 'form-control form-control-success','placeholder' => "Permanent Address",'required' => '1']) !!}
                           @if(count($errors)>0)
                                 @if($errors->has('permanent_address'))
                                    
                                   <small class="form-text-error">{{$errors->first('permanent_address')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('permanent_address_number', 'Phone No.',['class'=>'col-sm-3 form-control-label']) !!}
                          
                          <div class="col-sm-9">
                             {!! Form::number('permanent_address_number', $data->permanent_address_number, ['class' => 'form-control form-control-success','placeholder' => "Permanent Phone No",'min' => '0','required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('permanent_address_number'))
                                    
                                   <small class="form-text-error">{{$errors->first('permanent_address_number')}}</small>
    
                                 @endif
                             @endif
                             
                          </div>
                        </div>

                        <div class="form-group row">
                          {!! Form::label('mailing_address', 'Mailing Address',['class'=>'col-sm-3 form-control-label']) !!}
                    
                          <div class="col-sm-9">
                            {!! Form::text('mailing_address', $data->mailing_address, ['class' => 'form-control form-control-success','placeholder' => "Mailing Address",'required' => '1']) !!}
                            @if(count($errors)>0)
                                 @if($errors->has('mailing_address'))
                                    
                                   <small class="form-text-error">{{$errors->first('mailing_address')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>

                        <div class="form-group row">
                           {!! Form::label('mailing_address_number', 'Phone No.',['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                             {!! Form::number('mailing_address_number', $data->mailing_address_number, ['class' => 'form-control form-control-success','placeholder' => "Mailing Address Phone No",'min' => '0','required' => '1']) !!}
                              @if(count($errors)>0)
                                 @if($errors->has('mailing_address_number'))
                                    
                                   <small class="form-text-error">{{$errors->first('mailing_address_number')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>

                        <br>
                        <br>
                        <br>

                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="col-lg-12 side_form">
                      <div class="card">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Legal Guardian (if applicable)</h3>
                    </div>
                    <div class="card-body">
                     
                        <div class="form-group row">
                           {!! Form::label('legal_guardian_name', "Guardian's Name",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::text('legal_guardian_name', $data->legal_guardian_name, ['class' => 'form-control form-control-success','placeholder' => "Guardian's Name"]) !!}
                           @if(count($errors)>0)
                                 @if($errors->has('legal_guardian_name'))
                                    
                                   <small class="form-text-error">{{$errors->first('legal_guardian_name')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          {!! Form::label('legal_guardian_address', "Guardian's Address",['class'=>'col-sm-3 form-control-label']) !!}
                          <div class="col-sm-9">
                             {!! Form::text('legal_guardian_address', $data->legal_guardian_address, ['class' => 'form-control form-control-success','placeholder' => "Guardian's Address"]) !!}
    
                            @if(count($errors)>0)
                                 @if($errors->has('legal_guardian_address'))
                                    
                                   <small class="form-text-error">{{$errors->first('legal_guardian_address')}}</small>
    
                                 @endif
                             @endif
                          </div>
                        </div>
                        <div class="form-group row">
                           {!! Form::label('legal_guardian_phone_number', "Guardian's Phone No.",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                              {!! Form::number('legal_guardian_phone_number', $data->legal_guardian_phone_number, ['class' => 'form-control form-control-success','placeholder' => "Guardian's Phone No",'min' => '0']) !!}
                            
                            @if(count($errors)>0)
                                 @if($errors->has('legal_guardian_phone_number'))
                                    
                                   <small class="form-text-error">{{$errors->first('legal_guardian_phone_number')}}</small>
    
                                 @endif
                             @endif
                          </div>
                        </div>
                    </div>
                  </div>
                   <div class="col-lg-12 side_form">
                      <div class="card">
    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Student's Email Information</h3>
                    </div>
                    <div class="card-body">
                     
                        <div class="form-group row">
                           {!! Form::label('personal_email', "Personal Email",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::email('personal_email', $data->personal_email, ['class' => 'form-control form-control-success','placeholder' => "Student's Personal Email",'required' => '1']) !!}
                           @if(count($errors)>0)
                                 @if($errors->has('personal_email'))
                                    
                                   <small class="form-text-error">{{$errors->first('personal_email')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>

                     <div class="form-group row">
                           {!! Form::label('authorized_email', "Academic Email",['class'=>'col-sm-3 form-control-label']) !!}
                         
                          <div class="col-sm-9">
                            {!! Form::email('authorized_email', $data->authorized_email, ['class' => 'form-control form-control-success','placeholder' => "Academic Email",'required' => '1']) !!}
                            <small>The registration number will be used as password</small>
                           @if(count($errors)>0)
                                 @if($errors->has('authorized_email'))
                                    
                                   <small class="form-text-error">{{$errors->first('authorized_email')}}</small>
    
                                 @endif
                             @endif
                           
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
                </div>
                </div>

           

                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                            
                          <div class="pull-right">
                             {{ Form::button('Save Details <i class="fa fa-check"></i></span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-labeled'])  }}

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
                    $( "#dob" ).datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                } );
                $( function() {
                $( "#doa" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            } );
                $( document ).ready(function() {
                    $('input').attr('autocomplete','off');
                });
            </script>

@endpush