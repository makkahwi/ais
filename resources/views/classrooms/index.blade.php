@extends('layouts.app')

@section('title')
  @include('classrooms.title')s
@endsection

@section('modal.title')
  @include('classrooms.title')s
@endsection

@section('header.title')
  @include('classrooms.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
  exportOptions: {
    columns: [ 0, 1, 2, 3, 4, 6, 7, 8, 9 ],
  },
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\classrooms::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('classrooms.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\classrooms::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('classrooms.title')s</a>
  @else
    {{$currentSem ->title}}, {{$currentSem ->year->title}}
  @endcan
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">

      @include('classrooms.table')

      @include('classrooms.show.modal')

      @can('create', App\Models\classrooms::class)

        @include('classrooms.create.modal')

      @endcan

      @can('update', App\Models\classrooms::class)

        @include('classrooms.edit.modal')

      @endcan
    </div>
  </div>
@endsection