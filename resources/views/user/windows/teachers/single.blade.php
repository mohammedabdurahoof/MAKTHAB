@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')
    <!-- START SECTION TEACHER -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team_single radius_all_10 box_shadow1">
                        <div class="team_img">
                            <img class="radius_ltrt_10" src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="team_img_big">
                        </div>
                        <div class="team_single_info">
                            <div class="team_name">
                                <h5>{{$teacher->name}}</h5>
                                <span>{{$teacher->position}}</span>
                            </div>
                            <h6 class="mb-3">Contact info:</h6>
                            <ul class="contact_info list_none">
                                <li>
                                    <span>Address:</span>
                                    <address>{{$teacher->address}}</address>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <a href="mailto:{{$teacher->email}}">{{$teacher->email}}</a>
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <p>{{$teacher->phone}}</p>
                                </li>
                                <li>
                                    <span>Social:</span>
                                    <ul class="list_none social_icons radius_social">
                                        <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a>
                                        </li>
                                        <li><a href="#" class="sc_instagram"><i
                                                    class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="teacher_desc mt-4 mt-md-0">
                        <h5 class="mb-3">About Us</h5>
                        <p>{{$teacher->about}}</p>
                    </div>
                    <div id="accordion-1" class="accordion">
                        <div class="card">
                            <div class="card-header" id="heading-1-One">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-One" aria-expanded="true"
                                        aria-controls="collapse-1-One">Education</a> </h6>
                            </div>
                            <div id="collapse-1-One" class="collapse show" aria-labelledby="heading-1-One">
                                <div class="card-body">
                                    <p>{{$teacher->education}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-1-Two">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-Two" aria-expanded="true"
                                        aria-controls="collapse-1-Two">Professional Experience</a> </h6>
                            </div>
                            <div id="collapse-1-Two" class="collapse show" aria-labelledby="heading-1-Two">
                                <div class="card-body">
                                    <p>{{$teacher->yearsofExperience}}+ Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-1-Three">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-Three" aria-expanded="true"
                                        aria-controls="collapse-1-Three"> Field Of Special Interest</a> </h6>
                            </div>
                            <div id="collapse-1-Three" class="collapse show" aria-labelledby="heading-1-Three">
                                <div class="card-body">
                                    <p>{{$teacher->interest}}</p>
                                </div>
                            </div>
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
