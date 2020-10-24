@extends('layouts.app')

@section('title')
    @include('users.title')
@endsection

@section('modal.title')
    @include('users.title')
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
@endsection

@can('delete', App\Models\users::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('users.destroy', 1) }}">
    @endsection
@endcan

@section('header.title')
    @if (Auth::user()->role_id < 4 )
        @include('users.titles')
    @endif
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @if (Auth::user()->role_id < 4 )

                @include('users.table')

                @include('users.show.modal')

                @can('update', App\Models\users::class)

                    @include('users.edit.modal')

                @endcan

            @else

                @include('users.profile.profile')

            @endif
        </div>
    </div>
@endsection