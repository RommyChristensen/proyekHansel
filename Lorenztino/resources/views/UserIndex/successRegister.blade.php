{{-- @extends('UserLayout.layoutSuccess')
@section('content') --}}

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
            src: url('font/MADE SAONARA PERSONAL USE.otf');
        }

        @font-face {
            font-family: 'MADE Canvas';
            src: url('font/MADE Canvas Light PERSONAL USE.otf');
        }

        @font-face {
            font-family: 'October Twilight';
            src: url('font/October Twilight.ttf');
        }

        @font-face {
            font-family: 'Avenir Next M';
            src: url('font/Avenir.ttc');
        }

        @font-face {
            font-family: 'Avenir Next B';
            src: url('font/Avenir Next.ttc');
        }

        @font-face {
            font-family: 'Champignon';
            src: url('font/Champignon.otf');
        }

        @font-face {
            font-family: 'Snell roundhand';
            src: url('font/SnellRoundhand.ttc');
        }

        @font-face {
            font-family: 'Sweetie bunny';
            src: url('font/SweetieBunny.ttf');
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
            height: 100vh;
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
<div class="row verify py-5">
    <div class="mx-auto my-auto px-5 text-center avenir-next-m">
        <h3 class="sweety-bunny">Hi {{ $nama }},</h3> <br>
        <p style="font-size: 20">Thank you for your RSVP to our wedding</p>  <br>
        We are so happy to have you on our special day <br><br>

        Please kindly check your email (including junk/spam) to verify your registration. <br><br>
        Warm Regards, <br><br>
        <span style="font-family: 'MADE Saonara'; color: rgba(115,82,63);">
            Lorenztino <span style="font-family:'October Twilight'">&</span> Sonia
        </span>
    </div>
</div>
{{-- <section class="ftco-section bg-section">
    <div class="overlay-top" style="background-image: url({{asset('newStyle/images/top-bg.jpg')}});"></div>
<div class="overlay-bottom" style="background-image: url({{asset('newStyle/images/bottom-bg.jpg')}});"></div>
<div class="container">
    <div class="row justify-content-center pb-5">
        <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-3">Thank you for registering</h2>
            <h4>Please check your email (including junk/spam) to verify your registration. </h4>
        </div>
    </div>
</div>
</section>
@endsection --}}
