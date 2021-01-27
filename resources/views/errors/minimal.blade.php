<!DOCTYPE html>
<html>

  @include('layouts.htmlhead')

  <head>
    <style>
      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      body {
        height: 10vh;
        padding-top: 5%;
        background-color: #dbeeff
      }
    </style>
  </head>

  <body class="skin-blue sidebar-mini">
    <div class="content">

      <div class="clearfix"></div>

      @include('flash::message')
      @include('adminlte-templates::common.errors') 

      <div class="clearfix"></div>

      <div class="flex-center">

        <table>
          <tr>
            <td>
              <div class="flex-center">
                <a href="{{ url ('/dashboard') }}"><img src=" {{ asset('img/logo2.png') }}" width="180"></a>
              </div>
            </td>
          </tr>

          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>

          <tr class="flex-center theme-main">
            <td>
              <h3>@yield('code') | @yield('message')</h3>
            </td>
          </tr>

          <tr class="flex-center theme-main">
            <td>
              <h3><u><a href="{{ url ('/dashboard') }}">Back to Home Page  العودة إلى الصفحة الرئيسية</a></u></h3>
            </td>
          </tr>
          
        </table>
          
      </div>

      <div class="text-center"></div>
    </div>
  </body>
</html>