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

@section('header')
    @if(Auth::user()->role_id < 4 )
        @foreach($currentSem as $sem)
        @if($sem->results <= today())
        @if($sem->title == "Semester 1")
            <a id="semresults" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> Generate Semester @include('results.title')s</a>
        @else
            <a id="yearesults" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> <i class="fa fa-plus"></i> Generate Semester & Year @include('results.title')s</a>
        @endif
        @endif
        @endforeach
    @endif
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @if (Auth::user()->role_id < 4 )

                @include('results.indexP')

            @elseif (Auth::user()->role_id < 7 )
            
                @include('results.tableT')

            @else
                
                @include('results.indexS')

            @endif

            @include('results.show.modal')

            @include('results.create.modal')

            @include('results.edit.modal')
        </div>
    </div>

    @include('results.generate')
@endsection