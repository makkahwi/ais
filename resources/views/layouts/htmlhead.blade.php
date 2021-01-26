<head>

  <meta charset="UTF-8">
  <meta name="theme-color" content="#008acf" />
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <title>@yield('title') - @if(!Auth::guest()) {{ Auth::user()->schoolNo }} {{ Auth::user()->name }} - @endif {{ config('app.name') }}</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav.png') }}">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
  
  <!-- Datatables Tools -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fc-3.3.0/fh-3.1.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
  <link href="{{asset('css/dataTable.css')}}" rel="stylesheet" type="text/css"/>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5650d922ae.js" crossorigin="anonymous"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
  <link href="{{asset('css/skin.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('css/spinner.css')}}" rel="stylesheet" type="text/css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

</head>