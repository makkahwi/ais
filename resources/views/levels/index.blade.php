@extends('layouts.app')

@section('title')
@include('levels.title')s
@endsection

@section('modal.title')
  @include('levels.title')s
@endsection

@section('header.title')
  @include('levels.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\levels::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('levels.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\levels::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('levels.title')s</a>
  @else
    {{$currentSem ->title}}, {{$currentSem ->year->title}}
  @endcan
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      @include('levels.table')

      @include('levels.show.modal')

      @can('create', App\Models\levels::class)
        @include('levels.create.modal')
      @endcan

      @can('update', App\Models\levels::class)
        @include('levels.edit.modal')
      @endcan
    </div>
  </div>
@endsection