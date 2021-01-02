<!-- typeName Field -->
<div class="form-group col-md-6">
    <label for="typeName">@include('labels.mark')</label>
    <select class="form-control" name="typeName" id="typeName">
        <option value="">Select a mark type...</option>
        <option value="Home Assignments">Home Assignments</option>
        <option value="Class Assignments">Class Assignments</option>
        <option value="Quizes">Quizes</option>
        <option value="Mid-term">Mid-term</option>
        <option value="Final">Final</option>
    </select>
</div>

<!-- Semid Field -->
<div class="form-group col-md-6">
    <label for="semId">@include('labels.semester')</label>
    <select class="form-control" name="sem_id" id="semId">
        @foreach($sems as $sem)
        <option value="{{$sem->id}}">{{$sem->title}} ~ {{ $sem->year->title }}</option>
        @endforeach
    </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-6">
    <label for="classroom_id">@include('labels.classroom')</label>
    <select class="form-control" name="classroom_id" id="classroom_id">
        <option value="">Select a classroom...</option>
        @foreach($classrooms as $classroom)
        @if ($classroom->status_id == 2 && $classroom->deleted_at == NULL)
        <option value="{{$classroom->id}}">{{$classroom->title}}</option>
        @endif
        @endforeach
    </select>
</div>

<!-- course_id Field -->
<div class="form-group col-md-6">
    <label for="course_id">@include('labels.course')</label>
    <select class="form-control" name="course_id" id="course_id">
        <option value="">Select a course...</option>
    </select>
</div>

<!-- student_id Field -->
<div class="form-group col-md-6">
    <label for="student_id">@include('labels.student')</label>
    <select class="form-control" name="student_id" id="student_id">
        <option value="">Select a student...</option>
    </select>
</div>

<!-- Markvalue Field -->
<div class="form-group col-md-6">
    <label for="markValue">@include('labels.markv')</label>
    <input type="number" class="form-control" name="markValue" id="markValue">
</div>

<!-- Fullmarkvalue Field -->
<div class="form-group col-md-6">
    <label for="fullMarkValue">@include('labels.markfv')</label>
    <input type="number" class="form-control" name="fullMarkValue" id="fullMarkValue">
</div>

@push('scripts') <!-- Dynamic Student Show /////////////////////////////////////////// -->
    <script type="text/javascript">

        $('#classroom_id').on('change',function(e){

            var classroom_id = e.target.value;

            $('#student_id').empty();
            $.get('dynamicStudentMark?sclassroom_id='+classroom_id, function(data){

                $.each(data, function(index, studen){
                    if (studen.sStatus == 2) // Active Ones Only to Show //////////////////////
                    $('#student_id').append('<option value="'+studen.student_id+'">'+studen.seName+' '+studen.saName+'</option>')
                });
            });
            
        });

        $('#classroom_id').on('change',function(e){

            var classroom_id = e.target.value;

            $('#course_id').empty();
            $.get('dynamicCourse?classroom_id='+classroom_id, function(data){

                $.each(data, function(index, cour){
                    if (cour.status_id == 2) // Active Ones Only to Show //////////////////////
                    $('#course_id').append('<option value="'+cour.course_id+'">'+cour.title+' '+cour.code+'</option>')
                });
            });
            
        });

    </script>
@endpush