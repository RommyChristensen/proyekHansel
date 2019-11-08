<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification</title>
</head>
<body>
    <div style="background-color:#F39ABE ; width: 800px; text-align: center">
        <img style="width: 800px" src="http://lorensonia.com/email/top-bg.jpg" alt="">
        <h1><b>Hi {{ $pesan["nama"] }},</b></h1>
        <h5>Thank you for RSVP to our wedding. We are so happy to have you on our special day. Please verify your email address by clicking on the button below.</h5>
        <br>
        <p>
            Warm regards,<br>
            Lorenztino and Sonia
        </p>
        
        <button style="width: 200px; height: 50px; background-color: #26ADE4; color: #FFD5DA; border: none"><a style="text-decoration: none; color:white;" href="{{url('/verify')}}/{{ $pesan["kode"] }}">Verify</a></button>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>