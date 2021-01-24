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

@section('header.note')
  @if ($currentSem->resultsDone == 0)
    <h4 class="text-danger">Results Issuance Date {{$currentSem->results->format('d M Y')}}</h4>
  @else
    <h5 class="text-success">{{$currentSem->title}}, {{$currentSem->year->title}} Results already generated</h5>
  @endif
@endsection

@section('dataTableTitle')
  title: 'Exams Timetable | {{$currentSem ->title}}, {{$currentSem ->year->title}} | {{Auth::user()->schoolNo}}',
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
    {{$currentSem->title}}, {{$currentSem->year->title}}
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