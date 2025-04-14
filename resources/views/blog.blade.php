<!DOCTYPE html>
<html lang="en">



@extends('layouts.app')
@section('content')

<body>
    <!-- header area start -->
 
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area blog-grid  position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Blog</span>
                        <h1 class="title">
                            Blog Grid
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="{{route('index')}}">Accueil</a>
                            <a class="current" href="#">Blog Grid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gap">
        <div class="container">
            <div class="row g-24 mt--30 mt_sm--10">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                     {{$actualites}}
                     @foreach($actualites as $actualite)
                    <div class="rts-blog-card-one">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{$actualite->image_url}}" alt="blog_card">
                            <div class="tag-area">
                                <span class="time">2Years Ago</span>
                                <span class="location">Office</span>
                            </div>
                        </a>
                        <div class="inner-wrapper">
                            <a href="blog-details.html">
                                <h5 class="title">Modern Construction Techniques Materials Changing</h5>
                            </a>
                            <p class="disc">
                                Construction industry undergone transformations in recent years. With advancements
                                technology & the introduction of new materials
                            </p>
                            <a href="blog-details.html" class="read-more-btn">Read More<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->

    @endsection

</body>

</html>