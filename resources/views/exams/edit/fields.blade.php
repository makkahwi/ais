<!-- Semid Field -->
<div class="form-group col-md-4">
  <label for="semId">@include('labels.semester')@include('layouts.required')</label>
  <select required class="form-control" name="sem_id" id="semEd">
    <option value="{{$currentSem->id}}">{{$currentSem->title}}, {{ $currentSem->year->title }}</option>
  </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-4">
  <label for="level_id">@include('labels.level')@include('layouts.required')</label>
  <select required class="form-control" name="level_id" id="levelEd">
    <option value="">Select a level...</option>
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- course_id Field -->
<div class="form-group col-md-4">
  <label for="course_id">@include('labels.course')@include('layouts.required')</label>
  <select required class="form-control" name="course_id" id="courseEd">
  </select>
</div>

<!-- Type Field -->
<div class="form-group col-md-6">
  <label for="type">@include('labels.exam')@include('layouts.required')</label>
  <select required class="form-control" name="title" id="typeEd">
    <option value="">Select an Exam Type...</option>
    <option value="Midterm Exam امتحان نصفي">Midterm Exam امتحان نصفي</option>
    <option value="Final Exam امتحان نهائي">Final Exam امتحان نهائي</option>
  </select>
</div>

<!-- date Field -->
<div class="form-group col-md-6">
  <label for="date">@include('labels.date')@include('layouts.required')</label>
  <input required type="date" class="form-control" name="date" id="dateEd">
</div>

<!-- Note Field -->
<div class="form-group col-md-12">
  <label for="note">@include('labels.note')</label>
  <textarea type="text" class="form-control" name="note" id="noteEd"></textarea>
</div>

@push('scripts') <!-- Dynamic Course Show /////////////////////////////////////////// -->
  <script type="text/javascript">

    $('#levelEd').on('change',function(e){

      var level_id = e.target.value;

      $('#courseEd').empty();
      $.get('dynamicCourse?level_id='+level_id, function(data){

        $('#courseEd').append('<option value="">Select a Coures...</option>')
        $.each(data, function(index, cour){
          if (cour.status_id == 2) // Active Ones Only to Show //////////////////////
          $('#courseEd').append('<option value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
        });
      });
        
    });

  </script>
@endpush