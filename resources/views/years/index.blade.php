@extends('layouts.app')

@section('title')
    @include('years.title')s 
@endsection

@section('modal.title')
    @include('years.title')s
@endsection

@section('header.title')
    @include('years.titles')
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

@section('header')
    @can('create', App\Models\years::class)
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('years.title')s</a>
    @else
        {{$currentSem ->title}}, {{$currentSem ->year->title}}
    @endcan
@endsection

@can('delete', App\Models\years::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('years.destroy', 1) }}">
    @endsection
@endcan

@section('content')

    <div class="box box-primary">
        <div class="box-body">

            @include('years.table')

            @include('years.show.modal')

            @can('create', App\Models\years::class)

                @include('years.create.modal')

            @endcan

            @can('update', App\Models\years::class)
        
                @include('years.edit.modal')

            @endcan
            
        </div>
    </div>

@endsection