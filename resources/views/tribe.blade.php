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
        <li><a href="{{ route('digimon.index') }}">Digimon List</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-recycle"></i> Digivolution <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="">Digivolution Tree</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-certificate"></i> Tribe <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="{{ route('tribe.index') }}">Tribe List</a></li>
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
<button type="button" class="col-md-12 col-sm-12 col-xs-12 btn btn-primary" data-toggle="modal" data-target=".bs-modal-tambah">
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_content">
        <h2 class="text-center">Add Tribe Data</h2>
    </div>
  </div>
</div>
</button>
<div class="clearfix"></div>

<div class="page-title">
  <div class="title_left">
    <h3>Tribe List</h3>
  </div>

<div class="title_right">
  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
    </div>
  </div>
</div>
</div>
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
        <div id="error-data"></div>
        <div id="data-digimon"></div>
      </div>
    </div>
  </div>
</div>
</a>
<div class="clearfix"></div>

<!-- /content -->

<!-- modals -->
  <!-- modals tambah-->
  <div class="modal fade bs-modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Add Tribe Data</h4>
        </div>
        <div class="modal-body">

        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="digimon-name">Digimon Name <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="digimon-name" name="digimon-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Stage <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="stage" class="form-control col-md-7 col-xs-12">
                    <option>=Choose Stage=</option>
                    <option value="0">In-Training</option>
                    <option value="1">In-Training II</option>
                    <option value="2">Rookie</option>
                    <option value="3">Champion</option>
                    <option value="4">Ultimate</option>
                    <option value="5">Mega</option>
                    <option value="6">Armor</option>
                  </select>
                </div>
          </div>
          <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tribe <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="tribe" class="form-control col-md-7 col-xs-12">
                  <option>=Choose Tribe=</option>
                  <option value="0">In-Training</option>
                  <option value="1">In-Training II</option>
                  <option value="2">Rookie</option>
                  <option value="3">Champion</option>
                  <option value="4">Ultimate</option>
                  <option value="5">Mega</option>
                  <option value="6">Armor</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Info</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="info" id="info" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
          </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="reset">Reset</button>
          <button type="button" class="btn btn-success">Simpan Data</button>
        </div>

        </form>

      </div>
    </div>
    </div>
  </div>

  <!-- modals edit-->
  <div class="modal fade bs-modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Edit Data Digimon</h4>
        </div>
        <div class="modal-body">
          <h4>Text in a modal</h4>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Simpan Data</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('jsqueryscript')
<script type="text/javascript">
  $(document).ready(function(){
      var digimondata = $("#data-digimon").load("/listdigimon", function(response, status, xhr){
        if(status == "error") {
        var msg = "Sorry but there was an error: ";
          $( "#error-data" ).html( "<div class='text-center alert alert-danger'>"+msg + xhr.status + " " + xhr.statusText +"</div>" );
        }
      }); //yes berhasil

      $("#reload").click(function(){
        digimondata.ajax.reload();
      });
  });
</script>
@endsection

@section('footer')
<div class="pull-right">
  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
</div>
@endsection
