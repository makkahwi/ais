@extends('layouts.app')

@section('title')
    @include('upgradestudents.title')
@endsection

@section('modal.title')
    @include('upgradestudents.title')
@endsection

@section('header.title')
    @include('upgradestudents.titles')
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
    searching: false,
@endsection

@section('header')
    @if(Auth::user()->role_id == 8 )
        @foreach ($currentSem as $currentS) {{$currentS->title}}, {{$currentS->year->title}} @endforeach
    @endif
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            @include('upgradestudents.indexTabs')
        </div>
    </div>
@endsection

@push('scripts') 
    <script type="text/javascript">

        $('.financial').on('change',function(e){

            console.log(e);

            var financial = e.target.value;

            var studentNo = $(this).parent().parent().find('#studentNo').val();

            $(this).parent().parent().find('#financialUpdateConfirmation').empty();

            $.get('financialUpdate?financial='+financial+'&studentNo='+studentNo, function(data){
                $(this).parent().parent().find('#financialUpdateConfirmation').append('@include("layouts.updated")');
            });
            
            $(this).parent().parent().find('#financialUpdateConfirmation').append('@include("layouts.updated")');

        });

        $('.classroomId').on('change',function(e){

            console.log(e);

            var classroom = e.target.value;

            var studentNo = $(this).parent().parent().find('#studentNo').val();

            $(this).parent().parent().find('#classroomUpdateConfirmation').empty();

            $.get('classroomUpdate?classroom='+classroom+'&studentNo='+studentNo, function(data){
                $(this).parent().parent().find('#classroomUpdateConfirmation').append('@include("layouts.updated")');
            });
            
            $(this).parent().parent().find('#classroomUpdateConfirmation').append('@include("layouts.updated")');

        });

        $('.statusId').on('change',function(e){

            console.log(e);

            var status = e.target.value;

            var studentNo = $(this).parent().parent().find('#studentNo').val();

            $(this).parent().parent().find('#statusUpdateConfirmation').empty();

            $.get('statusUpdate?status='+status+'&studentNo='+studentNo, function(data){
                $(this).parent().parent().find('#statusUpdateConfirmation').append('@include("layouts.updated")');
            });
            
            $(this).parent().parent().find('#statusUpdateConfirmation').append('@include("layouts.updated")');

        });

    </script>
@endpush