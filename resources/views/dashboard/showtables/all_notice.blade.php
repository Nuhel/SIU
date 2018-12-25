@extends('dashboard/dash_inc.adjust')
@section('content')
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">All Notice</h2>
            </div>
        </header>


        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid" style="margin:10px">
            <div class="row">
                <div class="col-md-6">
                    <form action="/dashboard/notice/search/" method="get" class="sidebar-form">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search by Title , Date" required>
                            <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-info" id="search-btn"><i class="fa fa-search"></i>
                                        </button>
                                   </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                <a href="{{route('show.all_notice')}}" class="btn btn-info">Refresh</a>
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
                                            <th>Title</th>
                                            <th>Notice Date</th>
                                            <th>Department</th>
                                            <th>Pinned</th>
                                            <th>Created At</th>
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
                                                        <td class="padding_20"><img src='/storage/siu/siu.png' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @else
                                                        <td class="padding_20"><img src='/storage/uploaded/notice/{{$item->image}}' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @endif
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->notice_date}}</td>
                                                    <td>{{$item->department}}</td>
                                                     @if($item->is_pinned == 1)
                                                        <td>{{"Yes"}}</td>
                                                    @else
                                                       <td>{{"No"}}</td>
                                                    @endif
                                                    
                                                    <td>{{$item->created_at}}</td>
                                                    <td class="text-center">
                                                        <a style="color: #fff;" class="showNoticeDescription btn btn-success btn-info"
                                                                data-description="{{$item->description}}">&nbsp;
                                                            <span class="fas fa-info">&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a class="btn btn-info" href="{{route('edit.notice',$base64id)}}"><span class="fas fa-edit"></span></a>
                                                        <a style="color: #fff;" class="deleteNotice btn btn-danger btn-info"
                                                    data-id="{{$item->id}}" data-name="{{$item->title}}" data-pic="{{$item->image}}">
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
                                                        <td class="padding_20"><img src='/storage/siu/siu.png' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @else
                                                        <td class="padding_20"><img src='/storage/uploaded/notice/{{$item->image}}' style="max-width:60px;max-height:50px" class="img-responsive" /></td>
                                                    @endif
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->notice_date}}</td>
                                                    <td>{{$item->department}}</td>
                                                     @if($item->is_pinned == 1)
                                                        <td>{{"Yes"}}</td>
                                                    @else
                                                       <td>{{"No"}}</td>
                                                    @endif
                                                    
                                                    <td>{{$item->created_at}}</td>
                                                    <td class="text-center">
                                                        <a style="color: #fff;" class="showNoticeDescription btn btn-success btn-info"
                                                                data-description="{{$item->description}}">&nbsp;
                                                            <span class="fas fa-info">&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a class="btn btn-info" href="{{route('edit.notice',$base64id)}}"><span class="fas fa-edit"></span></a>
                                                        <a style="color: #fff;" class="deleteNotice btn btn-danger btn-info"
                                                    data-id="{{$item->id}}" data-name="{{$item->title}}" data-pic="{{$item->image}}">
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