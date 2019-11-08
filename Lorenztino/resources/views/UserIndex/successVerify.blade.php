@extends('UserLayout.layoutSuccess')
@section('content')
<section class="ftco-section bg-section">
    <div class="overlay-top" style="background-image: url({{asset('newStyle/images/top-bg.jpg')}});"></div>
    <div class="overlay-bottom" style="background-image: url({{asset('newStyle/images/bottom-bg.jpg')}});"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h2 class="mb-3">Thank you for verifying</h2>
                <h4>We hope can see you as the witness of our wedding</h4>
            </div>
        </div>
    </div>
</section>
@endsection