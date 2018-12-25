@extends('layout.app')

<title>@yield('pageTitle') Academic Calendar</title>


@push('css')
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <div class="container">
            <div class="cust_card mr_t_50 mr_b_50">
                <section class="table_main">
                    <div class="first_table">
                        <h3>Academic Plan for Spring 2019</h3>
                        <table class="table  table-bordered">
                            <tbody>
                            <tr>
                                <td>Last date for Registration	</td>
                                <td>01 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Starts</td>
                                <td>02 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Mid-Term Exam	</td>
                                <td>02 June</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Ends</td>
                                <td>18 August</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Final Examination Starts</td>
                                <td>27 August</td>
                                <td>2018</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="second_table">
                        <h3>List of holidays</h3>
                        <table class="table  table-bordered">
                            <tbody>
                            <tr>
                                <td>Last date for Registration	</td>
                                <td>01 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Starts</td>
                                <td>02 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Mid-Term Exam	</td>
                                <td>02 June</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Ends</td>
                                <td>18 August</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Final Examination Starts</td>
                                <td>27 August</td>
                                <td>2018</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="third_table">
                        <h3>Academic Plan for Fall 2019</h3>
                        <table class="table  table-bordered">
                            <tbody>
                            <tr>
                                <td>Last date for Registration	</td>
                                <td>01 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Starts</td>
                                <td>02 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Mid-Term Exam	</td>
                                <td>02 June</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Ends</td>
                                <td>18 August</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Final Examination Starts</td>
                                <td>27 August</td>
                                <td>2018</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="fourth_table">
                        <h3>List of holidays</h3>
                        <table class="table  table-bordered">
                            <tbody>
                            <tr>
                                <td>Last date for Registration	</td>
                                <td>01 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Starts</td>
                                <td>02 April</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Mid-Term Exam	</td>
                                <td>02 June</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Class Ends</td>
                                <td>18 August</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td>Final Examination Starts</td>
                                <td>27 August</td>
                                <td>2018</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>

        <br>

<h1 class="text-center"> Example 2</h1>
        {{--================= 2nd table==================--}}



<div class="container-fluid">
    <div class="row mr_t_50 mr_b_50">
        <div class="col-md-6">
            <div class="table_one">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h3 class="text-center table_head">Academic Plan for Spring 2019</h3>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Last date for Registration</td>
                            <td>01 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Class Starts</td>
                            <td>02 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Mid-Term Exam</td>
                            <td>02 June</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Class Ends</td>
                            <td>18 August</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Final Examination Starts</td>
                            <td>27 August</td>
                            <td>2018</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table_one">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h3 class="text-center table_head">List of holidays</h3>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Last date for Registration</td>
                            <td>01 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Class Starts</td>
                            <td>02 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Mid-Term Exam</td>
                            <td>02 June</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Class Ends</td>
                            <td>18 August</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Final Examination Starts</td>
                            <td>27 August</td>
                            <td>2018</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table_one">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h3 class="text-center table_head">Academic Plan for Spring 2019</h3>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Last date for Registration</td>
                            <td>01 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Class Starts</td>
                            <td>02 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Mid-Term Exam</td>
                            <td>02 June</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Class Ends</td>
                            <td>18 August</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Final Examination Starts</td>
                            <td>27 August</td>
                            <td>2018</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table_one">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h3 class="text-center table_head">List of holidays</h3>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Last date for Registration</td>
                            <td>01 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Class Starts</td>
                            <td>02 April</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Mid-Term Exam</td>
                            <td>02 June</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Class Ends</td>
                            <td>18 August</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Final Examination Starts</td>
                            <td>27 August</td>
                            <td>2018</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

        <br>
        <br>
        <br>

    </div>
@endsection
