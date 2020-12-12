@section('edModalForm')
      
  <form action="{{ route ('exams.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="exam_id" id="exam_id">
      @include('exams.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){

        $("#exam_id").val($(this).data('id'));
        $("#semEd").val($(this).data('sem'));
        $("#levelEd").val($(this).data('level'));
        $("#typeEd").val($(this).data('type'));
        $("#dateEd").val($(this).data('date'));
        $("#noteEd").val($(this).data('note'));

        var level_id = $(this).data('level');
        var course_id = $(this).data('course');

        $('#courseEd').empty();
        $.get('dynamicCourse?level_id='+level_id, function(data){
          ;

          $('#courseEd').append('<option value="">Select a Coures...</option>')
          $.each(data, function(index, cour){
            if (cour.id == course_id)
              $('#courseEd').append('<option selected value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
            else
              $('#courseEd').append('<option value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
          });
        });
          
      })

    </script>
@endpush