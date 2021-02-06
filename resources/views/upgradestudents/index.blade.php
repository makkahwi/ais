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

      var financial = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#financialUpdateConfirmation');

      $updateConfirmation.empty();

      $.get('financialUpdate?financial='+financial+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.classroomId').on('change',function(e){

      var classroom = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#classroomUpdateConfirmation');

      $updateConfirmation.empty();

      $.get('classroomUpdate?classroom='+classroom+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.statusId').on('change',function(e){

      var status = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#statusUpdateConfirmation');
      
      $updateConfirmation.empty();

      $.get('statusUpdate?status='+status+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.sponsor').on('change',function(e){

      var sponsor = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#sponsorUpdateConfirmation');
      
      $updateConfirmation.empty();

      $.get('sponsorUpdate?sponsor='+sponsor+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.gradntedDiscounts').on('change',function(e){

      var gradntedDiscounts = [];
      gradntedDiscounts = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#gradntedDiscountsUpdateConfirmation');
      
      $updateConfirmation.empty();

      $.get('gradntedDiscountsUpdate?gradntedDiscounts='+gradntedDiscounts+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.exceptedCourses').on('change',function(e){

      var exceptedCourses = [];
      exceptedCourses = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#exceptedCoursesUpdateConfirmation');
      
      $updateConfirmation.empty();

      $.get('exceptedCoursesUpdate?exceptedCourses='+exceptedCourses+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

    $('.tuitionfreq').on('change',function(e){

      var tuitionfreq = e.target.value;

      var studentNo = $(this).parent().parent().find('#studentNo').val();
      var $updateConfirmation = $(this).parent().parent().find('#tuitionfreqUpdateConfirmation');
      
      $updateConfirmation.empty();

      $.get('tuitionfreqUpdate?tuitionfreq='+tuitionfreq+'&studentNo='+studentNo, function(data){
        $.each(data, function(index, done){
          if (done)
            $updateConfirmation.append('@include("layouts.updated")');
          else
            $updateConfirmation.append('@include("layouts.failed")');
        });
      });
      
      $updateConfirmation.append('@include("layouts.updated")');

    });

  </script>
@endpush