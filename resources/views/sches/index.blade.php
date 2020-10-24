@extends('layouts.app')

@section('title')
    @include('sches.title')s
@endsection

@section('modal.title')
    Classes
@endsection

@section('header.title')
    @include('sches.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@section('dataTableOptions')
    paging: false,

    length: false,

    bInfo: false,

    searching: false,
@endsection

@can('delete', App\Models\sches::class)
    @section('deleteModal')
            <form method="post" action="{{ route ('sches.destroy', 1) }}">
    @endsection
@endcan

@section('header')
    @can('create', App\Models\sches::class)
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> <i class="fa fa-plus"></i> New Classes</a>
    @else
        @foreach ($currentSem as $sem) {{$sem->title}}, {{$sem->year->title}} @endforeach
    @endcan
@endsection

@section('content')

    @if (Auth::user()->role_id < 4 )

        @include('sches.indexTabs')

        @include('sches.indexNext')
    
    @elseif (Auth::user()->role_id == 7 )

        @include('sches.indexTabs')

    @else

        @section('section-title')

            <div class="col-md-12">
                <h4 class="theme-main"><b>Your supervised classrooms' timetables جدول الحصص للشعب التي تشرف عليها</b></h4>
            </div>

        @endsection

        @include('sches.indexTabs')
                    
        @include('sches.tableT')
                    
    @endif

    @include('sches.show.modal')

    @can('create', App\Models\sches::class)

        @include('sches.create.modal')

    @endcan

    @can('update', App\Models\sches::class)

        @include('sches.edit.modal')

    @endcan

@endsection