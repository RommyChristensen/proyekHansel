<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lorenztino & Sonia</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('newHome/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('newHome/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('newHome/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <style>
        /* Required for full background image */
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        .top-nav-collapse {
            background: rgba(201, 196, 190) !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: rgba(201, 196, 190) !important;
        }

        h1 {
            letter-spacing: 8px;
        }

        h5 {
            letter-spacing: 3px;
        }

        .hr-light {
            border-top: 3px solid #fff;
            width: 80px;
        }

        .mt-10 {
            margin-top: 200px;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 100vh;
            }
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: rgba(201, 196, 190) !important;
            }

            .mt-10 {
                margin-top: 100px;
            }
        }

        @font-face {
            font-family: 'MADE Saonara';
            src: url('newHome/font/MADE SAONARA PERSONAL USE.otf');
        }

        @font-face {
            font-family: 'MADE Canvas';
            src: url('newHome/font/MADE Canvas Light PERSONAL USE.otf');
        }

        @font-face {
            font-family: 'October Twilight';
            src: url('newHome/font/October Twilight.ttf');
        }

        @font-face {
            font-family: 'Avenir Next M';
            src: url('newHome/font/Avenir.ttc');
        }

        @font-face {
            font-family: 'Avenir Next B';
            src: url('newHome/font/Avenir Next.ttc');
        }

        @font-face {
            font-family: 'Champignon';
            src: url('newHome/font/Champignon.otf');
        }

        @font-face {
            font-family: 'Snell roundhand';
            src: url('newHome/font/SnellRoundhand.ttc');
        }

        @font-face {
            font-family: 'Sweetie bunny';
            src: url('newHome/font/SweetieBunny.ttf');
        }

        .banner {
            font-size: 50pt;
        }

        .avenir-next-m {
            font-family: 'Avenir Next M';
        }

        .avenir-next-b {
            font-family: 'Avenir Next b';
        }

        .made-canvas {
            font-family: 'MADE Canvas';
        }

        .snell-roundhand {
            font-family: 'Snell roundhand';
        }

        .sweety-bunny {
            font-family: 'Sweetie bunny';
        }

        .made-saonara {
            font-family: 'MADE Saonara';
        }

        .champignon {
            font-family: 'Champignon';
        }

        .ls-3 {
            letter-spacing: 3px;
        }

        .ls-10 {
            letter-spacing: 10px;
        }

        .fs-soinlorve {
            font-size: 50pt;
        }

        .fs-slash {
            font-size: 90pt;
        }

        .line {
            width: 100px;
            height: 1px;
            margin: 0 auto;
            background-color: black;
        }

        .row-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        .loren-sonia {
            background-image: url('newHome/img/01. lorenztino sonia.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .the-wedding {
            height: 100vh;
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url('newHome/img/02. the wedding.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            font-size: 20pt;
        }

        .soinlorve {
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('newHome/img/03. soinlorve.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .rsvp_row {
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('newHome/img/04. rsvp.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px;
            background-position: center center;
            font-size: 1em;
        }

        .gallery_row {
            background-image: url('newHome/img/05. gallery.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center center;
        }

        .verify {
            background-image: url('newHome/img/06. verify.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        @media screen and (max-width: 1023px) {
            .fs-slash {
                font-size: 45pt;
            }

            .fs-soinlorve {
                font-size: 30pt;
                margin-top: 0 !important;
            }

            .soinlorve {
                background-size: 100% 100%;
            }

            .banner {
                letter-spacing: 1px;
                font-size: 40pt;
            }

            .the-wedding {
                font-size: 10pt;
            }

            .rsvp_row {
                font-size: 7pt;
                background-size: 100% 100%;
            }

            .rsvp_row h1 {
                font-size: 15pt;
            }
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 767px) {
            .column {
                flex: 50%;
                max-width: 50%;
            }

            .loren-sonia {
                background-image: url('newHome/img/01. lorenztino sonia mobile.jpg');
            }

            .soinlorve {
                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('newHome/img/03. soinlorve mobile.jpg');
                position: relative;
            }

            .fs-soinlorve {
                font-size: 25pt;
            }

            .fs-slash {
                font-size: 25pt;
            }

            .the-wedding {
                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url('newHome/img/02. the wedding mobile.jpg');
                font-size: 12pt;
            }

            .container-soinlorve {
                position: absolute;
                top: 21%;
            }

            .rsvp_row {
                padding: 20px;
                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('newHome/img/04. rsvp mobile.jpg');
                font-size: 10pt;
            }

            .rsvp_row h1 {
                font-size: 15pt;
            }

            .banner {
                letter-spacing: 1px;
                font-size: 20pt;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                flex: 100%;
                max-width: 100%;
            }
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        * {
            color: rgba(115, 82, 63);
        }

    </style>
</head>

<body>


    <!-- Main navigation -->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-family: 'MADE Saonara'; color: rgba(115,82,63);">
                    Lorenztino <span style="font-family:'October Twilight'">&</span> Sonia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav ml-auto" style="font-family: 'MADE Saonara';">
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="#events" style="color: rgba(115,82,63);">Events</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="#rsvp" style="color: rgba(115,82,63);">RSVP</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="#gallery" style="color: rgba(115,82,63);">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Full Page Intro -->
        <div class="view jarallax loren-sonia" data-jarallax='{"speed": 0.2}'>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-top">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-sm-12 mb-5 white-text text-center mt-10">
                            <h6 class="h1-reponsive white-text text-uppercase avenir-next-m font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                                data-wow-delay="0.3s"><strong>THE WEDDING OF</strong></h6>
                            <hr class="hr-light my-5 wow fadeInDown" style="border: 2px solid rgba(115,82,63)"
                                data-wow-delay="0.4s">
                            <h1 class="text-uppercase made-canvas mb-4 white-text wow fadeInDown banner"
                                data-wow-delay="0.4s">
                                <strong><span>Lorenztino</span>
                                    <span class="champignon fs-slash">/</span>
                                    <span>Sonia</span></strong></h1>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->
    <!--Main Layout-->
    <main>
        <div class="container-fluid">
            <div id="events" class="row text-center the-wedding">
                <div class="col-md-6 my-auto wow fadeIn">
                    <div class="avenir-next-b"><strong>THE WEDDING</strong></div>
                    <div class="mt-4 avenir-next-m">FEB.01.2020</div>
                </div>
                <div class="col-md-6 my-auto wow fadeIn">
                    <div class="avenir-next-b"><strong>HOLY MATRIMONY</strong></div>
                    <div class="avenir-next-m">GBIS KRISTUS TERANG DUNIA AT 11 AM</div>
                    <div class="avenir-next-m">JL. EMBONG SAWO 32, SURABAYA</div>

                    <br><br>
                    <div class="avenir-next-b"><strong>WEDDING RECEPTION</strong></div>
                    <div class="avenir-next-m">BALLROOM JW MARRIOT HOTEL AT 6 PM</div>
                    <div class="avenir-next-m">JL. EMBONG MALANG 85 - 89, SURABAYA</div>
                </div>
            </div>

            <div class="row soinlorve" style="height: 100vh;">
                <div class="col-md-6 wow fadeIn my-auto container-soinlorve text-center">
                    <h1 class="mb-5 fs-soinlorve made-canvas"><span class="snell-roundhand">#</span>SOinLORve</h1>

                    <span class="mt-10 avenir-next-m">SHARE YOUR PHOTOS ON OUR SPECIAL DAY</span>
                </div>
            </div>

            <div id="rsvp" class="row rsvp_row" style="min-height: 100.4vh;">
                <div class="col-md-5 wow fadeIn">
                </div>
                <div class="col-md-7 wow fadeIn my-auto">
                    <div class="text-center">
                        <h1 class="avenir-next-b ls-10">RSVP</h1>
                        <i class="mt-3 avenir-next-m ls-3">Our wedding wouldn't be complete without you as our guest.
                            <br>
                            Please RSVP if you are available to witness our special day.
                        </i>
                    </div>

                    <form action="{{url('/insert/user')}}" method="post" role="form">
                        <div class="row mt-5">
                            @csrf
                            <div class="col-md-6 offset-md-3">
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">FULL NAME / NAMA LENGKAP</span>&nbsp;<input type="text" name="nama"
                                        class="form-control">
                                    @if ($errors->has('nama'))
                                    <span style="color:red">{{$errors->first('nama')}}</span>
                                    @endif
                                </div>
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">ADDRESS / ALAMAT</span>&nbsp;<input type="text" name="alamat"
                                        class="form-control">
                                    @if ($errors->has('alamat'))
                                    <span style="color:red">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">PHONE NO. / NO. TELP</span>&nbsp;<input type="text" name="telp"
                                        class="form-control">
                                    @if ($errors->has('telp'))
                                    <span style="color:red">{{$errors->first('telp')}}</span>
                                    @endif
                                </div>
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">EMAIL</span>&nbsp;<input type="text" name="email"
                                        class="form-control">
                                    @if ($errors->has('email'))
                                    <span style="color:red">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">SELECT YOUR ATTENDANCE / DAFTAR KEHADIRAN</span>&nbsp;
                                    <select name="kehadiran" class="form-control">
                                        <option value="1">Holy Matrimony</option>
                                        <option value="2">Wedding Dinner</option>
                                        <option value="3">Both</option>
                                    </select>
                                    @if ($errors->has('kehadiran'))
                                    <span style="color:red">{{$errors->first('kehadiran')}}</span>
                                    @endif
                                </div>
                                <div class="md-form form-sm">
                                    <span class="avenir-next-b">NUMBER OF PEOPLE / JUMLAH KEHADIRAN</span>&nbsp;
                                    <select name="kuota" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    @if ($errors->has('kuota'))
                                    <span style="color:red">{{$errors->first('kuota')}}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-brown btn-block btn-sm">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="gallery" class="row gallery_row">
                <div class="container mx-auto px-5 py-5">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h3 class="py-3 avenir-next-b ls-10">GALLERY</h3>
                        <div class="line"></div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade z-depth-2"
                            data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="newHome/img/foto02.jpg" alt="First slide">
                                </div>x
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="newHome/img/foto03.jpg" alt="Second slide">
                                </div>
                                <!--/Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="newHome/img/foto06.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="newHome/img/foto07.jpg" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="newHome/img/foto09.jpg" alt="Fifth slide">
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                </div>
            </div>

            {{-- <div class="row verify py-5">
                <div class="mx-auto my-auto px-5 text-center avenir-next-m">
                    <h3 class="sweety-bunny">Hi Sonia,</h3> <br>
                    Thank you for your RSVP to our wedding <br>
                    We are so happy to have you on our special day <br><br>

                    Please kindly verify your email address by clicking on the button below <br><br>

                    <button class="btn btn-light btn-sm">Verify</button><br><br>

                    Warm Regards, <br><br>
                    <span style="font-family: 'MADE Saonara'; color: rgba(115,82,63);">
                        Lorenztino <span style="font-family:'October Twilight'">&</span> Sonia
                    </span>
                </div>
            </div> --}}
        </div>
    </main>
    <!--Main Layout-->


    <!-- SCRIPTS -->
    <!-- JQuery -->

    <script type="text/javascript" src="{{asset('newHome/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('newHome/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('newHome/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('newHome/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        new WOW().init();

        $(document).ready(function () {});

    </script>
</body>

</html>
