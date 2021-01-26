<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="theme-color" content="#004394" />

  <title>@include('titles')</title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav.png') }}">
  <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="{{ asset('img/fav.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="{{asset('welcome/js/venobox/venobox.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b6ab88d95f.js" crossorigin="anonymous"></script>
  <link href="{{asset('welcome/js/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('welcome/css/style.css')}}" rel="stylesheet">

  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>

  <!-- ======= Header Section ======= -->
  <section class="section pageHeader p-5" id="pageHeader">
    <div class="container text-center text-light">
      <div class="row">
        <div class="col-md-12">
          <img class="logo" src="{{asset('welcome/img/logo.png')}}">
        </div>
      </div>

      <div class="col-md-12 p-3">
        <h1>
          @include('titles')
        </h1>

        <h4 class="p-3 tagline">
          Portal for <a target="_blank" href="https://aqsa.edu.my">Al-Aqsa Integrated School - Malaysia</a> Students & Staff
          <br>بوابة <a target="_blank" href="https://aqsa.edu.my/ar">مدرسة الأقصى التكاملية - ماليزيا</a> للطلبة والموظفين
        </h4>

        @if (Route::has('login'))
          <div class="top-right links">
            @auth
              <a class="btn py-3 px-5 mt-1 text-light" href="{{ url('/dashboard') }}"><b>Account Home صفحة النظام الرئيسية</b></a>
              <a class="btn py-3 px-5 mt-1 text-light" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout تسجيل الخروج</b></a>
              <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
                @csrf
              </form>
            @else
              <a class="btn py-3 px-5 mt-1 text-light" href="{{ route('login') }}"><b>Login تسجيل الدخول</b></a>

              @if (Route::has('register'))
                <a class="btn py-3 px-5 mt-1 text-light" href="{{ route('register') }}"><b>New Students Application التقديم لطالب جديد</b></a>
                <!-- <a class="btn py-3 px-5 mt-1 text-light" href="#about"><b>Job Application التقديم للعمل</b></a> -->
              @endif
            @endauth
          </div>
        @endif

        
        <h4>
          <br><a href="#header"><i class="fas fa-chevron-down"></i></a>
        </h4>

      </div>
    </div>
  </section>

  <!-- ======= Navbar ======= -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <div class="text-white"><img src="{{asset('welcome/img/logo-nav.png')}}" alt=""> @include('titles')</div>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @if (Route::has('login'))
            @auth
              <li><a href="{{ url('/dashboard') }}">Account Home صفحة النظام الرئيسية</a></li>
              <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout تسجيل الخروج</a></li>
            @else
              <li><a href="{{ route('login') }}">Login تسجيل الدخول</a></li>

              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">New Students Application التقديم لطالب جديد</a></li>
                <!-- <li><a href="#">Job Application التقديم للعمل</a></li> -->
              @endif
            @endauth
          @endif
        </ul>
      </nav>

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a target="_blank" href="https://www.facebook.com/AISM2018/"><i class="fa fa-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/alAqsaIntegrated"><i class="fa fa-instagram"></i></a>
        <a target="_blank" href="mailto:principal@aqsa.edu.my"><i class="fa fa-envelope"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCY-cDzyntwP3AQUvEVbsX-A"><i class="fa fa-youtube"></i></a>
        <a target="_blank" href="http://wasap.my/601128884817"><i class="fa fa-whatsapp"></i></a>
      </nav>
    </div>
  </header>

  <main id="main">

  <!-- ======= About Section ======= -->
  <section class="section py-5" id="about">
    <div class="container text-center">
      <h1>
        About Al-Aqsa Portal
      </h1>

      <p class="my-5">
        <h5>
          It's a portal for Al-Aqsa staff to input multiple types of data of which students could review. It does ease the communication between students & staff, and ease the management of large data segments.
        </h5>
      </p>

      <div class="row my-5">
        <div class="stats-col col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">9</span> Types of Users
          </div>
        </div>

        <div class="stats-col col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">200</span> System Users
          </div>
        </div>

        <div class="stats-col col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">400</span> Records per Day
          </div>
        </div>

        <div class="stats-col col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">33,000</span> Records per Semester
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Gadget Section ======= -->
  <section class="section py-5 gadget">
    <div class="container text-center text-light">
      <h1 class="my-5">
        A Responsive Portal
      </h1>

      <p>
        <h5>
          Our Portal is suitable to browse using desktops, laptops, tablets and mobile phones, with future plans to build dedicated platforms for the various devices like mobile phone application.
        </h5>
      </p>
      <img src="{{asset('welcome/img/gadgets.png')}}" width=70%>
    </div>
  </section>

  <!-- ======= Functions Section ======= -->
  <section class="section py-5" id="functions">
    <div class="container text-center">
      <h1 class="my-5">
        Functions
      </h1>

      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fa fa-edit"></span>
              </div>
            </div>

            <div>
              <h2>
                Apply
              </h2>

              <p>
                A system for new students to apply to school and to follow the updates. Same goes for those who want to apply for a job vacancy.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fa fa-graduation-cap"></span>
              </div>
            </div>

            <div>
              <h2>
                Academic Data
              </h2>

              <p>
                Allows parents to follow the earned marks, get the transcript of semesters, check the classes' and exams' timetables.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fa fa-user"></span>
              </div>
            </div>

            <div>
              <h2>
                Biodata
              </h2>

              <p>
                Students' & Staff biodata storage enables them to get student / emplyoment confirmation letter automatically anytime.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fas fa-fingerprint"></span>
              </div>
            </div>

            <div>
              <h2>
                Attendance Data
              </h2>

              <p>
                School management daily inserts the attendance data for all students as part of performance tracking.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fa fa-dollar-sign"></span>
              </div>
            </div>

            <div>
              <h2>
                Financial Records
              </h2>

              <p>
                Students' financial detalied records of required payments, approved discounts and payments already made.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="card border-0">
            <div>
              <div class="feature-icon m-3">
                <span class="fas fa-tasks"></span>
              </div>
            </div>

            <div>
              <h2>
                Staff System
              </h2>
              <p>
                An engagement framework between staff and school management to review performance, submit application ...etc
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer class="footer foot p-2">
    <div class="container text-center text-light">
      <div class="row">
        <div class="col-lg-6 col-xs-12 text-lg-left">
          <p class="copyright-text text-light">
            <strong>All rights reserved for <a target="_blank" href="https://aqsa.edu.my">Al-Aqsa Integrated School - Malaysia</a> &copy; <script>document.write( new Date().getFullYear() );</script></strong>
          </p>
          <div>
            Built by <a target="_blank" href="https://www.arromi.net">Arromi <i class="fa fa-paint-brush"></i> Cratives</a>
          </div>
        </div>

        <div class="col-lg-6 col-xs-12 text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a target="_blank" href="https://aqsa.edu.my/website-privacy/">Website Privacy</a>
            </li>

            <li class="list-inline-item">
              <a target="_blank" href="https://aqsa.edu.my/personal-data-protection-policy/"> Data Protection</a>
            </li>

            <li class="list-inline-item">
              <a target="_blank" href="https://aqsa.edu.my/terms-conditions/"> Terms & Conditions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <a class="scrolltop text-center" href="#"><h4><i class="fa fa-angle-up"></i></h4></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('welcome/js/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('welcome/js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('welcome/js/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('welcome/js/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('welcome/js/tether/js/tether.min.js')}}"></script>
  <script src="{{asset('welcome/js/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('welcome/js/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('welcome/js/lockfixed/jquery.lockfixed.min.js')}}"></script>
  <script src="{{asset('welcome/js/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('welcome/js/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('welcome/js/hoverIntent/hoverIntent.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('welcome/js/main.js')}}"></script>

</body>

</html>