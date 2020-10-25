<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#004394" />

        <title>@include('titles')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav.png') }}">

        <link href="{{asset('css/welcome.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Account Home صفحة النظام الرئيسية</a>
                    @else
                        <a href="{{ route('login') }}">Login تسجيل الدخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">New Student App التقديم لطالب جديد</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="col-md-12">
                    <img src="{{ asset('img/logo1.png') }}" width="30%">
                    <h1 class="bigtitle">@include('titles')</h1>
                    <h2 class="smalltitle">@include('titles')</h2>
                </div>             
            </div>
        </div>

            
        <footer >
            <strong class="footer">All rights reserved for <a target="_blank" href="https://aqsa.edu.my">{{ config('app.sname') }}</a> © <script>document.write( new Date().getFullYear() );</script> | Built by <a target="_blank" href="https://www.arromi.net">Arromi <i class="fa fa-paint-brush"></i> Cratives</a>
            [ <a target="_blank" href="https://aqsa.edu.my/website-privacy/">Website Privacy</a> | <a target="_blank" href="https://aqsa.edu.my/personal-data-protection-policy/"> Data Protection</a> | <a target="_blank" href="https://aqsa.edu.my/terms-conditions/"> Terms & Conditions</a> ]</strong>
        </footer>

    </body>
</html>