@extends('layouts.app')

@section('title')
  @include('days.title')s
@endsection

@section('modal.title')
  @include('days.title')s
@endsection

@section('header.title')
  @include('days.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\days::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('days.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\days::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('days.title')s</a>
  @else
    @foreach ($currentSem as $currentS) {{$currentS->title}}, {{$currentS->year->title}} @endforeach
  @endcan
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      @include('days.table')

      @include('days.show.modal')

      @can('create', App\Models\days::class)
        @include('days.create.modal')
      @endcan

      @can('update', App\Models\days::class)
        @include('days.edit.modal')
      @endcan
    </div>
  </div>
@endsection