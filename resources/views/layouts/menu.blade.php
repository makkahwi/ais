<!-- Logo -->
<a href="{{ url ('/dashboard') }}" class="logo">
    <img style="margin:0% 25% 10% 25%;" src=" {{ asset('img/logo1.png') }}" width="50%">
</a>

<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="{{ url ('/dashboard') }}"><i class="fa fa-home"></i> <span>Home الصفحة الرئيسية</span></a>
</li>
    
@can ('viewAny', 'App\Models\statuses')
    <li class="treeview {{ Request::is('days*') ? 'active' : '' }} {{ Request::is('times*') ? 'active' : '' }} {{ Request::is('statuses*') ? 'active' : '' }} {{ Request::is('roles*') ? 'active' : '' }} {{ Request::is('users*') ? 'active' : '' }}">
        <a class="header" href="#">
            <i class="fa fa-thumb-tack"></i>
            <span>Static Data البيانات الثابتة</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

        <ul class="treeview-menu">

            @can ('viewAny', 'App\Models\statuses')

                <li class="{{ Request::is('statuses*') ? 'active' : '' }}">
                    <a href="{{ route('statuses.index') }}"><i class="fa fa-caret-right"></i> <span>@include('statuses.titles')</span></a>
                </li>

            @endcan

            @can ('viewAny', 'App\Models\days')

                <li class="{{ Request::is('days*') ? 'active' : '' }}">
                    <a href="{{ route('days.index') }}"><i class="fa fa-caret-right"></i> <span>@include('days.titles')</span></a>
                </li>

            @endcan

            @can ('viewAny', 'App\Models\times')

                <li class="{{ Request::is('times*') ? 'active' : '' }}">
                    <a href="{{ route('times.index') }}"><i class="fa fa-caret-right"></i> <span>@include('times.titles')</span></a>
                </li>

            @endcan

            @can ('viewAny', 'App\Models\roles')

                <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}"><i class="fa fa-caret-right"></i> <span>@include('roles.titles')</span></a>
                </li>

            @endcan

            @can ('viewAny', 'App\Models\users')

                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}"><i class="fa fa-times"></i> <span>@include('users.titles')</span></a>
                </li>

            @endcan

        </ul>
    </li>
@endcan

@if(Auth::user()->role_id == 6  && Auth::user()->status_id == 2)

    @can ('viewAny', 'App\Models\classrooms')

        <li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
            <a href="{{ route('classrooms.index') }}"><span>@include('classrooms.titles')</span></a>
        </li>

    @endcan

    @can ('viewAny', 'App\Models\student')

        <li class="{{ Request::is('students*') ? 'active' : '' }}">
            <a href="{{ route('students.index') }}"><i class="fas fa-user-graduate"></i> <span>Students Lists أسماء الطلاب</span></a>
        </li>

    @endcan
    
@endif


@can ('viewAny', 'App\Models\marks')
<li class="treeview {{ Request::is('sches*') ? 'active' : '' }} {{ Request::is('courses*') ? 'active' : '' }} {{ Request::is('marks*') ? 'active' : '' }} {{ Request::is('exams*') ? 'active' : '' }} {{ Request::is('results*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-graduation-cap"></i>
        <span>Academics التعليم</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span> 
    </a>

    <ul class="treeview-menu">

        @can ('viewAny', 'App\Models\courses')

            <li class="{{ Request::is('courses*') ? 'active' : '' }}">
                <a href="{{ route('courses.index') }}"><i class="fa fa-caret-right"></i> <span>@include('courses.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\sches')

            <li class="{{ Request::is('sches*') ? 'active' : '' }}">
                <a href="{{ route('sches.index') }}"><i class="fa fa-caret-right"></i> <span>@include('sches.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\marks')

            <li class="{{ Request::is('marks*') ? 'active' : '' }}">
                <a href="{{ route('marks.index') }}"><i class="fa fa-caret-right"></i> <span>@include('marks.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\exams')

            <li class="{{ Request::is('exams*') ? 'active' : '' }}">
                <a href="{{ route('exams.index') }}"><i class="fa fa-caret-right"></i> <span>@include('exams.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\roles')

            <li class="{{ Request::is('results*') ? 'active' : '' }}">
                <a href="{{ route('results.index') }}"><i class="fa fa-times"></i> <span>@include('results.titles')</span></a>
            </li>

        @endcan

    </ul>
    @endcan


@can ('viewAny', 'App\Models\staff')

<li class="treeview {{ Request::is('students*') ? 'active' : '' }} {{ Request::is('relatives*') ? 'active' : '' }} {{ Request::is('staff*') ? 'active' : '' }} {{ Request::is('applicants*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>People المستخدمون</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        @can ('viewAny', 'App\Models\student')
        
            <li class="{{ Request::is('students*') ? 'active' : '' }}">
                <a href="{{ route('students.index') }}"><i class="fa fa-caret-right"></i> <span>@include('students.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\relatives')

            <li class="{{ Request::is('relatives*') ? 'active' : '' }}">
                <a href="{{ route('relatives.index') }}"><i class="fa fa-caret-right"></i> <span>@include('relatives.titles')</span></a>
            </li>   

        @endcan

        @can ('viewAny', 'App\Models\staff')

            <li class="{{ Request::is('staff*') ? 'active' : '' }}">
                <a href="{{ route('staff.index') }}"><i class="fa fa-caret-right"></i> <span>@include('staff.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\student')

            <li class="{{ Request::is('applicants*') ? 'active' : '' }}">
                <a href="{{ route('applicants.index') }}"><i class="fa fa-caret-right"></i> <span>@include('applicants.titles')</span></a>
            </li>

        @endcan

    </ul>
</li>

@endcan

@can ('viewAny', 'App\Models\sems')

<li class="treeview {{ Request::is('years*') ? 'active' : '' }} {{ Request::is('sems*') ? 'active' : '' }} {{ Request::is('levels*') ? 'active' : '' }} {{ Request::is('classrooms*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-exchange-alt"></i>
        <span>Periodic Updates</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        @can ('viewAny', 'App\Models\years')

            <li class="{{ Request::is('years*') ? 'active' : '' }}">
                <a href="{{ route('years.index') }}"><i class="fa fa-caret-right"></i> <span>@include('years.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\sems')

            <li class="{{ Request::is('sems*') ? 'active' : '' }}">
                <a href="{{ route('sems.index') }}"><i class="fa fa-caret-right"></i> <span>@include('sems.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\levels')

            <li class="{{ Request::is('levels*') ? 'active' : '' }}">
                <a href="{{ route('levels.index') }}"><i class="fa fa-caret-right"></i> <span>@include('levels.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\classrooms')

            <li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
                <a href="{{ route('classrooms.index') }}"><i class="fa fa-caret-right"></i> <span>@include('classrooms.titles')</span></a>
            </li>

        @endcan
        
    </ul>
</li>

@endcan

@if(Auth::user()->status_id != 2)

    <li class="{{ Request::is('profile*') ? 'active' : '' }}">
        <a href="{{ url('/profile') }}"><i class="fa fa-user"></i> <span>@include('users.ptitles')</span></a>
    </li>

        
        @can ('viewAny', 'App\Models\marks')

            <li class="{{ Request::is('results*') ? 'active' : '' }}">
                <a href="{{ url('/results') }}"><i class="fa fa-poll"></i> <span>@include('results.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\marks')

            <li class="{{ Request::is('marks*') ? 'active' : '' }}">
                <a href="{{ url('/marks') }}"><i class="fa fa-poll"></i> <span>@include('marks.titles')</span></a>
            </li>

        @endcan

@endif

@can ('upgrade', 'App\Models\student')

    <li class="{{ Request::is('upgradestudents*') ? 'active' : '' }}">
        <a href="{{ url('/upgradestudents') }}"><i class="fa fa-arrow-up"></i> <span>Upgrade Students</span></a>
    </li>

@endcan

@can ('viewAny', 'App\Models\attendances')

<li class="{{ Request::is('attendances*') ? 'active' : '' }}">
    <a href="{{ url ('/attendances') }}"><i class="fa fa-fingerprint"></i> <span>@include('attendances.titles')</span></a>
</li>

@endcan

@can ('viewAny', 'App\Models\studentsFinancials')

<li class="treeview {{ Request::is('sFinancials*') ? 'active' : '' }} {{ Request::is('sfCategories*') ? 'active' : '' }} {{ Request::is('sfDiscounts*') ? 'active' : '' }} {{ Request::is('calculator*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-wallet"></i>
        <span>Financials الشؤون المالية</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        @can ('viewAny', 'App\Models\studentsFinancials')

            <li class="{{ Request::is('sFinancials*') ? 'active' : '' }}">
                <a href="{{ url ('/sFinancials') }}"><i class="fa fa-caret-right"></i> <span>@include('studentsFinancials.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\studentsFinancialsCategories')

            <li class="{{ Request::is('sfCategories*') ? 'active' : '' }}">
                <a href="{{ url ('/sfCategories') }}"><i class="fa fa-caret-right"></i> <span>@include('studentsFinancialsCategories.titles')</span></a>
            </li>

        @endcan

        @can ('viewAny', 'App\Models\studentsFinancialsDiscounts')

            <li class="{{ Request::is('sfDiscounts*') ? 'active' : '' }}">
                <a href="{{ url ('/sfDiscounts') }}"><i class="fa fa-caret-right"></i> <span>@include('studentsFinancialsDiscounts.titles')</span></a>
            </li>

        @endcan
        
        <li class="{{ Request::is('calculator*') ? 'active' : '' }}">
            <a href="{{ url ('/calculator') }}"><i class="fa fa-caret-right"></i> <span>@include('calculator.titles')</span></a>
        </li>
    </ul>

</li>

@endcan

@can ('viewAny', 'App\Models\users')

<li class="treeview">
    <a href="#">
        <span>Features Soon to Have<br>خصائص ستتوفر قريباً</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        <li>
            <a href="#"> <span>Financials الشؤون المالية</span></a>
        </li>

        <li>
            <a href="#"> <span>Online Library المكتبة الإلكترونية</span></a>
        </li>

        <li>
            <a href="#"> <span>E-Learning التعليم الإلكتروني</span></a>
        </li>

        <li>
            <a href="#"> <span>School Clubs أندية المدرسة</span></a>
        </li>

        @can ('viewAny', 'App\Models\classrooms')

            <li class="">
                <a href="#"> <span>Administration الشؤون الإدارية</span></a>
            </li>

        @endcan
    </ul>

</li>

@endcan

<!--@if(Auth::user()->status_id == 2)
    <li class="{{ Request::is('evaluation*') ? 'active' : '' }}">
        <a href="{{ url('evaluate') }}"><i class="fa fa-star"></i> <span>System Evaluation تقييم النظام</span></a>
    </li>
@endif-->

<li class="treeview {{ Request::is('Docadmin*') ? 'active' : '' }} {{ Request::is('Docmanagement*') ? 'active' : '' }} {{ Request::is('Docstaff*') ? 'active' : '' }} {{ Request::is('Docstudents*') ? 'active' : '' }} {{ Request::is('Docapplicants*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-book"></i>
        <span>Documentation دليل النظام</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        
        <li class="{{ Request::is('Docapplicants*') ? 'active' : '' }}">
            <a href="{{ url('/Docapplicants') }}"><i class="fa fa-caret-right"></i> <span>Applicants المتقدمين</span></a>
        </li>

        @can ('view', marks::class)

            <li class="{{ Request::is('Docstudents*') ? 'active' : '' }}">
                <a href="{{ url('/Docstudents') }}"><i class="fa fa-caret-right"></i> <span>Students الطلاب</span></a>
            </li>

        @endcan

        @can ('view', student::class)

            <li class="{{ Request::is('Docstaff*') ? 'active' : '' }}">
                <a href="{{ url('/Docstaff') }}"><i class="fa fa-caret-right"></i> <span>Staff الموظفين</span></a>
            </li>

        @endcan
        
        @can ('view', levels::class)

            <li class="{{ Request::is('Docmanagement*') ? 'active' : '' }}">
                <a href="{{ url('/Docmanagement') }}"><i class="fa fa-caret-right"></i> <span>Management الإدارة</span></a>
            </li>

        @endcan
        
        @can ('view', roles::class)

            <li class="{{ Request::is('Docadmin*') ? 'active' : '' }}">
                <a href="{{ url('/Docadmin') }}"><i class="fa fa-caret-right"></i> <span>Sys Admin مدير النظام</span></a>
            </li>

        @endcan

    </ul>
</li>
