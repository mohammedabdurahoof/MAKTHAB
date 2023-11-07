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
                        @foreach ($gallery as $item)
                            <!-- START PORTFOLIO ITEM -->
                            <li class="grid_item {{$item->category}}">
                                <div class="gallery_item">
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('images/gallery') . '/' . $item->image }}"
                                            alt="image">
                                    </a>
                                    <div class="gallery_content">
                                        <div class="link_container">
                                            <a href="{{ asset('images/gallery') . '/' . $item->image }}"
                                                class="image_popup"><span class="ripple"><i
                                                        class="ion-image"></i></span></a>
                                        </div>
                                        <div class="text_holder text_white">
                                            <h5>{{$item->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- END PORTFOLIO ITEM -->
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION GALLERY -->

    @include('user.partials.call')
@endsection
