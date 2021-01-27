<!-- Modal -->
<div class="modal fade" id="marks-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-success">
        <h4 class="modal-title text-success" id="exampleModalCenterTItle">Create New @include('marks.title')s</h4>
      </div>

      <form action="{{ route ('marks.store') }}" method="post" id="studentsMarks">

        @csrf
        <div class="modal-body bg-success">
          @include('marks.create.table')
        </div>

        <div class="clearfix bg-success"></div>

        <div class="modal-footer bg-success">
          <button type="submit" class="btn btn-success submitbutton">Create إنشاء</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>
        
      </form>

    </div>
  </div>
</div>

@push('scripts') <!-- Dynamic Student Show /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#createmarks', function(data){

      var maxv = 100;

      var counter = 0;

      var level_id = $(this).data('level');
      var classroom = $(this).data('classroom');
      var course = $(this).data('course');
      var marktype = $(this).data('marktype');

      $('#level_idCrH').empty();
      $.get('dynamictitle?level_id='+ level_id, function(data){

        $.each(data, function(index, leve){
          $('#level_idCrH').append('<option value="'+leve.id+'">'+leve.title+'</option>')
        });

      });

      $('#classroom_idCrH').empty();
      $.get('dynamicClassroom?level_id='+ level_id, function(data){

        $.each(data, function(index, clas){
          if (clas.id == classroom)
            $('#classroom_idCrH').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });

      });

      $('#nameCrH').empty();
      $('#maxCrH').empty();
      $('#semIdCrH').empty();
      $.get('dynamicMarkType?course_id='+course, function(data){

        $.each(data, function(index, type){
          if (type.id == marktype)
          {
            $('#nameCrH').append('<option value="'+type.id+'">'+type.title+'</option>')
            $('#maxCrH').append('<input readonly class="form-control" name="max" value="'+type.max+'">');
            $('#semIdCrH').append('<input readonly class="form-control" name="sem_id" value="'+type.sem.title+'">')
            maxv = type.max;
          }
        });

      });

      $('#studentsList').empty();
      $.get('dynamicStudents?classroom_id='+classroom, function(data){

        counter = 0;

        $.each(data, function(index, student){
          ++counter
          $('#studentsList').append('@include("marks.create.fieldsN")')
        });

        $('#footer').empty();
        $('#footer').append('<input type="hidden" name="count" value="'+counter+'">');
      });

      $('#course_idCrH').empty();
      $.get('dynamicCourse?level_id='+level_id, function(data){

          $.each(data, function(index, cours){
            if (cours.id == course)
              $('#course_idCrH').append('<option value="'+cours.id+'">'+cours.code+' | '+cours.title+'</option>')
          });

      });

    });

  </script>
@endpush