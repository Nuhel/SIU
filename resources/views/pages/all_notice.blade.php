@extends('layout.app')

<title>@yield('pageTitle') SIU | Notice</title>


@push('css')
    <link rel="stylesheet" href="{{asset('siu/css/selectric.css')}}">
@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section_heading text-center">
                        <h1><span class="first_sp"></span>All Notice<span class="second_sp"></span></h1>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="msg_vc all_notice_header">
                        <h3>Computer Science and Engineering</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="s003">
                        <form action="">
                            <div class="inner-form">
                                <select data-trigger="" name="choices-single-default" class="choices-single-default">
                                    <option>CSE</option>
                                    <option>ECE</option>
                                    <option>BBA</option>
                                    <option>LLB</option>
                                    <option>ENG</option>
                                </select>

                                <div class="input-field second-wrap">
                                    <input id="search" type="text" placeholder="Type ..." />
                                </div>
                                <div class="input-field fourth-wrap">
                                    <input id="search" type="date" placeholder="Enter Keywords?" />
                                </div>
                                <div class="input-field third-wrap">
                                    <button class="btn-search" type="submit">
                                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <section class="notice_filter">
                <div class="button-group filters-button-group notice_filter_group">
                    <button class="button is-checked" data-filter="*">ALL</button>
                    <button class="button" data-filter=".cse">CSE</button>
                    <button class="button" data-filter=".ece">ECE</button>
                    <button class="button" data-filter=".bba">BBA</button>
                    <button class="button" data-filter=".llb">LLB</button>
                    <button class="button" data-filter=".eng">ENG</button>
                </div>
                <div class="grid">
                    <div class="element-item cse " data-category="cse">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item llb " data-category="llb">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item ece " data-category="ece">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item llb " data-category="llb">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item ece " data-category="ece">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item bba " data-category="bba">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item bba " data-category="bba">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item ece " data-category="ece">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item eng " data-category="eng">
                    <div class="example-1 card1">
                        <div class="wrapper1">
                            <div class="date1">
                                <span class="day">15</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <span class="author">NOVEMBER 11TH, 2018</span>
                                    <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                    <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                    <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                        dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="element-item cse " data-category="cse">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item llb " data-category="llb">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item cse " data-category="cse">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item ece " data-category="ece">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item eng " data-category="eng">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item bba " data-category="bba">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item eng " data-category="eng">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item ece " data-category="ece">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item eng " data-category="eng">
                        <div class="example-1 card1">
                            <div class="wrapper1">
                                <div class="date1">
                                    <span class="day">15</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">NOVEMBER 11TH, 2018</span>
                                        <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                        <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                        <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae, hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                            dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt aspernatur parturient laboriosam erat optio sed nostrum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </section>

    </div>
    </div>
@endsection
@push('js')

    {{--=============ISOTOPE====================--}}
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

    <script type="">

        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };
        // bind filter button click
        $('.filters-button-group').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });

    </script>
    {{--============END==============--}}

    <script src="{{asset('siu/js/jquery.selectric.min.js')}}"></script>
    <script src="{{asset('siu/js/extention/choices.js')}}"></script>
    <script type="text/javascript">
        $('.choices-single-default').selectric();
    </script>

@endpush