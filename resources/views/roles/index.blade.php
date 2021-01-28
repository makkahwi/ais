@extends('layouts.app')

@section('title')
@include('roles.title')s
@endsection

@section('modal.title')
  @include('roles.title')s
@endsection

@section('header.title')
  @include('roles.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\roles::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('roles.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\roles::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('roles.title')s</a>
  @else
    {{$currentSem->title}}, {{$currentSem->year->title}}
  @endcan
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      @include('roles.table')

      @include('roles.show.modal')

      @can('create', App\Models\roles::class)
        @include('roles.create.modal')
      @endcan

      @can('update', App\Models\roles::class)
        @include('roles.edit.modal')
      @endcan
    </div>
  </div>
@endsection