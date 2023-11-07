@extends('user.layouts.layout')

@section('contant')
    
@include('user.windows.home.partials.banner')
@include('user.windows.home.partials.about')
@include('user.windows.home.partials.feature')
@include('user.windows.home.partials.course')
@include('user.windows.home.partials.register')
@include('user.windows.home.partials.event')
@include('user.windows.home.partials.teachers')

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
