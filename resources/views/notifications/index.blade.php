@extends('layouts.app')

@section('title')
    @include('notifications.title')s
@endsection

@section('modal.title')
    @include('notifications.title')s
@endsection

@section('header.title')
    @include('notifications.titles')
@endsection

@section('header')
    @if(Auth::user()->role_id < 5 )
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('notifications.title')s</a>
    @else
        @foreach ($currentSem as $currentS) {{$currentS->title}}, {{$currentS->year->title}} @endforeach
    @endif
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <h4 class="theme-main">New @include('notifications.titles') الجديدة</h4>
            @include('notifications.nTable')
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-body">
            <h4 class="theme-main">Old @include('notifications.titles') القديمة</h4>
            @include('notifications.oTable')
        </div>
    </div>

    @include('notifications.show.modal')

    @include('notifications.create.modal')

    @include('notifications.edit.modal')
@endsection