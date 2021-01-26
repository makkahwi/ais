@extends('layouts.app')

@section('title')
  @include('studentsFinancials.title')
@endsection

@section('modal.title')
  @include('studentsFinancials.title')
@endsection

@section('header.title')
  @include('studentsFinancials.titles')
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

@can('delete', App\Models\studentsFinancials::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('sFinancials.destroy', 1) }}">
  @endsection
@endcan

@section('header')

  <div class='btn-group'>

    @can('create', App\Models\studentsPayments::class)
      <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-left" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New Payments</a>
    @endcan
    
    @can('create', App\Models\studentsFinancials::class)
      <a data-toggle="modal" data-target="#create-big-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New Dues</a>
    @endcan
  </div>

@endsection

@section('content')
  
  @include('studentsFinancials.indexTabs')

  @include('studentsFinancials.dues.show.modal')

  @can('create', App\Models\studentsFinancials::class)
    @include('studentsFinancials.dues.create.modal')
  @endcan

  @can('update', App\Models\studentsFinancials::class)
    @include('studentsFinancials.dues.edit.modal')
  @endcan

  @include('studentsFinancials.payments.show.modal')

  @can('create', App\Models\studentsFinancials::class)
    @include('studentsFinancials.payments.create.modal')
  @endcan

  @can('update', App\Models\studentsFinancials::class)
    @include('studentsFinancials.payments.edit.modal')
  @endcan

@endsection