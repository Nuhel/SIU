
     @extends('dashboard/dash_inc.adjust')
     @section('content')

        <div class="content-inner">
           @if (session('DeclaredResult'))
                    @php
                        $result=session('DeclaredResult');
                        $countResult=count($result);
                         $serializeedResult=serialize($result);
                        
                    @endphp
            <header class="page-header">
             <div class="row">
          <div class="col-md-6">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Confirm Result</h2>
            </div>
            </div>
            <div class="col-md-6">
            <button type='button' style="margin-right: 10px;" id="ButtonRefresh" class='btn btn-primary pull-right'>Cancel</button>
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
      
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4" style="color:green">Recheck The Declared Results Carefully</h3>
                    </div>
                    <div class="col-md-12">
                       <h6 style="color:green">Session : {{$result[0]['exam_semester']}}</h6>
                       <h6 style="color:green">Semester : {{$result[0]['semester']}}</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">   
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th>Course</th>
                              <th>Title</th>
                              <th>Credit</th>
                              <th>GPA</th>
                              <th>Grade</th>
                              <th>Remarks</th>
                              <th>Type</th>
                            </tr>
                          </thead>
                          <tbody>
                            @for ($i = 0; $i < $countResult; $i++)
                                 <tr>
                                    <td>{{$result[$i]['course_code']}}</td>
                                    <td>{{$result[$i]['course_title']}}</td>
                                    <td>{{$result[$i]['credit']}}</td>
                                    <td>{{$result[$i]['gpa']}}</td>
                                    <td>{{$result[$i]['grade']}}</td>
                                    <td>{{$result[$i]['remarks']}}</td>
                                    <td>{{$result[$i]['status']}}</td>
                                  </tr>
                            @endfor
                           
                          </tbody>
                        </table>
                      </div>
                {!! Form::open(['method' => 'POST','action' => 'ResultController@AddResultConfirmed','class' => 'form-horizontal']) !!}
                {{ Form::hidden('confirmedData',$serializeedResult) }}
                <div class="col-lg-12">
                  <div class="card" style="width:80%;margin:0 auto;">
                    <div class="card-body">
                            
                          <div class="pull-right">
                             {{ Form::button('Confirm Details <i class="fa fa-check"></i></span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-labeled'])  }}

                        </div>

                    </div>
                  </div>
                </div>
                    {!! Form::close() !!}  
                    </div>
                  </div>
                </div>
              </div>


          @else
          <!-- Page Header-->
          <header class="page-header">
             <div class="row">
          <div class="col-md-6">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Custom Result</h2>
            </div>
            </div>
            <div class="col-md-6">
            <button type='button' style="margin-right: 10px;" id="ButtonRefresh" class='btn btn-primary pull-right'>Refresh</button>
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
                <div class="col-lg-12">
                  <div class="card "style="width:80%;margin:0 auto;">
    
                    <div class="card-header">
                      <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Add Result With Care</h3>
                        </div>
                        <div class="col-md-12">
                          @if(count($errors)>0)
                            @if($errors->has('exam_session'))

                            <small class="form-text-error">  {{$errors->first('exam_session')}}</small>

                            
                            @elseif($errors->has('exam_session'))

                            <small class="form-text-error">  {{$errors->first('exam_session')}}</small>

                            
                            @elseif($errors->has('exam_year'))

                            <small class="form-text-error">  {{$errors->first('exam_year')}}</small>

                            
                            @elseif($errors->has('semester'))

                            <small class="form-text-error">  {{$errors->first('semester')}}</small>
                              @elseif($errors->has('OldDataNotFound'))    

                              <small class="form-text-error">  {{$errors->first('OldDataNotFound')}}</small>
                            @else
                            <h3 class="h4 form-text-error">Be careful and fill all the fields given to you</h3>
                            @endif
                              
                          

                          @endif
                        
                        </div>
                              @php
                                  $base64id=base64_encode($data->id);
                              @endphp
                        <div class="col-md-12">
                          <a href="{{ url('dashboard/declareResult/'.$base64id.'/') }}" class="pull-right btn btn-info">Manual</a>
                        </div>
                      </div>
                     
                    </div>
                    @php
                            $year_selected=date("Y");
                            $end=$year_selected-17;
                            $years=array();
                            for ($i=$year_selected+1; $i >=$end ; $i--) { 
                              
                                
                                    $years[$i] = $i;
                               
                                
                            }
                        @endphp
                    <div class="card-body">
                      {!! Form::open(['method' => 'POST','action' => 'ResultController@store','class' => 'form-horizontal']) !!}
                    {{ Form::hidden('s_id',$s_id) }}
                    {{ Form::hidden('discipline',$data->discipline,['class'=>'discipline'] ) }}
                      <div class="form-group row">
                        
                      {!! Form::label('exam_session', "Exam Session",['class'=>'col-sm-3 form-control-label']) !!}

                          <div class="col-sm-9">
                            {!! Form::select('exam_session', array('' => 'Select','FALL' => 'FALL','SPRING' => 'SPRING'), null, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}

                              @if(count($errors)>0)
                              @if($errors->has('exam_session'))

                              <small class="form-text-error">  {{$errors->first('exam_session')}}</small>

                              @endif
                              @endif

                          </div>
                      </div>
                      <div class="form-group row">
                        
                      {!! Form::label('exam_year', "Exam Year",['class'=>'col-sm-3 form-control-label']) !!}

                          <div class="col-sm-9">
                            {!! Form::select('exam_year',$years, $year_selected, ['class' => 'form-control mb-3', 'style'=>'width: 100%;','tabindex'=>'-1','aria-hidden'=>'true','required' => '1'])!!}

                              @if(count($errors)>0)
                              @if($errors->has('exam_year'))

                              <small class="form-text-error">  {{$errors->first('exam_year')}}</small>

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
                        <div>
                            <div id="subjects">

                            </div>
                        <div id="addmore">
                              <button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-primary'>Add Subjects</button>
                        </div>
                        <div id="AddedMore">
               
                        </div>
                        <br>
                        <div id="AddedSubjects">
                           
                        </div>


                      </div>
                       <span style="margin-bottom: 5px;"></span>
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

    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Add Subject From</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
                <div class="modal-body">
                  <div class="form-group">
                  <label>Semester</label>
                 <select class="form-control mb-3" style="width: 100%;" tabindex="-1" aria-hidden="true"  id="addingsemester" name="addingsemester"><option value="">Select</option><option value="1-1">1-1</option><option value="1-2">1-2</option><option value="2-1">2-1</option><option value="2-2">2-2</option><option value="3-1">3-1</option><option value="3-2">3-2</option><option value="4-1">4-1</option><option value="4-2">4-2</option></select>
                  </div>
                  <div class="form-group">       
                  <label>Subject</label>
                  <div id="extrasubject">
                    <select class="form-control mb-3" style="width: 100%;" tabindex="-1" aria-hidden="true"  id="addingsubject" name="addingsubject">
         
                    </select>
                  </div>
                  
                  </div>
                 
                  </div>
                  <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                <button type="button" id="extraadding" class="btn btn-primary">Add</button>
              </div>
             
          </div>
      </div>
    </div>



                </div>
              </div>
                @endif
            </div>
          </section>



               @push('custom-scripts')

<script>
        $('#addingsemester').change(function(){
            var semesterID = $(this).val();
            var discipline=$('.discipline').val();
            var combine=semesterID+"$"+discipline;
    
            if(semesterID){
                $.ajax({
                    type:"GET",
                    url:"{{url('/fetchSubjects')}}?combine="+combine,
                    success:function(res){
                        if(res){
                            $("#addingsubject").empty();
                            $.each(res,function(key,value){
                                $("#addingsubject").append('<option value="'+key+'|'+value+'">'+value+'</option>');
                            });

                        }else{
                            $("#addingsubject").empty();
                        }
                    }
                });
            }else{
                $("#addingsubject").empty();
          }
        });
</script>
<script>
        $('#extraadding').click(function(){
            var getValue = $('#addingsubject').val().split('|');
            var key=getValue[0];
            var value=getValue[1];
            $("#AddedSubjects").append(" <div class='form-group row'> <label class='col-sm-3 form-control-label' for='course_credit'>"+value+"</label> <div class='col-sm-4'> <input name='subid[]' type='hidden' value='"+key+"'> <select class='form-control mb-3' style='width: 100%;' tabindex='-1' aria-hidden='true' required='1' id='course_credit' name='result[]'> <option value='' selected='selected'>Select</option> <option value='0.00'>0.00</option> <option value='2.00'>2.00</option> <option value='2.25'>2.25</option> <option value='2.50'>2.50</option> <option value='2.75'>2.75</option> <option value='3.00'>3.00</option> <option value='3.25'>3.25</option> <option value='3.50'>3.50</option> <option value='3.75'>3.75</option> <option value='4.00'>4.00</option> </select> </div><div class='col-sm-4'> <select class='form-control mb-3' style='width: 100%;' tabindex='-1' aria-hidden='true' required='1' id='course_credit' name='subtype[]'> <option value='' selected='selected'>Select</option><option value='Regular'>Regular</option> <option value='Retake'>Retake</option> <option value='Referred'>Referred</option> <option value='Supply'>Supply</option> </select> </div></div>");
             $('#myModal').modal('toggle');

        });
</script>


      @endpush


    @endsection