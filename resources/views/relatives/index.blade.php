@extends('layouts.app')

@section('title')
    @include('relatives.title')s
@endsection

@section('modal.title')
    @include('relatives.title')s
@endsection

@section('header.title')
    @include('relatives.titles')
@endsection

@can('delete', App\Models\relatives::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('relatives.destroy', 1) }}">
    @endsection
@endcan

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @include('relatives.table')

            @include('relatives.show.modal')

            @can('update', App\Models\relatives::class)

                @include('relatives.edit.modal')

            @endcan
        </div>
    </div>
@endsection