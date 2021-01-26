@extends('layouts.app')

@section('title')
  @include('studentsFinancialReports.title')
@endsection

@section('modal.title')
  @include('studentsFinancialReports.title')
@endsection

@section('header.title')
  @include('studentsFinancialReports.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
  $('.sem-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.record-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.level-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.classroom-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.student-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.due-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
  $('.discount-filter').change(function(){
    table.column($(this).data('column'))
    .search($(this).val())
    .draw();
  });
@endsection

@section('dataTableOptions')
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      @include('studentsFinancialReports.table')
    </div>
  </div>
@endsection