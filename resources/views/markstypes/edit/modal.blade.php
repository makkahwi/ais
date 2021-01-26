@section('edBigModalForm')

  <form action="{{ route ('markstypes.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="type_id">
      <input type="hidden" name="teacher_id" id="teacher_idEd">
      @include('markstypes.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
<script type="text/javascript">

    $(document).on('click', '#type-editing', function(data){

      var level = $(this).data('level');
      var classroom = $(this).data('classroom');
      var course = $(this).data('course');

      $.get('dynamicClassroom?level_id='+level, function(data){

        $('#classroom_idTypeEd').empty();
        $.each(data, function(index, clas){
          if (clas.id == classroom)
            $('#classroom_idTypeEd').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });

      });

      $.get('dynamicCourse?level_id='+level, function(data){

        $('#course_idTypeEd').empty();
        $.each(data, function(index, cou){
          if (cou.id == course)
            $('#course_idTypeEd').append('<option value="'+cou.id+'">'+cou.code+' | '+cou.title+'</option>')
        });

      });

      $("#level_idTypeEd").val(level);
      $("#semIdTypeEd").val($(this).data('sem'));
      $("#maxTypeEd").val($(this).data('max'));
      $("#weightTypeEd").val($(this).data('weight'));
      $("#deadlineTypeEd").val($(this).data('deadline'));
      $("#teacher_idEd").val($(this).data('teacher'));

      var mark = $(this).data('mark')
      var markname = mark.split(" ");

      $("#type_id").val($(this).data('id'));
      $("#typeEnameEd").val(markname[0]);

      if (isNaN(markname[1])) {
        $("#nameOrType").val('');

          if (markname[2] == null)
            $("#typeAnameEd").val(markname[1]);
          else
              if (markname[3] == null) 
                $("#typeAnameEd").val(markname[1]+' '+markname[2]);
              else
                  if (markname[4] == null)
                    $("#typeAnameEd").val(markname[1]+' '+markname[2]+' '+markname[3]);
                  else
                    $("#typeAnameEd").val(markname[1]+' '+markname[2]+' '+markname[3]+' '+markname[4]);
      }
      else {
          $("#nameOrTypeEd").val(markname[1]);

          if (markname[3] == null)
            $("#typeAnameEd").val(markname[2]);
          else
              if (markname[4] == null) 
                $("#typeAnameEd").val(markname[2]+' '+markname[3]);
              else 
                $("#typeAnameEd").val(markname[2]+' '+markname[3]+' '+markname[4]);
      }

    });

    $('#typeEnameEd').on('change',function(e){

      var eName = e.target.value;

      if (eName == "Homework")
        $("#typeAnameEd").val('واجب منزلي');
      else
          if (eName == "Classwork")
            $("#typeAnameEd").val('تمرين خلال الحصص');
          else
              if (eName == "Quiz")
                $("#typeAnameEd").val('امتحان قصير');
              else
                  if (eName == "Attendance")
                    $("#typeAnameEd").val('الحضور');
                  else
                      if (eName == "Participation")
                        $("#typeAnameEd").val('المشاركة');
                      else
                          if (eName == "Project")
                            $("#typeAnameEd").val('مشروع المادة');
                          else
                              if (eName == "Behaviour")
                                $("#typeAnameEd").val('السلوك والانضباط');
                              else
                                  if (eName == "Mid-term")
                                    $("#typeAnameEd").val('الامتحان النصفي');
                                  else
                                      if (eName == "Final")
                                        $("#typeAnameEd").val('الامتحان النهائي');

    });

    $('#typeAnameEd').on('change',function(e){

      var aName = e.target.value;

      if (aName == "واجب منزلي")
        $("#typeEnameEd").val('Homework');
      else
          if (aName == "تمرين خلال الحصص")
            $("#typeEnameEd").val('Classwork');
          else
              if (aName == "امتحان قصير")
                $("#typeEnameEd").val('Quiz');
              else
                  if (aName == "الحضور")
                    $("#typeEnameEd").val('Attendance');
                  else
                      if (aName == "المشاركة")
                        $("#typeEnameEd").val('Participation');
                      else
                          if (aName == "مشروع المادة")
                            $("#typeEnameEd").val('Project');
                          else
                              if (aName == "السلوك والانضباط")
                                $("#typeEnameEd").val('Behaviour');
                              else
                                  if (aName == "الامتحان النصفي")
                                    $("#typeEnameEd").val('Mid-term');
                                  else
                                      if (aName == "الامتحان النهائي")
                                        $("#typeEnameEd").val('Final');

    });

  </script>
@endpush