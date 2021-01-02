@section('edModalForm')
      
  <form action="{{ route ('sches.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="sch_id" id="sch_id">
        @include('sches.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#edit', function(data){

        $("#sch_id").val($(this).data('id'));
        $("#semIdEd").val($(this).data('sem'));
        $("#level_idEd").val($(this).data('level'));
        $("#classroom_idEd").val($(this).data('class'));

        $("#course_idEd").val($(this).data('course'));
        $("#teacher_idEd").val($(this).data('teacher'));
        $("#day_idEd").val($(this).data('day'));
        $("#time_idEd").val($(this).data('time'));
        $("#status_idEd").val($(this).data('status'));

        var level_id = $(this).data('level');
        var course_id = $(this).data('course');
        
        $.get('dynamicCourse?level_id='+level_id, function(data){
        

          $('#course_idEd').empty();

          $('#course_idEd').append('<option value="">Select a Course...</option>')
          $.each(data, function(index, cour){
            if (cour.id == course_id)
              $('#course_idEd').append('<option selected value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
            else
              $('#course_idEd').append('<option value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
          });

        });
        
      })

    </script>
@endpush