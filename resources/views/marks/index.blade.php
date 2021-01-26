@extends('layouts.app')

@section('title')
  @include('marks.title')s
@endsection

@section('modal.title')
  @include('marks.title')s
@endsection

@section('header.title')
  @include('marks.titles')
@endsection

@section('header.note')
  @if ($currentSem->resultsDone == 0)
    <h4 class="text-danger">Results Issuance Date {{$currentSem->results->format('d M Y')}}</h4>
  @else
    <h5 class="text-success">{{$currentSem->title}}, {{$currentSem->year->title}} Results already generated</h5>
  @endif
@endsection

@can('delete', App\Models\markstypes::class)
  @section('deleteModal')
    <form method="post" action="{{ route ('markstypes.destroy', 1) }}">
  @endsection
@endcan

@section('header')
  @can('create', App\Models\markstypes::class)
    <a data-toggle="modal" data-target="#show-big-modal" class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px"><i class="far fa-eye"></i> Show @include('marks.title')s Types</a>
  @else
    {{$currentSem->title}}, {{$currentSem->year->title}}
  @endcan
@endsection

@section('content')

  @include('marks.classroomTabs')

  @include('marks.show.modal')

  @include('markstypes.index')

  @can('create', App\Models\marks::class)
    @include('marks.create.modal')
  @endcan

  @can('update', App\Models\marks::class)
    @include('marks.edit.modal')
  @endcan

  @can('create', App\Models\markstypes::class)
    @include('markstypes.create.modal')
  @endcan

  @can('update', App\Models\markstypes::class)
    @include('markstypes.edit.modal')
  @endcan
  
  @include('marks.appealModal')

@endsection