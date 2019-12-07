<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Admin - Edit Attendance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <span class="brand">Admin</span>
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="{{url('/Burger123/dashboard')}}" class="detailed">
              <span class="title">Dashboard</span>
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="{{url('/Burger123/insertAttendance')}}" class="detailed">
              <span class="title">Add New</span>
            </a>
            <span class="icon-thumbnail">A</span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold">Admin</span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="{{asset('assets/img/profiles/avatar.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="#" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner">
                  
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
              <!-- BEGIN PlACE PAGE CONTENT HERE -->
              <form id="reg" role="form" method="post" action="{{url('/Burger123/editProses')}}">
                @csrf
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="panel-title">
                                  Registration Form
                              </div>
                          </div>
                          <div class="panel-body">
                              <input type="hidden" name="id" value={{$edited[0]->id}} >
                              <div class="form-group">
                                  <label>Full name</label>
                                  <span class="help">e.g. "John Doe"</span>
                                  <input type="text" value="{{$edited[0]->nama}}" name="nama" class="form-control">
                                  @if ($errors->has('alamat'))
                                    <span style="color:red">{{$errors->first('nama')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Address</label>
                                  <span class="help">e.g. "Ngagel Jaya 73 - 77"</span>
                                  <input type="text" value="{{$edited[0]->alamat}}" name="alamat" class="form-control">
                                  @if ($errors->has('alamat'))
                                    <span style="color:red">{{$errors->first('alamat')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Phone Number</label>
                                  <span class="help">e.g. "087884914473"</span>
                                  <input type="number" value="{{$edited[0]->telp}}" name="telp" class="form-control">
                                  @if ($errors->has('telp'))
                                    <span style="color:red">{{$errors->first('telp')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <span class="help">e.g. "some@example.com"</span>
                                  <input type="email" value="{{$edited[0]->email}}" name="email" class="form-control">
                                  @if ($errors->has('email'))
                                    <span style="color:red">{{$errors->first('email')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Select Your Attendance</label>
                                  <select name="kehadiran" class="full-width select2-hidden-accessible"
                                      data-init-plugin="select2" tabindex="-1" aria-hidden="true">
                                      <option value="1" {{($edited[0]->kehadiran == 1) ? "selected" : ""}}>Holy Matrimony</option>
                                      <option value="2" {{($edited[0]->kehadiran == 2) ? "selected" : ""}}>Wedding Dinner</option>
                                      <option value="3" {{($edited[0]->kehadiran == 3) ? "selected" : ""}}>Both</option>
                                  </select>
                                  @if ($errors->has('kehadiran'))
                                    <span style="color:red">{{$errors->first('kehadiran')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Number of People</label>
                                  <input type="number" value="{{$edited[0]->email}}" name="kuota" class="form-control">
                                  @if ($errors->has('kuota'))
                                    <span style="color:red">{{$errors->first('kuota')}}</span>
                                  @endif
                                  {{-- <select name="kuota" class="full-width select2-hidden-accessible"
                                      data-init-plugin="select2" tabindex="-1" aria-hidden="true">
                                      <option value="1" {{($edited[0]->kuota == 1) ? "selected" : ""}}>1</option>
                                      <option value="2" {{($edited[0]->kuota == 2) ? "selected" : ""}}>2</option>
                                  </select> --}}
                                  {{-- @if ($errors->has('kuota'))
                                    <span style="color:red">{{$errors->first('kuota')}}</span>
                                  @endif --}}
                              </div>
                              <button type="submit" class="btn btn-block btn-success">Add Attendance</button>
                              </div>
                      </div>
                  </div>
                  <div class="col-md-2">
                    
                  </div>
              </form>


              <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2019 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}~" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-bez/jquery.bez.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/classie/classie.js')}}"></script>
    <script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{asset('pages/js/pages.min.js')}}"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{asset('assets/js/scripts.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>