@extends('layouts.app')

@section('title')
    @include('courses.title')s
@endsection

@section('modal.title')
    @include('courses.title')s
@endsection

@section('header.title')
    @include('courses.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@can('delete', App\Models\courses::class)
    @section('deleteModal')
        <form method="post" action="{{ route ('courses.destroy', 1) }}">
    @endsection
@endcan

@section('header')
    @can('create', App\Models\courses::class)
        <a data-toggle="modal" data-target="#create-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> New @include('courses.title')s</a>
    @else
        @foreach ($currentSem as $sem) {{$sem->title}}, {{$sem->year->title}} @endforeach
    @endcan
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
        
        	<table class="text-danger text-justify">
            	<tr>
                	<th>
                    	Dear Parents, please note that some courses are deactivated because of CMCO & Study from Home status. Those courses will not be part of the students evaluation this semester.
                	</th>
                	<th>
                    	الأعزاء أولياء الأمور, نرجو أخذ العلم بأن بعض المواد الدراسية تم تعطيلها هذا الفصل بسبب ظروف قانون تحديد الحركة المطبق في ماليزيا. هذه المواد الدراسية لن تكون جزءاً من تقييم الطلاب خلال هذا الفصل الدراسي.
                	</th>
            	</tr>
        	</table>

            @include('courses.indexTabs')

            @include('courses.show.modal')

            @can('create', App\Models\courses::class)

                @include('courses.create.modal')

            @endcan

            @can('update', App\Models\courses::class)

                @include('courses.edit.modal')

            @endcan
        </div>
    </div>
@endsection