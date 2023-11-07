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
                    @foreach ($events as $event)
                        <div class="item">
                            <div class="content_box event_box box_shadow1 radius_all_10 animation"
                                data-animation="fadeInUp" data-animation-delay="0.02s">
                                <div class="content_img radius_ltrt_10">
                                    <a href="#"><img src="{{ asset('images/events') . '/' . $event->image }}"
                                            alt="event_img1" /></a>
                                </div>
                                <div class="event_date radius_all_5">
                                    <h5 class="radius_ltrt_5"><span>16</span> May</h5>
                                    <span class="event_time bg_default radius_lbrb_5">10:00 am 3:00 pm</span>
                                </div>
                                <div class="content_desc">
                                    <h4 class="content_title"><a href="/events/{{$event->id}}">{{$event->name}}</a></h4>
                                    <ul class="list_none content_meta">
                                        {{-- <li><i class="ti-user"></i> <a href="#" class="text_default">John
                                                Wood</a></li> --}}
                                        <li><i class="ti-location-pin"></i><span class="text_default">{{$event->place}}</span></li>
                                    </ul>
                                    <p>{{$event->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION EVENT -->
