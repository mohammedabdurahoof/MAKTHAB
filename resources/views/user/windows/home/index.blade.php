@extends('user.layouts.layout')

@section('contant')
    <!-- START SECTION BANNER -->
    <section class="banner_section p-0 full_screen">
        <div id="carouselExampleFade" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active background_bg overlay_bg_50" data-img-src="assets/images/banner12.jpg">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-sm-12 text-center">
                                    <div class="banner_content animation text_white" data-animation="fadeInDown"
                                        data-animation-delay="0.8s">
                                        <h2 class="font-weight-bold animation text-uppercase" data-animation="fadeInDown"
                                            data-animation-delay="1s">Welcome To eduglobal
                                        </h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="1.5s">
                                            Lorem is simply text of the printing and typesetting industry.</p>
                                        <a class="btn btn-default animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Get Started</a>
                                        <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/banner1.jpg">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-sm-12 text-center">
                                    <div class="banner_content animation text_white" data-animation="fadeInDown"
                                        data-animation-delay="0.8s">
                                        <h2 class="font-weight-bold animation text-uppercase" data-animation="fadeInDown"
                                            data-animation-delay="1s">Learn Online Courses
                                        </h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="1.5s">
                                            Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                        <a class="btn btn-default animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Get Started</a>
                                        <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/banner3.jpg">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-sm-12 text-center">
                                    <div class="banner_content animation text_white" data-animation="fadeInDown"
                                        data-animation-delay="0.8s">
                                        <h2 class="font-weight-bold animation text-uppercase" data-animation="fadeInDown"
                                            data-animation-delay="1s">Eduction from a new
                                            angle</h2>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="1.5s">
                                            Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                        <a class="btn btn-default animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Get Started</a>
                                        <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp"
                                            data-animation-delay="1.8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTAINER-->
                    </div>
                </div>
            </div>
            <div class="carousel-nav carousel_style2">
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <i class="ion-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <i class="ion-chevron-right"></i>
                </a>
            </div>
        </div>
        <a href="#about_section" class="down down_white page-scroll">
            <span class="mouse"><span></span></span>
        </a>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION ABOUT -->
    <section id="about_section" class="overflow_hide staggered-animation-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pr-lg-4 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="heading_s1">
                            <span class="sub_heading">About Us</span>
                            <h2>Take Better Education For a Better Knowledge with us</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet
                            tend to repeat predefined chunks as necessary</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.</p>
                        <a href="#" class="btn btn-outline-black">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="animation fancy_img" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="overlay_bg_30">
                            <img src="assets/images/about_img3.jpg" alt="about_img3" />
                            <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play">
                                <span class="ripple"><i class="ion-play ml-1"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ol_shape1">
            <div class="staggered-animation" data-animation="bounceInDown" data-animation-delay="0.1s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape1.png" alt="shape1" />
            </div>
        </div>
        <div class="ol_shape2">
            <div class="staggered-animation" data-animation="bounceInUp" data-animation-delay="0.2s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape2.png" alt="shape2" />
            </div>
        </div>
        <div class="ol_shape3">
            <div class="staggered-animation" data-animation="bounceInRight" data-animation-delay="0.3s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="assets/images/shape3.png" alt="shape3" />
            </div>
        </div>
        <div class="ol_shape4">
            <div class="staggered-animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape4.png" alt="shape4" />
            </div>
        </div>
        <div class="ol_shape5">
            <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape5.png" alt="shape5" />
            </div>
        </div>
        <div class="ol_shape6">
            <div class="staggered-animation" data-animation="bounceInDown" data-animation-delay="0.6s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="assets/images/shape6.png" alt="shape6" />
            </div>
        </div>
        <div class="ol_shape7">
            <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.7s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape7.png" alt="shape7" />
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->

    <!-- START SECTION FEATURE -->
    <section class="bg_linen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Read our differene</span>
                            <h2>Why Choose Eduglobal</h2>
                        </div>
                        <p>If you are going to use a passage of you need to be sure there isn't anything embarrassing
                            hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="box_icon bg_lightdanger mb-3">
                            <i class="fa fa-book text_danger"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Books & Library</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.03s">
                        <div class="box_icon bg_lightorange mb-3">
                            <i class="fa fa-globe text_orange"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Learn Courses Online</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.04s">
                        <div class="box_icon bg_lightblue mb-3">
                            <i class="fa fa-user-tie text_blue"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Expert Instructors</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="box_icon bg_lightnavy mb-3">
                            <i class="fa fa-headphones-alt text_light_navy"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Music Programs</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.03s">
                        <div class="box_icon bg_lightblu2 mb-3">
                            <i class="fa fa-graduation-cap text_blue2"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Scholarship</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box text-center bg-white icon_box_style3 box_shadow2 radius_all_10 animation"
                        data-animation="fadeInUp" data-animation-delay="0.04s">
                        <div class="box_icon bg_lightpink mb-3">
                            <i class="fa fa-child text_pink"></i>
                        </div>
                        <div class="intro_desc">
                            <h5>Kids Education</h5>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURE -->

    <!-- START SECTION COURSES -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Best Courses</span>
                            <h2>Online Courses</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="course_list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.02s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img1.jpg"
                                                alt="course_img1" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user1.jpg"
                                                    alt="user1"><span>Alia Noor</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-success">Free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.03s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img2.jpg"
                                                alt="course_img2" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user2.jpg"
                                                    alt="user2"><span>Dany Core</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-info">$49</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.04s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img3.jpg"
                                                alt="course_img3" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user3.jpg"
                                                    alt="user3"><span>Smith Parker</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-success">Free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.05s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img4.jpg"
                                                alt="course_img4" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user4.jpg"
                                                    alt="user4"><span>Sara Robert</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-info">$54</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.06s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img5.jpg"
                                                alt="course_img5" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user5.jpg"
                                                    alt="user5"><span>Wendy Nahse</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-info">$36</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.07s">
                                    <div class="content_img">
                                        <a href="#"><img src="assets/images/course_img6.jpg"
                                                alt="course_img6" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                                nunc</a></h4>
                                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                            embarrassing hidden in the middle of text.</p>
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
                                            <a href="#"><img src="assets/images/user6.jpg"
                                                    alt="user6"><span>John Wood</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-info">$22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="medium_divider"></div>
                        <a href="#" class="btn btn-default">View All Courses <i
                                class="ion-ios-arrow-thin-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COURSES -->

    <!-- START SECTION REGISTER -->
    <section class="pb-md-0 background_bg bg_blue2 bg_fixed" data-img-src="assets/images/pattern_bg4.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="text-center animation offer_info" data-animation="fadeInRight"
                        data-animation-delay="0.03s">
                        <div class="heading_s1 heading_light">
                            <span class="sub_heading">hurry On limited time offer</span>
                            <h2>Register now and get a <span class="text_default">50%</span> discount</h2>
                        </div>
                        <div class="small_divider clearfix"></div>
                        <div class="countdown_time countdown_style1 countdown_white" data-time="2020/05/08 00:00:00">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="bg-white apply_form radius_all_10 box_shadow1 padding_eight_all animation"
                        data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1">
                            <h3>Apply For Online Courses</h3>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be anything hidden in the middle
                            of text</p>
                        <form method="post" name="enq" class="pt-md-2">
                            <div class="row">
                                <div class="form-group col-12">
                                    <input required="required" placeholder="Enter Name *" class="form-control"
                                        name="name" type="text">
                                </div>
                                <div class="form-group col-12">
                                    <input required="required" placeholder="Enter Email *" class="form-control"
                                        name="email" type="email">
                                </div>
                                <div class="form-group col-12">
                                    <input required="required" placeholder="Enter Phone No *" class="form-control"
                                        name="phone" type="tel">
                                </div>
                                <div class="form-group col-12">
                                    <div class="custom_select">
                                        <select class="form-control">
                                            <option>Select Course</option>
                                            <option>Course</option>
                                            <option>Course</option>
                                            <option>Course</option>
                                            <option>Course</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-default"
                                        name="submit" value="Submit">Register Now</button>
                                </div>
                                <div class="col-12">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION REGISTER -->

    <!-- START SECTION EVENT -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Our Events</span>
                            <h2>Upcoming events</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row event_list">
                <div class="col-12">
                    <div class="carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="true"
                        data-autoplay="true" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "2"}}'>
                        <div class="item">
                            <div class="content_box event_box box_shadow1 radius_all_10 animation"
                                data-animation="fadeInUp" data-animation-delay="0.02s">
                                <div class="content_img radius_ltrt_10">
                                    <a href="#"><img src="assets/images/event_img1.jpg" alt="event_img1" /></a>
                                </div>
                                <div class="event_date radius_all_5">
                                    <h5 class="radius_ltrt_5"><span>16</span> May</h5>
                                    <span class="event_time bg_default radius_lbrb_5">10:00 am 3:00 pm</span>
                                </div>
                                <div class="content_desc">
                                    <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                            nunc</a></h4>
                                    <ul class="list_none content_meta">
                                        <li><i class="ti-user"></i> <a href="#" class="text_default">John
                                                Wood</a></li>
                                        <li><i class="ti-location-pin"></i><span class="text_default">New York
                                                City</span></li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                        embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content_box event_box box_shadow1 radius_all_10 animation"
                                data-animation="fadeInUp" data-animation-delay="0.02s">
                                <div class="content_img radius_ltrt_10">
                                    <a href="#"><img src="assets/images/event_img2.jpg" alt="event_img2" /></a>
                                </div>
                                <div class="event_date radius_all_5">
                                    <h5 class="radius_ltrt_5"><span>27</span> Apr</h5>
                                    <span class="event_time bg_default radius_lbrb_5">9:00 am 3:00 pm</span>
                                </div>
                                <div class="content_desc">
                                    <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                            nunc</a></h4>
                                    <ul class="list_none content_meta">
                                        <li><i class="ti-user"></i> <a href="#" class="text_default">John
                                                Wood</a></li>
                                        <li><i class="ti-location-pin"></i><span class="text_default">New York
                                                City</span></li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                        embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content_box event_box box_shadow1 radius_all_10 animation"
                                data-animation="fadeInUp" data-animation-delay="0.02s">
                                <div class="content_img radius_ltrt_10">
                                    <a href="#"><img src="assets/images/event_img3.jpg" alt="event_img3" /></a>
                                </div>
                                <div class="event_date radius_all_5">
                                    <h5 class="radius_ltrt_5"><span>22</span> Jun</h5>
                                    <span class="event_time bg_default radius_lbrb_5">11:00 am 4:00 pm</span>
                                </div>
                                <div class="content_desc">
                                    <h4 class="content_title"><a href="#">Nullam id varius nunc id varius
                                            nunc</a></h4>
                                    <ul class="list_none content_meta">
                                        <li><i class="ti-user"></i> <a href="#" class="text_default">John
                                                Wood</a></li>
                                        <li><i class="ti-location-pin"></i><span class="text_default">New York
                                                City</span></li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything
                                        embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START SECTION EVENT -->

    <!-- START SECTION TEACHER -->
    <section class="bg_linen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Our Faculty</span>
                            <h2>Best Teachers</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="team_img">
                            <img src="assets/images/team_img1.jpg" alt="team1">
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
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        <div class="team_img">
                            <img src="assets/images/team_img2.jpg" alt="team2">
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
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                        <div class="team_img">
                            <img src="assets/images/team_img3.jpg" alt="team3">
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
                    <div class="team_box team_style1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                        <div class="team_img">
                            <img src="assets/images/team_img6.jpg" alt="team6">
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
            </div>
        </div>
    </section>
    <!-- END SECTION TEACHER -->

    <!-- START SECTION TESTIMONIAL -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Testimonials</span>
                            <h2>Student Say!</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text</p>
                        <div class="small_divider"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme"
                        data-margin="30" data-loop="true" data-autoplay="true" data-dots="false"
                        data-responsive='{"0":{"items": "1"}, "576":{"items": "2"}, "1199":{"items": "2"}}'>
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="radius_all_5" src="assets/images/client_img1.jpg" alt="client">
                            </div>
                            <div class="testi_meta">
                                <div class="testi_user">
                                    <h6>Lissa Castro</h6>
                                    <span class="text_default">Co-Founder</span>
                                </div>
                                <div class="testi_desc">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="radius_all_5" src="assets/images/client_img2.jpg" alt="client">
                            </div>
                            <div class="testi_meta">
                                <div class="testi_user">
                                    <h6>Lissa Castro</h6>
                                    <span class="text_default">Co-Founder</span>
                                </div>
                                <div class="testi_desc">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="radius_all_5" src="assets/images/client_img3.jpg" alt="client">
                            </div>
                            <div class="testi_meta">
                                <div class="testi_user">
                                    <h6>Lissa Castro</h6>
                                    <span class="text_default">Co-Founder</span>
                                </div>
                                <div class="testi_desc">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIAL -->

    <!-- START SECTION BLOG -->
    <section class="bg_linen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <span class="sub_heading">Our Blog</span>
                            <h2>Recent News</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <div class="blog_img radius_ltrt_10">
                            <a href="#">
                                <img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1">
                                <div class="link_blog">
                                    <span class="ripple"><i class="fa fa-link"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a>
                            </h6>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything
                                embarrassing hidden in the middle of text</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                        <div class="blog_footer bg-white radius_lbrb_10">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp"
                        data-animation-delay="0.03s">
                        <div class="blog_img radius_ltrt_10">
                            <a href="#">
                                <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                                <div class="link_blog">
                                    <span class="ripple"><i class="fa fa-link"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a>
                            </h6>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything
                                embarrassing hidden in the middle of text</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                        <div class="blog_footer bg-white radius_lbrb_10">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>23 May, 2019</a></li>
                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp"
                        data-animation-delay="0.04s">
                        <div class="blog_img radius_ltrt_10">
                            <a href="#">
                                <img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                                <div class="link_blog">
                                    <span class="ripple"><i class="fa fa-link"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a>
                            </h6>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything
                                embarrassing hidden in the middle of text</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                        <div class="blog_footer bg-white radius_lbrb_10">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>16 May, 2019</a></li>
                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- END SECTION NEWSLETTER -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="bg_blue2 radius_all_10 text_white newsletter_box">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="heading_s1">
                                    <h2>Subscribe Our Newsletter</h2>
                                </div>
                                <p>Contrary to popular belief of lorem Ipsm Latin amet ltin from consectetur industry
                                    blandit massa enim varius nunc. </p>
                                <div class="newsletter_form form_lg">
                                    <form>
                                        <input type="text" class="form-control" required=""
                                            placeholder="Email Address">
                                        <button type="submit" title="Subscribe" class="btn btn-default" name="submit"
                                            value="Submit">
                                            subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="icon_bg">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION NEWSLETTER -->
@endsection
