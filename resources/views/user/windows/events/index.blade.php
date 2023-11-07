@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')
    <!-- START SECTION EVENT -->
    <section class="small_pt">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-sm-6">
                        <div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                            data-animation-delay="0.05s">
                            <div class="content_img radius_ltrt_10">
                                <a href="#"><img src="{{ asset('images/events') . '/' . $event->image }}"
                                        alt="event_img5" /></a>
                                <div class="event_date radius_all_5">
                                    <h5><span>26</span> Jun</h5>
                                    <span class="event_time radius_lbrb_5 bg_default">11:00 am 4:00 pm</span>
                                </div>
                            </div>
                            <div class="content_desc">
                                <h4 class="content_title"><a href="/events/{{$event->id}}">{{$event->name}}</a></h4>
                                <ul class="list_none content_meta">
                                    {{-- <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li> --}}
                                    <li><i class="ti-location-pin"></i><span class="text_default">{{$event->place}}</span></li>
                                </ul>
                                <p>{{$event->description}}</p>

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
    <!-- START SECTION EVENT -->

    @include('user.partials.call')
@endsection
