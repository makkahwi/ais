@extends('layouts.app')

@section('title')
    @include('studentsFinancialsCategories.title')
@endsection

@section('modal.title')
    @include('studentsFinancialsCategories.title')
@endsection

@section('header.title')
    @include('studentsFinancialsCategories.titles')
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

@can('delete', App\Models\studentsFinancialsCategories::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('sfCategories.destroy', 1) }}">
    @endsection
@endcan

@can('create', App\Models\studentsFinancialsCategories::class)
    @section('header')
        <div class='btn-group'>
            <a data-toggle="modal" data-target="#create-big-modal" class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New Categories</a>
            
            @can('create', App\Models\batches::class)
                <a data-toggle="modal" data-target="#create-modal" class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New Batch</a>
            @endcan
        </div>
    @endsection
@endcan

@section('content')
    
    @include('studentsFinancialsCategories.indexTabs')

    @include('studentsFinancialsCategories.show.modal')

    @can('create', App\Models\studentsFinancialsCategories::class)

        @include('studentsFinancialsCategories.create.modal')

    @endcan

    @can('update', App\Models\studentsFinancialsCategories::class)

        @include('studentsFinancialsCategories.edit.modal')

    @endcan

    @can('create', App\Models\batches::class)

        @include('studentsFinancialsCategories.batches.modal')

    @endcan

@endsection