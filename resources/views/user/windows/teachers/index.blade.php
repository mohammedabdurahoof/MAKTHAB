@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')

    <!-- START SECTION TEACHER -->
    <section class="small_pt">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp"
                            data-animation-delay="0.01s">
                            <div class="team_img">
                                <img src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="team1">
                                <ul class="list_none social_icons social_white">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_title radius_lbrb_10 text-center">
                                <h5><a href="/teachers/{{$teacher->id}}">{{$teacher->name}}</a></h5>
                                <span>{{$teacher->position}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION TEACHER -->

    @include('user.partials.call')
@endsection
