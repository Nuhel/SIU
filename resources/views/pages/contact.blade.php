@extends('layout.app')

@section('title','SIU | Contact')


@push('css')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('siu/css/contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('siu/css/contact/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('siu/css/contact/css/util.css')}}">
    <!--===============================================================================================-->
@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

                    <label class="label-input100" for="first-name">Tell us your name <span class="star"> *</span></label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                        <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                        <input class="input100" type="text" name="last-name" placeholder="Last name">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="email">Enter your email <span class="star">*</span></label>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="phone">Enter phone number</label>
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +8801700000000">
                        <span class="focus-input100"></span>
                    </div>


                    <label class="label-input100" for="message">How would you like us to contact you?</label>
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <div class="form-check">
                            <label><input class="form-check-input" type="radio" name="howToContact"> Phone</label>
                            <label><input class="form-check-input" type="radio" name="howToContact"> Email</label>
                        </div>
                    </div>

                    <label class="label-input100" for="message">Best time to call</label>
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <div class="form-check">
                            <label><input class="form-check-input" type="radio" name="whenToContact"> Mornings</label>
                            <label><input class="form-check-input" type="radio" name="whenToContact"> Afternoons</label>
                            <label><input class="form-check-input" type="radio" name="whenToContact"> Evenings</label>
                        </div>
                    </div>




                    <label class="label-input100" for="message">Message <span class="star">*</span></label>
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            Send Message
                        </button>
                    </div>
                </form>

                <div class="contact100-more flex-col-c-m" style="background-image: url('{{asset('siu/css/contact/images/bg-1.jpg')}}');">
                    <div class="flex-w size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>

                        <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

                            <span class="txt2">
							Shamimabad, Bagbari, Sylhet - 3100 Bangladesh
						</span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>

                        <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

                            <span class="txt3">
							+880 821 720771,<br> +880 821 717193
						</span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

                            <span class="txt3">
							siu.edu.bd
						</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection



@push('js')

@endpush
