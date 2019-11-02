<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/fa/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <nav class="navbar navnav navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">LORENZTINO & SONIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: 'Raleway', sans-serif; font-size: 15pt"
                            href="#loc">Events</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: 'Raleway', sans-serif; font-size: 15pt"
                            href="#gal">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: 'Raleway', sans-serif; font-size: 15pt"
                            href="#reg">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- TITLE    -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('wedding/MMZA (28).JPG')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p class="caption-title">LORENZTINO & SONIA</p>
                    <p>I have found the one whom my soul loves</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('wedding/MMZA (85).JPG')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <p class="caption-title">LORENZTINO & SONIA</p>
                    <p>I have found the one whom my soul loves</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('wedding/MMZA (112).JPG')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <p class="caption-title">LORENZTINO & SONIA</p>
                    <p>I have found the one whom my soul loves</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery -->
    <div class="container-fluid">
        <div class="row gallery" id="gal">

            <div class="col-md-6" style="padding: 0;">
                <div id="carousel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('wedding/MMZB (7).JPG')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('wedding/MMZB (253).JPG')}}" alt="Second slide">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 bg-dark text-white" style="padding: 20px 20px 20px 20px;">
                <table style="height: 100%;">
                    <td>
                        <div class="container">

                            <p class="quote1">Every love story is beautiful, but ours is my favorite</p>
                            <h1 class="quote2">#SOinLORve</h1>
                        </div>
                        <!-- <p style="font-size: 15pt">
                            #SOinLORve
                        </p> -->
                    </td>
                </table>
            </div>
        </div>
    </div>
    <!-- Event Detail -->
    <div class="container-fluid" id="loc">
        <div class="row">
            <div style="font-family: 'DM Serif Text', serif; padding-top: 7%;" class="col-md-6 text-center mb-5">
                <h1>Holy Matrimony</h1>
                <br>
                <p>
                    <strong>Saturday, February 1st 2020</strong> <br>
                    <b> 11.30 am </b><br>
                    <strong>GBIS KRISTUS TERANG DUNIA </strong><br>
                    Jl. Embong Sawo 32, Surabaya
                    <br>

                </p>
            </div>
            <div class="col-md-6 text-center img-event">
            </div>
        </div>
    </div>
    <div class="container-fluid" id="loc">
        <div class="row">
            <div class="col-md-6 text-center img-event">
            </div>
            <div style="font-family:'lato', sans-serif; padding-top: 7%;" class="col-md-6 text-center mb-5">
                <h1>Wedding Reception</h1>
                <br>
                <p>
                    <strong>Saturday, February 1st 2020</strong> <br>
                    <b> 06.00 pm </b> <br>
                    <strong>Ballroom JW Marriott Hotel </strong><br>
                    Jl. Embong Malang 85-89, Surabaya
                    <br>

                </p>
            </div>
        </div>
    </div>
    <!-- REGIS FORM -->
    <div class="row bg-white" id="reg">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-md-8 col-sm-8 col-xs-8 bg-white p-3 form-regis">
                    <h4 style="text-align: center;">We would love to have you on our wedding day <br> Please RSVP if you
                        are available to witness our special day</h4>
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
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2"></div>
            </div>
        </div>
    </div>

    <div class="row p-5 footer" style="background-color: black; color: white;">
        <div class="container-fluid text-center">
            <h3>Contact Us</h3>
            <div class="row">
                <div class="col-md-6">
                    <span class="fa fa-user"></span> Lorenztino & Sonia
                </div>
                <div class="col-md-6">
                    <span class="fa fa-envelope"></span> soinlorve@outlook.com
                </div>
            </div>
            <!-- <div class="row">
                <p>
                    <a class="social-link" href=""><span class="fab fa-facebook"></span></a>
                    <a class="social-link" href=""><span class="fab fa-instagram"></span></a>
                    <a class="social-link" href=""><span class="fab fa-google-plus-g"></span></a>
                    <a class="social-link" href=""><span class="fab fa-twitter"></span></a>
                </p>
            </div> -->
        </div>
        <div class="container mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.2)">
            <div class="text-center">
                Copyright &copy;2019. All rights reserved.
            </div>
        </div>
    </div>
</body>

</html>
