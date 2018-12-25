@extends('layout.app')
@push('css')
    <title>@yield('pageTitle') At a Glance</title>
@endpush
@section('content')

    <section class="at_a_glance_slider">
        <div class="row">
            <div class="col-md-12">
                <section class="Caroslider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item">
                                <img src="{{asset('siu/img/002.jpg')}}" alt="slider2" width="100%">
                                <div class="carousel-caption">
                                    First Convocation Ceremony at SIU!
                                </div>
                            </div>

                            <div class="item active">
                                <img src="{{asset('siu/img/slide_img/003.jpg')}}" alt="image" width="100%" height="400">
                                <div class="carousel-caption">
                                    SIU Library!
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{asset('siu/img/slide_img/004.jpg')}}" alt="image" width="100%" height="400">
                                <div class="carousel-caption">

                                    Greetings!
                                </div>
                            </div>


                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="previous_ico1"> <i class="fas fa-angle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="previous_ico2"><i class="fas fa-angle-right"></i></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </section>
            </div>
        </div>
    </section>
    <div class="main main-raised">
            <section class="at_a_glance_content">
                <div class="container">
                    <div class="card custm_margin">
                        <div class="section_head">
                            <h3 class="text-center glance_h3">At a glance</h3>
                            <hr class="style-eight at_a_glanc">
                        </div>
                        <div class="glance_text_p">
                            <p>
                                Sylhet International University, a privately funded institution of higher learning and research is dedicated to providing quality education commensurate with investment. The university supports its students through its commitment to excellence and demonstrates it through the quality of its academic services. The university operates as a non-profit private institution and offers academically rigorous but practical instructions in professional disciplines,
                                the overall objective being to meet the growing demand for human resource development in this twenty first century.
                            </p>
                            <p>
                                With increasing internationalization of education and more at the university level, there is a strong compulsion to promote interaction, especially with institutions of higher education in the industrial countries. Such interaction provides access to ever changing scenario of modern education delivery system and most up to date innovative development in teaching and learning methodology. Recognizing this to be imperative, SIU has already initiated
                                a number of collaborative programs with universities in the USA, Australia, Canada, and United Kingdom.
                            </p>
                            <p>
                                Sylhet International University was established from the very beginning with a campus of its own. The campus is very much within the city of Sylhet though it is relatively calm and quiet, just suitable for the pursuit of knowledge.
                                It is within walking distance from the Osmani Medical College Hospital.The medium of instructions in Sylhet International University is English.
                            </p>

                            <br>
                            <div class="teachers_count">
                                <p>Total Students : 4984 (Approximate)</p>
                                <p>Number of Full-time Teachers : 85</p>
                                <p>Number of Part-time Teachers : 38</p>
                                <p>Number of Books in the Library : 15250 (Approximate)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
@endsection

@push('script')

@endpush

