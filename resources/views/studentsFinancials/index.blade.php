@extends('layouts.app')

@section('title')
    @include('studentsFinancials.title')
@endsection

@section('modal.title')
    @include('studentsFinancials.title')
@endsection

@section('header.title')
    @include('studentsFinancials.titles')
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

@can('delete', App\Models\studentsFinancials::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('studentsFinancials.destroy', 1) }}">
    @endsection
@endcan

@can('create', App\Models\studentsFinancials::class)
    @section('header')
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('studentsFinancials.title')</a>
    @endsection
@endcan

@section('content')
    
    @include('studentsFinancials.indexTabs')

    @include('studentsFinancials.show.modal')

    @can('create', App\Models\studentsFinancials::class)

        @include('studentsFinancials.create.modal')

    @endcan

    @can('update', App\Models\studentsFinancials::class)

        @include('studentsFinancials.edit.modal')

    @endcan

@endsection