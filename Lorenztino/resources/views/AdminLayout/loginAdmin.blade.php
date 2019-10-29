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
            <a class="navbar-brand" href="{{url('/')}}">ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
            </button>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="row bg-white" id="reg">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-md-8 col-sm-8 col-xs-8 bg-white p-3 form-regis">
                            <div>
                                <form action="{{url('/Burger123/login')}}" method="post" role="form" class="w-100">
                                    @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" />
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
    </div>
</body>

</html>
