@section('edModalForm')
      
  <form action="{{ route ('marks.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="mark_id" id="mark_id">
      @include('marks.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#mark_id").val($(this).data('id'));
      $("#markValueEd").val($(this).data('markv'));
      $("#maxEd").val($(this).data('fmark'));
      $("#noteEd").val($(this).data('note'));

      var level_id = $(this).data('level');
      var marktype = $(this).data('type');
      var classroom = $(this).data('class');
      var course_id = $(this).data('course');
      var student = $(this).data('student');

      $.get('dynamicMarkTypesUsed?course_id='+course_id, function(data){

        $('#typenameEd').empty();
        $.each(data, function(index, typ){
          if (typ.id == marktype)
          $('#typenameEd').append('<option value="'+typ.id+'">'+typ.title+'</option>')
        });

      });

      $.get('dynamicClassroom?level_id='+ level_id, function(data){

        $('#classroom_idEd').empty();
        $.each(data, function(index, clas){
          if (clas.id == classroom)
            $('#classroom_idEd').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });

      });

      $.get('dynamicCourse?level_id='+level_id, function(data){

        $('#course_idEd').empty();
        $.each(data, function(index, cou){
          if (cou.id == course_id)
            $('#course_idEd').append('<option value="'+cou.id+'">'+cou.code+' | '+cou.title+'</option>')
        });

      });

      $.get('dynamicStudents?classroom_id='+classroom, function(data){

        $('#student_idEd').empty();
        $.each(data, function(index, stu){
          if (stu.studentNo == student)
            $('#student_idEd').append('<option value="'+stu.studentNo+'">'+stu.studentNo+' | '+stu.user.name+'</option>')
        });

      });
      
    });

  </script>
@endpush
