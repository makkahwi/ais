@extends('layouts.app')

@section('title')
  @include('staff.title')
@endsection

@section('modal.title')
  @include('staff.title')
@endsection

@section('header.title')
  @include('staff.titles')
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

@can('delete', App\Models\staff::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('staff.destroy', 1) }}">
  @endsection
@endcan

@section('content')
  <div class="box box-primary">
    <div class="box-body">

      @include('staff.table')

      @include('staff.show.modal')

      @can('update', App\Models\staff::class)
        @include('staff.edit.modal')
      @endcan
      
    </div>
  </div>
@endsection