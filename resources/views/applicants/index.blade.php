@extends('layouts.app')

@section('title')
    @include('applicants.title')
@endsection

@section('modal.title')
    @include('applicants.title')
@endsection

@section('header.title')
    @include('applicants.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@section('header')
    @foreach ($currentSem as $sem) {{$sem->title}}, {{$sem->year->title}} @endforeach
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @include('applicants.table')

            @include('applicants.show.modal')
        </div>
    </div>
@endsection