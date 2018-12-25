@extends('layout.app')

<title>@yield('pageTitle') Gallery</title>


@push('css')

@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <section class="gallery_area">
            <div class="cst_main_rsd main_raised_gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Gallery<span class="second_sp"></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/british.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>British High Commissioner at SIU</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>20 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 medium_screen">
                            <div class="single_box">
                                <a href="/gallery_single">
                                    <img src="{{asset('siu/img/galley/gallery1.jpg')}}" alt="" height="200" width="200">
                                    <div class="gallery_img_desc">
                                        <h4>Pohela Boishak</h4>
                                    </div>
                                </a>
                                <div class="img_desc">
                                    <h3>45 Photos</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection



@push('scripts')

@endpush
