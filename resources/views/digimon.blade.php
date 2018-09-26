@extends('layouts.gentellela')

@section('title')
<title>Digimon Lynx Database! | </title>
@endsection

@section('sidebar_menu')
<div class="menu_section">
  <h3>General</h3>
  <ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-circle"></span></a></li>
    <li><a><i class="fa fa-group"></i> Digimon <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="">Daftar Digimon</a></li>
        <li><a href="">Tambah Digimon</a></li>
      </ul>
    </li>
  </ul>
</div>
@endsection

@section('menu_footer')
<a data-toggle="tooltip" data-placement="top" title="Settings">
  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="FullScreen">
  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Lock">
  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
</a>
@endsection

@section('top_nav')
<div class="nav_menu">
  <nav>
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li class="">
        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="images/shoutmon.png" alt="">Digimon Tamer
          <span class=" fa fa-angle-down"></span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu pull-right">
          <li><a href="javascript:;"> Profile</a></li>
          <li>
            <a href="javascript:;">
              <span class="badge bg-red pull-right">50%</span>
              <span>Settings</span>
            </a>
          </li>
          <li><a href="javascript:;">Help</a></li>
          <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
@endsection

@section('content')
<br />
<!-- content -->

<!-- /content -->
@endsection

@section('footer')
<div class="pull-right">
  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
</div>
@endsection
