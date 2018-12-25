@extends('dashboard/dash_inc.adjust')
@section('content')
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">All Teachers</h2>
            </div>
        </header>


        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid" style="margin:10px">
            <div class="row">
                <div class="col-md-6">
                    <form action="/dashboard/teacher/search/" method="get" class="sidebar-form">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search by name, phone, email, designation, department" required>
                            <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-info" id="search-btn"><i class="fa fa-search"></i>
                                        </button>
                                   </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                <a href="{{route('show.all_teacher')}}" class="btn btn-info">Refresh</a>
                </div>
            </div>
        </div>

        <section class="tables" style="padding: 0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th style="display: none">#</th>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($data))
                                            @foreach($data as $item)
                                                <tr>
                                                    @php
                                                        $base64id=base64_encode($item->id);
                                                    @endphp
                                                    <td style="display: none">{{$item->id}}</td>
                                                    @if($item->image == 'no_image.jpg')
                                                        <td class="padding_20"><img src='/storage/siu/teachers_default.png' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @else
                                                        <td class="padding_20"><img src='/storage/uploaded/teacher/{{$item->image}}' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @endif
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->designation}}</td>
                                                    <td>{{$item->department}}</td>
                                                    <td class="text-center">
                                                         <a style="color: #fff;" class="showTeacherDescription btn btn-success btn-info"
                                                                data-facebook="{{$item->facebook}}" data-phone="{{$item->phone}}"data-email="{{$item->email}}" data-name="{{$item->name}}" data-linkedin="{{$item->linkedin}}">&nbsp;
                                                            <span class="fas fa-info">&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a class="btn btn-info" href="{{route('edit.teacher',$base64id)}}"><span class="fas fa-edit"></span></a>
                                                        <a style="color: #fff;" class="deleteTeacherinfo btn btn-danger btn-info"
                                                    data-id="{{$item->id}}" data-name="{{$item->name}}" data-pic="{{$item->image}}">
                                                            <span class="fas fa-trash-alt"></span>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif

                                        @if(isset($details))
                                            <p style="font-size: 20px;"> The search results for your query <b> {{ $query }} </b> are :</p>

                                            @foreach($details as $item)
                                               <tr>
                                                    @php
                                                        $base64id=base64_encode($item->id);
                                                    @endphp
                                                    <td style="display: none">{{$item->id}}</td>
                                                    @if($item->image == 'no_image.jpg')
                                                        <td class="padding_20"><img src='/storage/siu/teachers_default.png' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @else
                                                        <td class="padding_20"><img src='/storage/uploaded/teacher/{{$item->image}}' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @endif
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->designation}}</td>
                                                    <td>{{$item->department}}</td>
                                                    <td class="text-center">
                                                         <a style="color: #fff;" class="showTeacherDescription btn btn-success btn-info"
                                                                data-facebook="{{$item->facebook}}" data-phone="{{$item->phone}}"data-email="{{$item->email}}" data-name="{{$item->name}}" data-linkedin="{{$item->linkedin}}">&nbsp;
                                                            <span class="fas fa-info">&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a class="btn btn-info" href="{{route('edit.teacher',$base64id)}}"><span class="fas fa-edit"></span></a>
                                                        <a style="color: #fff;" class="deleteTeacherinfo btn btn-danger btn-info"
                                                    data-id="{{$item->id}}" data-name="{{$item->name}}" data-pic="{{$item->image}}">
                                                            <span class="fas fa-trash-alt"></span>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    @if(isset($data)){!! $data->render() !!}@endif
                                    @if(isset($details)){!! $details->render() !!}
                                    @elseif(isset($message))
                                        <p>{{ $message }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection