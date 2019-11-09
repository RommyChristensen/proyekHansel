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
                            <div id="carusel1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('wedding/po01.jpg')}}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wedding/po02.jpg')}}" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wedding/po03.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wedding/po04.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wedding/po05.jpg')}}" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carusel1" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carusel1" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                        <div class="col-md-6 py-md-5 text">
                            <div class="py-md-4">
                                <div class="row justify-content-start pb-3">
                                    <div class="col-md-12 ftco-animate p-4 p-lg-5 text-center">
                                        <span class="subheading mb-4">Every love story is beautiful, but ours is my favorite #SOinLORve</span>
                                        <h2 class="mb-4">Lorenztino <span>&amp;</span> Sonia</h2>
                                        <span class="icon flaticon-rose-variant-outline-with-vines"></span>
                                        <p class="time mb-4"><span>Feb | 1 | 2020</span></p>
                                        <span class="subheading mb-5">Ballroom JW Marriott Hotel</span>
                                        <span class="subheading mb-5">Jl. Embong Malang 85-89 <br> Surabaya</span>
                                        <span class="subheading mb-5">06.00 pm</span>
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
            <div class="col-md-6 ftco-animate">
                <div class="place img align-middle">
                    <div class="text text-center">
                        <span class="icon flaticon-reception-bell"></span>
                        <h3>Holy Matrimony</h3>
                        <p><span>Saturday, February 1st 2020</span><br><span>11.00 am </span></p>
                        <p><span>GBIS Kristus Terang Dunia,<br> Jl. Embong Sawo 32, Surabaya</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ftco-animate">
                <div class="place img ">
                    <div class="text text-center">
                        <span class="icon flaticon-wedding-kiss"></span>
                        <h3>Wedding Reception</h3>
                        <p><span>Saturday, February 1st 2020</span><br><span>06.00 pm </span></p>
                        <p><span>Ballroom JW Marriott Hotel,<br> Jl. Embong Malang 85-89, Surabaya</span></p>
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
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">English</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Bahasa Indonesia</a>
                        </div>
                    </nav>
                    <!-- Form Inggris -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active pt-3" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <form action="{{url('/insert/user')}}" method="post" role="form" class="w-100">
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
                                    <input type="number" name="telp" placeholder="+6287884914473"
                                        class="form-control" />
                                    @if ($errors->has('telp'))
                                    <span style="color:red">{{$errors->first('telp')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="johndoe@gmail.com"
                                        class="form-control" />
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
                        <!-- Form Bahasa -->
                        <div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <form action="{{url('/insert/user')}}" method="post" role="form" class="w-100">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" placeholder="John Doe" class="form-control" />
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('nama')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" placeholder="Ngagel Jaya Tengah 74 - 77"
                                        class="form-control" />
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" name="telp" placeholder="+6287884914473"
                                        class="form-control" />
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('telp')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="johndoe@gmail.com"
                                        class="form-control" />
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Daftar Kehadiran</label>
                                    <select name="kehadiran" class="form-control">
                                        <option value="1">Pemberkatan Nikah</option>
                                        <option value="2">Resepsi Pernikahan</option>
                                        <option value="3">Keduanya</option>
                                    </select>
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('kehadiran')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Kehadiran</label>
                                    <select name="kuota" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">{{$errors->first('kuota')}}</span>
                                    @endif
                                </div>
                                <button type="submit" value="submit" class="btn btn-dark btn-block">Submit</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-section" id="Gallery-Section">
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
                <div id="carusel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('wedding/foto02.jpg')}}">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('wedding/foto03.jpg')}}"">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('wedding/foto06.jpg')}}">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('wedding/foto07.jpg')}}">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('wedding/foto09.jpg')}}">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carusel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carusel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <br>
            </div>
        </div>
    </div>
</section>


@endsection
