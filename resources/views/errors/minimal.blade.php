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
        </style>
    </head>

    <body class="skin-blue sidebar-mini">
        @if (!Auth::guest())

            <div class="wrapper">

                @include('layouts.topbar')

                @include('layouts.sidebar')

                <div class="content-wrapper">
                    <section class="content-header">
                        <h1 class="theme-main col-md-8">
                            @yield('header.title')
                        </h1>

                        <h4 class="col-md-4">
                            <div class="pull-right">
                                <div class="btn-group row">
                                    @yield('header')
                                </div>
                            </div>
                        </h4>
                    </section>

                    <div class="content">

                        <div class="clearfix"></div>

                        @include('flash::message')
                        @include('adminlte-templates::common.errors') 

                        <div class="clearfix"></div>

                        <div class="flex-center">

                            <table>
                                <tr>
                                    <td colspan="2">
                                        <div class="flex-center">
                                            <a href="{{ url ('/home') }}"><img src=" {{ asset('img/logo2.png') }}" width="180"></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr><td></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td></tr>

                                <tr>
                                    <td class="flex-center">
                                        <div class="theme-main">
                                            <h2>@yield('code')</h2>
                                        </div>
                                    </td>
                                    <td class="flex-center">
                                        <div class="theme-main">
                                            <h3>@yield('message')</h3>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                                
                        </div>

                        <div class="text-center"></div>
                    </div>
                </div>

                @include('layouts.footer')

            </div>

        @endif

    </body>
                
    @include('layouts.tail')
</html>