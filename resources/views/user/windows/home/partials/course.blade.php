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
                        @foreach ($courses as $course)
                            <div class="col-md-6">
                                <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.07s">
                                    <div class="content_img">
                                        <a href="/courses/{{$course->id}}"><img src="{{ asset('images/course') . '/' . $course->courseImage }}"
                                                alt="course_img6" /></a>
                                    </div>
                                    <div class="content_desc">
                                        <h4 class="content_title"><a href="/courses/{{$course->id}}">{{$course->courseName}}</a></h4>
                                        <p>{{$course->courseSummery}}</p>
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
                                            <a href="#"><img src="{{ asset('images/teacher') . '/' . $course->teacherImage }}"
                                                    alt="user6"><span>{{$course->name}}</span></a>
                                        </div>
                                        <div class="price">
                                            <span class="alert alert-info">₹{{$course->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <div class="medium_divider"></div>
                    <a href="/courses" class="btn btn-default">View All Courses <i
                            class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COURSES -->
