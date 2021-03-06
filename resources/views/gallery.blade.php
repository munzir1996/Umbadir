@extends('layouts.master')

@section('content')
<!-- Jumbotron -->
<div class="hero-wrap" style="background-image: url('images/bg_77.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="#">الرئيسية</a></span> <span>المعرض</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">المعرض</h1>
            </div>
        </div>
    </div>
</div>
<!--END Jumbotron -->
<!-- Gallery -->
<section class="ftco-section ftco-gallery">
    <div class="container">
        <div class="row">
            @foreach ($pics as $pic)

            <a href="images/{{$pic->image}}"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/{{$pic->image}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>
<!--END Gallery -->
@endsection
