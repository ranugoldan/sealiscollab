<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"></meta>
  <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
  <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
	<title>Admin @sowindows - </title>
  <link rel="shortcut icon" href="{{ asset('/icons/favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/stylex.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.theme.min.css') }}">
</head>
<body>
	<nav id="navbar-wrapper" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="navbrand" class="navbar-brand" href="{{ URL::to('/admin') }}"><img alt="Sowindows logo" src="{{ asset('/images/banner.png')}}"></img></a>
        </div>
        <div id="navbar-menu" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Stasiun <span class="caret"></span>
              </a>
              <ul id="dropdownmenu" class="dropdown-menu" role="menu">
                @foreach ($stasiuns as $stasiun)
                <li><a href="{{ URL::to('admin/wilayah') }}<?php echo "?id=$stasiun->id"; ?>"><?php echo $stasiun->nama; ?></a></li>
                @endforeach
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right ">
          	<li><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div id="content-wrapper" class="container">
@yield('content')
</div>
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

<script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDhzkGYy4VErcRElcN3dTBTmJPk4x0suvM&sensor=false&signed_in=true&libraries=geometry,places"></script>
<script src="https://google-maps-utility-library-v3.googlecode.com/svn-history/r287/trunk/markerclusterer/src/markerclusterer.js"></script>
<script src="{{asset('js/List.js')}}"></script>
<script src="{{asset('js/Maperizer.js')}}"></script>
<script src="{{asset('js/map-options.js')}}"></script>
<script src="{{asset('js/jqueryui.maperizer.js')}}"></script>
</body>
</html>
