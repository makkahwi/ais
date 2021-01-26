@extends('layouts.app')

@section('title')
  @include('students.title')
@endsection

@section('modal.title')
  @include('students.title')
@endsection

@section('header.title')
  @include('students.titles')
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

@can('delete', App\Models\student::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('students.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  {{$currentSem ->title}}, {{$currentSem ->year->title}}
@endsection

@section('content')
    
  @include('students.indexTabs')

  @include('students.show.modal')

  @can('update', App\Models\student::class)
    @include('students.edit.modal')
  @endcan

@endsection