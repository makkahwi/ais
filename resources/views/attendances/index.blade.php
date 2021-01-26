@extends('layouts.app')

@section('title')
  @include('attendances.title')s
@endsection

@section('modal.title')
  Students @include('attendances.title')s
@endsection

@section('header.title')
  @include('attendances.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\attendances::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('attendances.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\attendances::class)
    <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New Students @include('attendances.title')s</a>
  @else
    {{$currentSem ->title}}, {{$currentSem ->year->title}}
  @endcan
@endsection

@section('content')

  @include('attendances.indexTabs')

  @include('attendances.show.modal')

  @can('create', App\Models\attendances::class)

    @include('attendances.create.modal')

  @endcan

  @can('update', App\Models\attendances::class)

    @include('attendances.edit.modal')

  @endcan

@endsection