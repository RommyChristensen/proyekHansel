@extends('UserLayout.layoutUser')
@section('content')
<section id="home" class="video-hero js-fullheight"
    style="height: 700px; background-image: url({{asset('newStyle/images/place-1.jpg')}}); background-size:cover; background-position: top center;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row js-fullheight justify-content-center d-flex align-items-center">
            <div class="col-md-12">
                <div class="text text-center">
                    <div class="icon">
                        <span class="flaticon-rose-outline-variant-with-vines-and-leaves"></span>
                    </div>
                    <span class="subheading">The Wedding of</span>
                    <h1>Lorenztino &amp; Sonia</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb" id="groom-bride-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image:url({{asset('wedding/foto08.jpg')}});">
                            </div>
                        </div>
                        <div class="col-md-6 py-md-5 text">
                            <div class="py-md-4">
                                <div class="row justify-content-start pb-3">
                                    <div class="col-md-12 ftco-animate p-4 p-lg-5 text-center">
                                        <span class="subheading mb-4">Join us to celebrate <br>the wedding day
                                            of</span>
                                        <h2 class="mb-4">Lorenztino <span>&amp;</span> Sonia</h2>
                                        <span class="icon flaticon-rose-variant-outline-with-vines"></span>
                                        <span class="subheading">Which is celebration on</span>
                                        <p class="time mb-4"><span>Feb | 1 | 2020</span></p>
                                        <span class="subheading mb-5">06.00 pm</span>
                                        <span class="subheading mb-5">Jl. Embong Malang 85-89 <br> Surabaya</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="when-where-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h2 class="mb-3">Place &amp; Time</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ftco-animate" style="display:flex; align-items: center">
                <div class="place img align-middle"
                    style="background-image: url({{asset('newStyle/images/place-1.jpg')}})">
                    <div class="text text-center">
                        <span class="icon flaticon-reception-bell"></span>
                        <h3>Holy Matrimony</h3>
                        <p><span>Saturday, February 1st 2020</span><br><span>11.30 am </span></p>
                        <p><span>GBIS Kristus Terang Dunia, Jl. Embong Sawo 32, Surabaya</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ftco-animate align-middle">
                <div class="place img " style="background-image: url({{asset('newStyle/images/place-2.jpg')}});">
                    <div class="text text-center">
                        <span class="icon flaticon-wedding-kiss"></span>
                        <h3>Wedding Reception</h3>
                        <p><span>Saturday, February 1st 2020</span><br><span>06.00 pm </span></p>
                        <p><span>Ballroom JW Marriott Hotel, Jl. Embong Malang 85-89, Surabaya</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-secondary" id="rsvp-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h2 class="mb-3">Are Your Attending?</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{url('/insert/user')}}" method="post" role="form" class="rsvp-form ftco-animate">
                    @csrf
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="nama" placeholder="John Doe" class="form-control" />
                        @if ($errors->has('nama'))
                        <span style="color:red">{{$errors->first('nama')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="alamat" placeholder="Ngagel Jaya Tengah 74 - 77"
                            class="form-control" />
                        @if ($errors->has('alamat'))
                        <span style="color:red">{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" name="telp" placeholder="+6287884914473" class="form-control" />
                        @if ($errors->has('telp'))
                        <span style="color:red">{{$errors->first('telp')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="johndoe@gmail.com" class="form-control" />
                        @if ($errors->has('email'))
                        <span style="color:red">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Select your Attendance</label>
                        <select name="kehadiran" class="form-control">
                            <option value="1">Holy Matrimony</option>
                            <option value="2">Wedding Dinner</option>
                            <option value="3">Both</option>
                        </select>
                        @if ($errors->has('kehadiran'))
                        <span style="color:red">{{$errors->first('kehadiran')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Number of People</label>
                        <select name="kuota" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        @if ($errors->has('kuota'))
                        <span style="color:red">{{$errors->first('kuota')}}</span>
                        @endif
                    </div>
                    <button type="submit" value="submit" class="btn btn-dark btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-section">
    <div class="overlay-top" style="background-image: url({{asset('newStyle/images/top-bg.jpg')}});"></div>
    <div class="overlay-bottom" style="background-image: url({{asset('newStyle/images/bottom-bg.jpg')}});"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h2 class="mb-3">Gallery</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/foto02.jpg')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/foto02.jpg')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/foto03.jpg')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/foto03.jpg')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/foto07.jpg')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/foto08.jpg')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/foto09.jpg')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/foto09.jpg')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/po01.JPG')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/po01.JPG')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/po02.JPG')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/po02.JPG')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/po03.JPG')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/po03.JPG')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="{{asset('wedding/po04.JPG.jpg')}}"
                            class="gallery img image-popup d-flex align-items-center justify-content-center"
                            style="background-image: url({{asset('wedding/po04.JPG')}});">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-image"></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
