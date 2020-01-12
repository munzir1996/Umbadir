@extends('layouts.master')

@section('content')
<!-- Jumbotron -->
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index.html">الرئيسية</a></span> <span>الاهداف</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">اهداف المنظمة
                </h1>
            </div>
        </div>
    </div>
</div>
<!--END Juumbotron -->

<!-- Goals -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach ($goals as $goal)
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/{{$goal->image}});"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align=right><a href="#">{{$goal->title}}</a></h3>
                        <p align=right>{{$goal->description}}</p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>    
            @endforeach
            
        </div>
        {{-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>

                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!--END Goals -->
@endsection
