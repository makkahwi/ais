@extends('layouts.app')

@section('title')
  @include('results.title')s
@endsection

@section('modal.title')
  @include('results.title')s
@endsection

@section('header.title')
  @include('results.titles')
@endsection

@section('header.note')
  @if ($currentSem->resultsDone == 0)
    <h4 class="text-danger">Results Issuance Date {{$currentSem->results->format('d M Y')}}</h4>
  @else
    <h5 class="text-success">{{$currentSem->title}}, {{$currentSem->year->title}} Results already generated</h5>
  @endif
@endsection

@section('header')
  @can('generateResults', App\Models\marks::class)
    @if ($currentSem->resultsDone == 0)
      <a data-toggle="modal" data-target="#create-big-modal" class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> Create {{$currentSem->title}}, {{$currentSem->year->title}} @include('results.title')s</a>
    @endif
  @else
    {{$currentSem->title}}, {{$currentSem->year->title}}
  @endcan
@endsection

@can('generateResults', App\Models\marks::class)
  @include('results.create.modal')
@endcan

@section('content')
  @include('results.semTabs')
@endsection