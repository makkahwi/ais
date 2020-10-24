<!DOCTYPE html>
<html>

    @include('layouts.htmlhead')

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

                        @yield('content')

                        <div class="text-center"></div>

                    </div>

                </div>

                @include('layouts.footer')

            </div>

        @endif

        <!-- Small Modals -->
        @include('layouts.modals.createModal')

        @include('layouts.modals.showModal')

        @include('layouts.modals.editModal')

        @include('layouts.modals.deleteModal')

        <!-- Big Modals -->
        @include('layouts.modals.createBigModal')

        @include('layouts.modals.showBigModal')

        @include('layouts.modals.editBigModal')

        @include('layouts.dataTables')

        @push('scripts') 
            <script type="text/javascript">

                $('form').on('submit',function(){
                    $('.submitbutton').hide();
                    $('.loader').show();
                });

            </script>
        @endpush
        
        @stack('scripts')

    </body>
                
    @include('layouts.tail')
</html>