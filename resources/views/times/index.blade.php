@extends('layouts.app')

@section('title')
  @include('times.title')s
@endsection

@section('modal.title')
  @include('times.title')s
@endsection

@section('header.title')
  @include('times.titles')
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

@can('delete', App\Models\times::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('times.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\times::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('times.title')s</a>
  @else
    @foreach ($currentSem as $currentS) {{$currentS->title}}, {{$currentS->year->title}} @endforeach
  @endcan
@endsection

@section('content')

  <div class="box box-primary">
    <div class="box-body">
      @include('times.table')

      @include('times.show.modal')

      @can('create', App\Models\times::class)
        @include('times.create.modal')
      @endcan

      @can('update', App\Models\times::class)
        @include('times.edit.modal')
      @endcan
    </div>
  </div>

@endsection