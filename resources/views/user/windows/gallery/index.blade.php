@extends('user.layouts.layout')

@section('contant')
    @include('user.partials.page_banner')

    <!-- START SECTION GALLERY -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="list_none grid_filter">
                        <li><a href="#" class="current" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".library">Library</a></li>
                        <li><a href="#" data-filter=".campus">Campus</a></li>
                        <li><a href="#" data-filter=".events">Events</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid_container gutter_medium grid_col4 masonry">
                        <li class="grid-sizer"></li>
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item events">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small16_360X270.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item16.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item library campus">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small17_360X395.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item17.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item library">
                            <div class="gallery_item">
                                <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true"
                                    data-loop="true" data-autoplay-timeout="3000" data-items="1">
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small18_360X430.jpg') }}" alt="image">
                                    </a>
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small19_360X430.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item18.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                        <a href="{{ asset('assets/user/images/gallery_item19.jpg') }}" class="image_popup d-none"></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item campus">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small20_360X200.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item20.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item library campus">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small21_360X540.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item21.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item campus">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small22_360X450.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item22.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item events">
                            <div class="gallery_item">
                                <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true"
                                    data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                    data-autoplay-timeout="3500" data-items="1">
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small23_360X350.jpg') }}" alt="image">
                                    </a>
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small24_360X350.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item23.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                        <a href="{{ asset('assets/user/images/gallery_item24.jpg') }}" class="image_popup d-none"><i
                                                class="ion-image"></i></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item library">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small25_360X540.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item25.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item events">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small26_360X480.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item26.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item events">
                            <div class="gallery_item">
                                <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true"
                                    data-loop="true" data-autoplay-timeout="4000" data-items="1">
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small12_360X240.jpg') }}" alt="image">
                                    </a>
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/user/images/gallery_item_small13_360X240.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item12.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                        <a href="{{ asset('assets/user/images/gallery_item13.jpg') }}" class="image_popup d-none"></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item library">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small27_360X400.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item27.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item events">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/user/images/gallery_item_small15_360X240.jpg') }}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/user/images/gallery_item15.jpg') }}" class="image_popup"><span
                                                class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    <div class="text_holder text_white">
                                        <h5>Galley Title</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION GALLERY -->

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
