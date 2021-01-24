@extends('layouts.app')

@section('title')
@include('sems.title')s
@endsection

@section('modal.title')
    @include('sems.title')s
@endsection

@section('header.title')
    @include('sems.titles')
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

@can('delete', App\Models\sems::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('sems.destroy', 1) }}">
    @endsection
@endcan

@section('header')
    @can('create', App\Models\sems::class)
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('sems.title')s</a>
    @else
        {{$currentSem ->title}}, {{$currentSem ->year->title}}
    @endcan
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @include('sems.table')
        </div>
    </div>

    @include('sems.show.modal')

    @can('create', App\Models\sems::class)

        @include('sems.create.modal')

    @endcan

    @can('update', App\Models\sems::class)

        @include('sems.edit.modal')

    @endcan
@endsection