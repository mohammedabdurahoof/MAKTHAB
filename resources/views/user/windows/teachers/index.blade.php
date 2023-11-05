@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')

    <!-- START SECTION TEACHER -->
    <section class="small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img1.jpg') }}" alt="team1">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Aden Smith</a></h5>
                            <span>Head Of Department</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img2.jpg') }}" alt="team2">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Kally Brooks</a></h5>
                            <span>Professor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img3.jpg') }}" alt="team3">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">David clark</a></h5>
                            <span>Chemistry Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img4.jpg') }}" alt="team4">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Rebeka Alig</a></h5>
                            <span>English Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img5.jpg') }}" alt="team5">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Henry Pole</a></h5>
                            <span>English Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img6.jpg') }}" alt="team6">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Jesica Belly</a></h5>
                            <span>Chemistry Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img7.jpg') }}" alt="team7">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">John Figery</a></h5>
                            <span>Computer Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.08s">
                        <div class="team_img">
                            <img src="{{ asset('assets/user/images/team_img8.jpg') }}" alt="team8">
                            <ul class="list_none social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_title radius_lbrb_10 text-center">
                            <h5><a href="#">Wendy Core</a></h5>
                            <span>Computer Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TEACHER -->

    <!-- END SECTION CALL TO ACTION -->
    <section class="bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="text_white cta_section">
                        <div class="medium_divider d-block d-md-none"></div>
                        <div class="heading_s1 heading_light">
                            <h2>Get The Coaching Training Today!</h2>
                        </div>
                        <p>If you are going to use a passage of embarrassing hidden in the middle of text</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-md-right">
                        <a href="#" class="btn btn-outline-white">Get Started</a>
                    </div>
                    <div class="medium_divider d-block d-md-none"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CALL TO ACTION -->
@endsection
