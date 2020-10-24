@extends('layouts.app')

@section('title')
    @include('exams.title')s
@endsection

@section('modal.title')
    @include('exams.title')s
@endsection

@section('header.title')
    @include('exams.titles')
@endsection

@section('dataTableTitle')
    title: 'Exams Timetable | @foreach ($currentSem as $sem) {{$sem->title}}, {{$sem->year->title}} @endforeach | {{Auth::user()->schoolNo}}',
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

@can('delete', App\Models\exams::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('exams.destroy', 1) }}">
    @endsection
@endcan

@section('header')
    @can('create', App\Models\exams::class)
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('exams.title')s</a>
    @else
        @foreach ($currentSem as $currentS) {{$currentS->title}}, {{$currentS->year->title}} @endforeach
    @endcan
@endsection

@section('content')

    @include('exams.indexTabs')

    @include('exams.show.modal')

    @can('create', App\Models\exams::class)

        @include('exams.create.modal')

    @endcan

    @can('update', App\Models\exams::class)

        @include('exams.edit.modal')

    @endcan

@endsection