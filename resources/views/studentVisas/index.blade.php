@extends('layouts.app')

@section('title')
  @include('studentVisas.title')
@endsection

@section('modal.title')
  @include('studentVisas.title')
@endsection

@section('header.title')
  @include('studentVisas.titles')
@endsection

@section('dataTableTitle')
  title: 'Visas Timetable | {{Auth::user()->schoolNo}}',
@endsection

@section('dataTableColumns')
  exportOptions: {
    columns: [ 0, 1, 2, 3, 4],
  },
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\studentVisas::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('studentVisas.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\studentVisas::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('studentVisas.title')s</a>
  @else
    {{$currentSem->title}}, {{$currentSem->year->title}}
  @endcan
@endsection

@section('content')

  @include('studentVisas.table')

  @include('studentVisas.show.modal')

  @can('create', App\Models\studentVisas::class)

    @include('studentVisas.create.modal')

  @endcan

  @can('update', App\Models\studentVisas::class)

    @include('studentVisas.edit.modal')

  @endcan

@endsection