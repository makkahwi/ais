@extends('layouts.app')

@section('title')
  @include('studentsFinancialsDiscounts.title')
@endsection

@section('modal.title')
  @include('studentsFinancialsDiscounts.title')
@endsection

@section('header.title')
  @include('studentsFinancialsDiscounts.titles')
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

@can('delete', App\Models\studentsFinancialsDiscounts::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('sfDiscounts.destroy', 1) }}">
  @endsection
@endcan

@can('create', App\Models\studentsFinancialsDiscounts::class)
  @section('header')
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('studentsFinancialsDiscounts.title')</a>
  @endsection
@endcan

@section('content')
  
  <div class="box box-primary">
    <div class="box-body">
      @include('studentsFinancialsDiscounts.table')
    </div>
  </div>

  @include('studentsFinancialsDiscounts.show.modal')

  @can('create', App\Models\studentsFinancialsDiscounts::class)
    @include('studentsFinancialsDiscounts.create.modal')
  @endcan

  @can('update', App\Models\studentsFinancialsDiscounts::class)
    @include('studentsFinancialsDiscounts.edit.modal')
  @endcan

@endsection