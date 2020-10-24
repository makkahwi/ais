@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

        <div class="box box-primary">
            <div class="box-body">
                @if (Auth::user()->role_id < 8 )

                    @include('home.indexa')

                @else

                    @include('home.indexb')
                    
                @endif
            </div>
        </div>

@endsection