<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/shoutmon.png" type="image/ico" />

<!-- Title -->
@yield('title')
<!-- /Title -->

<!-- Bootstrap -->
<link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<!-- bootstrap-progressbar -->
<link href="{{ asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">
@yield('stylesheet')
</head>

<body class="nav-md">
<div class="container body">
  <!-- data -->
  <div class="col-md-55">
    <div class="thumbnail">
      <div class="image view view-first">
        <img style="width: 100%; display: block;" src="images/media.jpg" alt="image">
        <div class="mask">
          <p>Your Text</p>
          <div class="tools tools-bottom">
            <a href="#"><i class="fa fa-link"></i></a>
            <a href="#"><i class="fa fa-pencil"></i></a>
            <a href="#"><i class="fa fa-times"></i></a>
          </div>
        </div>
      </div>
      <div class="caption">
        <p>Snow and Ice Incoming for the South</p>
      </div>
    </div>
  </div>

  <!-- data -->
  <div class="col-md-55">
    <div class="thumbnail">
      <div class="image view view-first">
        <img style="width: 100%; display: block;" src="images/media.jpg" alt="image">
        <div class="mask">
          <p>Your Text</p>
          <div class="tools tools-bottom">
            <a href="#"><i class="fa fa-link"></i></a>
            <a href="#"><i class="fa fa-pencil"></i></a>
            <a href="#"><i class="fa fa-times"></i></a>
          </div>
        </div>
      </div>
      <div class="caption">
        <p>Snow and Ice Incoming for the South</p>
      </div>
    </div>
  </div>
  <!-- data -->
  <div class="col-md-55">
    <div class="thumbnail">
      <div class="image view view-first">
        <img style="width: 100%; display: block;" src="images/media.jpg" alt="image">
        <div class="mask">
          <p>Your Text</p>
          <div class="tools tools-bottom">
            <a href="#"><i class="fa fa-link"></i></a>
            <a href="#"><i class="fa fa-pencil"></i></a>
            <a href="#"><i class="fa fa-times"></i></a>
          </div>
        </div>
      </div>
      <div class="caption">
        <p>Snow and Ice Incoming for the South</p>
      </div>
    </div>
  </div>

</div>

</body>
</html>
