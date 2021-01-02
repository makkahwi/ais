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