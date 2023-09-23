@extends('layouts.templet')
@section('main')
    <div class="inner_page_agile">
        <h3>Gallery</h3>
        <p>Add Some Short Description</p>

    </div>
    <!--//banner -->
    <!--/w3_short-->
    <div class="services-breadcrumb_w3layouts">
        <div class="inner_breadcrumb">

            <ul class="short_w3ls"_w3ls>
                <li><a href="/">HOME PAGE</a><span>|</span></li>
                <li>Gallery</li>
            </ul>
        </div>
        <div class="inner_content_info_agileits">
            <div class="container">
                <div class="tittle_head_w3ls">
                    <h3 class="tittle">Our Gallery</h3>
                </div>
                <div class="inner_sec_grids_info_w3ls">
                    <div class="col-md-4 blog-grid one">
                        <img src="{{ url('Assest/images/e6.jpg') }}" alt="">
                        {{-- <div class="events_info">
                            <h5>Oct 12,2017</h5>
                            <h4>Talent Programmes</h4>
                            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>

                        </div> --}}
                    </div>
                    <div class="col-md-4 blog-grid one">
                        <img src="{{ url('Assest/images/e5.jpg') }}" alt="">
                       
                    </div>
                    <div class="col-md-4 blog-grid one lost">
                        <img src="{{ url('Assest/images/e4.jpg') }}" alt="">
                        
                    </div>
                    <div class="col-md-4 blog-grid">
                        <img src="{{ url('Assest/images/e1.jpg') }}" alt="">
                       
                    </div>
                    <div class="col-md-4 blog-grid">
                        <img src="{{ url('Assest/images/e2.jpg') }}" alt="">
                       
                    </div>
                    <div class="col-md-4 blog-grid lost">
                        <img src="{{ url('Assest/images/e3.jpg') }}" alt="">
                       
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </div>
@endsection
