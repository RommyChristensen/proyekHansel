<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification</title>
</head>

<body>
    <div style="background-image: url(http://lorensonia.com/email/cover.jpg); width: 800px; height: 400px; text-align: center">
        <br><br>
        {{-- <img style="width: 800px" src="http://lorensonia.com/email/cover.jpg" alt=""> --}}
        <div style="width: 600px; margin: 0 auto; padding: 0;">
            <h1><b>Hi {{ $pesan["nama"] }},</b></h1>
            <h3>Thank you for RSVP to our wedding. We are so happy to have you on our special day. Please verify your
                email address by clicking on the button below.</h3>
            <h4>
                Warm regards,<br>
                Lorenztino and Sonia
            </h4>

            {{-- <button style="width: 200px; height: 50px; background-color: #B86B77; border: none" href="{{url('/verify')}}/{{ $pesan["kode"] }}">Verify</button> --}}
            <button type="button" style="width: 200px; height: 50px;color:white; background-color: #B86B77; border: none" href="{{url('/verify')}}/{{ $pesan["kode"] }}" >Verify</button>
           
            {{-- <button style="width: 200px; height: 50px; background-color: #B86B77; border: none"><a
                    style="text-decoration: none; color:white;">Verify</a></button> --}}
        </div>

    </div>
</body>

</html>
