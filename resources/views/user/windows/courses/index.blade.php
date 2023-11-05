@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')
    <!-- START SECTION COURSES -->
    <section class="small_pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.01s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img1.jpg') }}" alt="course_img1" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user1.jpg') }}" alt="user1"><span>Alia
                                        Noor</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-success">Free</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img2.jpg') }}" alt="course_img2" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user2.jpg') }}" alt="user2"><span>Dany
                                        Core</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-info">$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.03s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img3.jpg') }}" alt="course_img3" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user3.jpg') }}" alt="user3"><span>Smith
                                        Parker</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-success">Free</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.04s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img4.jpg') }}" alt="course_img4" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user4.jpg') }}" alt="user4"><span>Sara
                                        Robert</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-info">$54</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.05s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img5.jpg') }}" alt="course_img5" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user5.jpg') }}" alt="user5"><span>Wendy
                                        Nahse</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-info">$36</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                        data-animation-delay="0.06s">
                        <div class="content_img radius_ltrt_10">
                            <a href="#"><img src="{{ asset('assets/user/images/course_img6.jpg') }}" alt="course_img6" /></a>
                        </div>
                        <div class="content_desc">
                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="courses_info">
                                <div class="rating_stars">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star-half"></i>
                                </div>
                                <ul class="list_none content_meta">
                                    <li><a href="#"><i class="ti-user"></i>31</a></li>
                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_footer">
                            <div class="teacher">
                                <a href="#"><img src="{{ asset('assets/user/images/user6.jpg') }}" alt="user6"><span>John
                                        Wood</span></a>
                            </div>
                            <div class="price">
                                <span class="alert alert-info">$22</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i
                                    class="ion-ios-arrow-thin-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="ion-ios-arrow-thin-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COURSES -->

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
