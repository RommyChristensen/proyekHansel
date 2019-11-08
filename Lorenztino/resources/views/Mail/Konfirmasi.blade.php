<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhasil Mendaftar</title>
</head>
<body style="background-color: white; text-align: center">
    
    <div style="background-color:white ; width: 800px; text-align: center">
        <img style="width: 800px" src="http://lorensonia.com/email/top-bg.jpg" alt="">
        <h1><b>Thank you for fill our RSVP</b></h1>
        <h5>Please verify your email. Click the link below</h5>
        <br>
        <button style="width: 200px; height: 50px; background-color: #26ADE4; color: white; border: none"><a style="text-decoration: none; color:white;" href="{{url('/verify')}}/{{ $pesan["kode"] }}">Verify</a></button>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>