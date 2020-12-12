<!-- Modal -->
<div class="modal fade" id="markstypes-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-success">
        <h4 class="modal-title text-success" id="exampleModalCenterTItle">Add New @include('marks.title')s Types</h4>
      </div>

      <form action="{{ route ('markstypes.store') }}" method="post">
        
        @csrf
        <div class="modal-body bg-success">
            @include('markstypes.create.fields')
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

        $(document).on('click', '#createtypes', function(data){

            var level_id = $(this).data('level');
            var classroom = $(this).data('classroom');
            var course = $(this).data('course');

            $('#level_idType').empty();
            $.get('dynamictitle?level_id='+ level_id, function(data){
                ;

                $.each(data, function(index, leve){
                    $('#level_idType').append('<option value="'+leve.id+'">'+leve.title+'</option>')
                });
            });

            $('#classroom_idType').empty();
            $.get('dynamicClassroom?level_id='+ level_id, function(data){
                ;

                $.each(data, function(index, clas){
                    if (clas.id == classroom)
                    $('#classroom_idType').append('<option value="'+clas.id+'">'+clas.title+'</option>')
                });
            });

            $('#course_idType').empty();
            $.get('dynamicCourse?level_id='+level_id, function(data){
                ;

                $.each(data, function(index, cours){
                    if (cours.id == course)
                    $('#course_idType').append('<option value="'+cours.id+'">'+cours.code+' | '+cours.title+'</option>')
                });
            });

        });

        $('#nameEnType').on('change',function(e){
            
            

            var eName = e.target.value;

            $('#nameArType').empty();
            
            if (eName == "Homework")
                $('#nameArType').append('<option selected value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
            else
                if (eName == "Classwork")
                    $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option selected value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                else
                    if (eName == "Quiz")
                        $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option selected value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                    else
                        if (eName == "Attendance")
                            $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option selected value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                        else
                            if (eName == "Participation")
                                $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option selected value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                            else
                                if (eName == "Project")
                                    $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option selected value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                                else
                                    if (eName == "Behaviour")
                                        $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option selected value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                                    else
                                        if (eName == "Mid-term")
                                            $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option selected value="الامتحان النصفي">الامتحان النصفي</option> <option value="الامتحان النهائي">الامتحان النهائي</option>')
                                        else
                                            if (eName == "Final")
                                                $('#nameArType').append('<option value="واجب منزلي">واجب منزلي</option> <option value="تمرين خلال الحصص">تمرين خلال الحصص</option> <option value="امتحان قصير">امتحان قصير</option> <option value="الحضور">الحضور</option> <option value="المشاركة">المشاركة</option> <option value="مشروع المادة">مشروع المادة</option> <option value="السلوك والانضباط">السلوك والانضباط</option> <option value="الامتحان النصفي">الامتحان النصفي</option> <option selected value="الامتحان النهائي">الامتحان النهائي</option>')
            
        });

        $('#nameArType').on('change',function(e){
            
            

            var aName = e.target.value;

            $('#nameEnType').empty();
            
            if (aName == "واجب منزلي")
                $('#nameEnType').append('<option selected value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
            else
                if (aName == "تمرين خلال الحصص")
                    $('#nameEnType').append('<option value="Homework">Homework</option> <option selected value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                else
                    if (aName == "امتحان قصير")
                        $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option selected value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                    else
                        if (aName == "الحضور")
                            $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option selected value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                        else
                            if (aName == "المشاركة")
                                $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option selected value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                            else
                                if (aName == "مشروع المادة")
                                    $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option selected value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                                else
                                    if (aName == "السلوك والانضباط")
                                        $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option selected value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                                    else
                                        if (aName == "الامتحان النصفي")
                                            $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option selected value="Mid-term">Mid-term</option> <option value="Final">Final</option>')
                                        else
                                            if (aName == "الامتحان النهائي")
                                                $('#nameEnType').append('<option value="Homework">Homework</option> <option value="Classwork">Classwork</option> <option value="Quiz">Quiz</option> <option value="Attendance">Attendance</option> <option value="Participation">Participation</option> <option value="Project">Project</option> <option value="Behaviour">Behaviour</option> <option value="Mid-term">Mid-term</option> <option selected value="Final">Final</option>')
            
        });

    </script>
@endpush