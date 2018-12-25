@extends('layout.app')

@section('title','SIU | Event')


@push('css')

@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <div class="container">
            <div class="row mr_t_30 mr_b_30">
                <div class="col-md-7">
                    <div class="single_event_img">
                        <img class="img-responsive" src="{{asset('siu/img/all events img/fancycrave-.jpg')}}" alt="Image">
                    </div>
                    <div class="single_event_text">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country,
                            in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has
                            no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name
                        </p>
                    </div>
                    <div class="event_details">
                        <div class="row">
                            <div class="col-md-4 col-xs-6 medium_screen">
                                <div class="event_details_text_left">
                                    <h5>Details</h5>
                                    <div class="event_text_down_date">
                                        <p><strong>Date</strong></p>
                                        <p class="date">January 05 2019</p>
                                    </div>
                                    <div class="event_text_down_date">
                                        <p><strong>Time</strong></p>
                                        <p class="date">7:00 am - 11:30 pm</p>
                                    </div>
                                    <div class="event_text_down_date">
                                        <p><strong>Website</strong></p>
                                        <p class="date">siu.edu.bd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xs-6 medium_screen">
                                <div class="event_details_text_right">
                                    <div class="event_text_down_date">
                                        <h5>&nbsp;</h5>
                                        <p><strong>Organizer</strong></p>
                                        <p class="date">Sylhet International University</p>
                                    </div>
                                    <div class="event_text_down_date">
                                        <p><strong>Contact</strong></p>
                                        <p class="date">+8801700000000</p>
                                    </div>
                                    <div class="event_text_down_date">
                                        <p><strong>Email</strong></p>
                                        <p class="date">info@siu.edu.bd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="venue mr_t_30">
                        <div class="row">
                            <div class="col-md-5 col-xs-6 medium_screen">
                                <div class="vanue_details">
                                    <h5>Venue</h5>
                                    <div class="event_text_down_date">
                                        <p><strong>Sylhet International University</strong></p>
                                        <p>Shamimabad, Bagbari</p>
                                        <p>Sylhet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-6 medium_screen">
                                <div class="event_gmaps">

                                    <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Sylhet%20International%20University+(SIU)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="single_event_right">
                        <h3>Upcoming Events</h3>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">12</span>
                                        <span class="day">JAN</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">24</span>
                                        <span class="day">Feb</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">25</span>
                                        <span class="day">Jun</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">02</span>
                                        <span class="day">Mar</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">29</span>
                                        <span class="day">Dec</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">23</span>
                                        <span class="day">Apr</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">12</span>
                                        <span class="day">Dec</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_text hvr-bounce-to-right">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div class="events">
                                        <span class="date">12</span>
                                        <span class="day">Feb</span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-10">
                                    <div class="text_wrapper">
                                        <div class="event_content">
                                            <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                        </div>
                                        <div class="event_icon">
                                            <span class="clock_ico  single_event_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                            <span class="location_ico single_event_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('js')

@endpush
