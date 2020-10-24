<!-- typeName Field -->
<div class="form-group col-md-6">
    <label for="typeName">@include('labels.mark')</label>
    <select required class="form-control" name="typeName" id="typeNameEd">
        <option value="">Select a mark type...</option>
        <option value="Home Assignments واجبات منزلية">Home Assignments واجبات منزلية</option>
        <option value="Class Assignments واجبات خلال الحصص">Class Assignments واجبات خلال الحصص</option>
        <option value="Quizes امتحانات قصيرة">Quizes امتحانات قصيرة</option>
        <option value="Mid-term امتحان منتصف الفصل">Mid-term امتحان منتصف الفصل</option>
        <option value="Final Exam امتحان نهاية الفصل">Final Exam امتحان نهاية الفصل</option>
    </select>
</div>

<!-- Semid Field -->
<div class="form-group col-md-6">
    <label for="semId">@include('labels.semester')</label>
    <select required class="form-control" name="sem_id" id="semIdEd">
        @foreach($sems as $sem)
        <option value="{{$sem->id}}">{{$sem->title}} | {{ $sem->year->title }}</option>
        @endforeach
    </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-6">
    <label for="slevel_id">@include('labels.level')</label>
    <select required class="form-control" name="level_id" id="level_idEd">
        <option value="">Select a level...</option>
        @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-6">
    <label for="classroom_id">@include('labels.classroom')</label>
    <select required class="form-control" name="classroom_id" id="classroom_idEd">
        <option value="">Select a level first...</option>
    </select>
</div>

<!-- course_id Field -->
<div class="form-group col-md-6">
    <label for="course_id">@include('labels.course')</label>
    <select required class="form-control" name="course_id" id="course_idEd">
        <option value="">Select a level first...</option>
    </select>
</div>

<!-- student_id Field -->
<div class="form-group col-md-6">
    <label for="student_id">@include('labels.student')</label>
    <select required class="form-control" name="student_id" id="student_idEd">
        <option value="">Select a classroom first...</option>
    </select>
</div>

<!-- Markvalue Field -->
<div class="form-group col-md-6">
    <label for="markValue">@include('labels.markv')</label>
    <input required type="number" min="0" class="form-control" name="markValue" id="markValueEd">
</div>

<!-- Fullmarkvalue Field -->
<div class="form-group col-md-6">
    <label for="fullMarkValue">@include('labels.markfv')</label>
    <input required type="number" min="0" class="form-control" name="fullMarkValue" id="fullMarkValueEd">
</div>

<!-- note Field -->
<div class="form-group col-md-12">
    <label for="note">@include('labels.note')</label>
    <input type="number" min="0" class="form-control" name="note" id="noteEd">
</div>

@push('scripts') <!-- Dynamic Student Show /////////////////////////////////////////// -->
    <script type="text/javascript">

        $('#level_idEd').on('change',function(e){
            
            console.log(e);

            var level_id = e.target.value;

            $('#course_idEd').empty();
            $.get('dynamicCourse?level_id='+level_id, function(data){
                console.log(data);
                
                $('#course_idEd').append('<option value="">Select a Course...</option>')
                $.each(data, function(index, cour){
                    if (cour.status_id == 2) // Active Ones Only to Show //////////////////////
                    $('#course_idEd').append('<option value="'+cour.course_id+'">'+cour.title+' '+cour.code+'</option>')
                });
            });
            
        });

        $('#level_idEd').on('change',function(e){
            
            console.log(e);

            var level_id = e.target.value;

            $('#classroom_idEd').empty();
            $.get('dynamicClassroom?level_id='+ level_id, function(data){
                console.log(data);
                
                $('#classroom_idEd').append('<option value="">Select a Classroom...</option>')
                $.each(data, function(index, clas){
                    if (clas.status_id == 2) // Active Ones Only to Show //////////////////////
                    $('#classroom_idEd').append('<option value="'+clas.id+'">'+clas.title+'</option>')
                });
            });
            
        });

        $('#classroom_idEd').on('change',function(e){
            
            console.log(e);

            var classroom_id = e.target.value;

            $('#student_idEd').empty();
            $.get('dynamicStudentMark?classroom_id='+classroom_id, function(data){
                console.log(data);

                $('#student_idEd').append('<option value="">Select a Student...</option>')
                $.each(data, function(index, student){
                    //if (student.sStatus == 2) // Active Ones Only to Show //////////////////////
                    $('#student_idEd').append('<option value="'+student.matricNo+'">'+student.matricNo+'</option>')
                });
            });
            
        });

    </script>
@endpush