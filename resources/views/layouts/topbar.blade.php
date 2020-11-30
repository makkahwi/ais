<header class="main-header">

    <nav class="navbar navbar-static-top" role="navigation">
        
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- <a href="{{ url ('/notifications') }}" class="bell">
            <span><i class="fa fa-bell"></i></span>
            <div class="pull-right"><div style="position: absolute; padding:3px; border-radius:100%; background-color: red;"></div></div>
        </a> -->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="bar-title">
                    <h5 class="sysdate theme-main" style="margin-top: 12%;"><b>{{now()->format('h:i a - d M Y')}}</b></h5>
                </li>

                @if (!Auth::guest())

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('img/logo2.png') }}"class="user-image" alt="User Image"/>
                        <span class="hidden-xs" style="color:#004394;"><b>{{ Auth::user()->name }}</b></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ asset('img/logo1.png') }}" class="img-circle" alt="User Image"/>
                            <p>
                                {{ Auth::user()->schoolNo }}
                                <small>On board since {{ Auth::user()->created_at->format('M Y') }}</small>
                            </p>
                        </li>
                        <li class="user-footer" style="background-color: #008acf;">
                            @if(Auth::user()->role_id > 5)
                                <div class="pull-left">
                                    <a href="{{url('/profile')}}" class="btn btn-success btn-flat">Profile<br>الملف الشخصي</a>
                                </div>
                            @endif

                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-danger btn-flat"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout<br>تسجيل الخروج
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                </li>

                @endif

            </ul>
        </div>
        
    </nav>
</header>