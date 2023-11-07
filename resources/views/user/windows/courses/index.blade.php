@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')
    <!-- START SECTION COURSES -->
    <section class="small_pt">
        <div class="container">
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-sm-6">
                        <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                            data-animation-delay="0.01s">
                            <div class="content_img radius_ltrt_10">
                                <a href="#"><img src="{{ asset('images/course') . '/' . $course->courseImage }}"
                                        alt="course_img1" /></a>
                            </div>
                            <div class="content_desc">
                                <h4 class="content_title"><a href="/courses/{{$course->id}}">{{ $course->courseName }}</a></h4>
                                <p>{{ $course->courseSummery }}</p>
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
                                            alt="user1"><span>{{$course->name}}</span></a>
                                </div>
                                <div class="price">
                                    <span class="alert alert-success">₹{{$course->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
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
            </div> --}}
        </div>
    </section>
    <!-- END SECTION COURSES -->

    @include('user.partials.call')
@endsection
