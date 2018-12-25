@extends('layout.app')

<title>@yield('pageTitle') Chairman</title>


@push('css')

@endpush


@section('content')
    <!-- ==================CHAIRMAN SIR PROFILE================== -->
    <div class="main main-raised cust_mmn_raised cst_main_rsd">
        <section class="profile mr_b_40 pro_cust">
            <div class="container cust_cont">
                <div class="msg_vc">
                    <h3>The Honourable Chairperson</h3>
                </div>
                <div class="row cust_padding">
                    <div class="col-md-6">
                        <img class="img-responsive img_resp" src="{{asset('siu/img/chairperson.jpg')}}" >
                    </div>
                    <div class="col-md-6">
                        <div class="vc_left_part">
                            <h3>Mr. Shamim Ahmed</h3>
                            <h5>CHAIRMAN</h5>
                            <hr>

                            <div class="text_vc_left">
                                <p>Mr. Shamim Ahmed joined as Chairman of the Trustee Board (Gulshan Foundation for Education Development) of Sylhet International University on the 31st October,
                                    2009 when his uncle Mr. Kutubuddin Ahmed retired on health grounds. Mr. Shamim Ahmed is a scion of an illustrious family which always played a philanthropic role in
                                    the social development of Sylhet region. His father late Moin Uddin Ahmed donated land and did the construction work at his own expense to establish Moin Uddin Adarsha
                                    Mohila College in 1984. His uncle Mr. Kutubuddin Ahmed worked hand in hand with his father in all these philanthropic work. Subsequently in the vicinity of Moin Uddin
                                    Adarsha Mohila College, Sylhet International University was also established in 2001 on land donated by the same family. Not only the land but also the funds required
                                    for the initial construction work was donated by the family of Mr. Shamim. Mr. Shamim Ahmed, now in his early forties,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_vc_btm">
                        is a smart gentleman with a brilliant academic career. Having been schooled at Blue Bird School and Sylhet Government Pilot School,
                        Mr. Shamim Ahmed achieved talent scheme scholarships both at primary and junior school levels.
                        Thereafter, he obtained good results at SSC and HSC examinations
                        from science group and graduated with BSc degree from Sylhet Government College. He then went to United
                        Kingdom for higher studies and added to his career the degrees of BSc. (Engg.) in Electronics and MBA. A businessman by profession, Mr. Shamim Ahmed has a tight schedule o
                        f making frequent trips to different countries. Yet he has all the acumen and administrative capability to guide Sylhet International University as the Chairman
                        of its Trustee Board. We hope that under his able guidance Sylhet International University will soon become internationally famous seat of learning and research.
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ==================CHAIRMAN SIR PROFILE END============== -->

@endsection



@push('scripts')

@endpush
