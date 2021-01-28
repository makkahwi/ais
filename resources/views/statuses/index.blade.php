@extends('layouts.app')

@section('title')
@include('statuses.title')es
@endsection

@section('modal.title')
  @include('statuses.title')es
@endsection

@section('header.title')
  @include('statuses.titles')
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

@can('delete', App\Models\statuses::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('statuses.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\statuses::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('statuses.title')</a>
  @else
    {{$currentSem->title}}, {{$currentSem->year->title}}
  @endcan
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      @include('statuses.table')

      @include('statuses.show.modal')

      @can('create', App\Models\statuses::class)
        @include('statuses.create.modal')
      @endcan

      @can('update', App\Models\statuses::class)
        @include('statuses.edit.modal')
      @endcan
    </div>
  </div>
@endsection