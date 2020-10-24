@section('edModalForm')
      
  <form action="{{ route ('marks.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="mark_id" id="mark_id">
      @include('results.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){
        var button = $(event.relatedTarget) 
        var id = button.data('id')                     // Recieve from Table
        var mark = button.data('mark')
        var sem = button.data('sem')
        var class = button.data('class')
        var course = button.data('course')
        var student = button.data('student')
        var markv = button.data('markv')
        var fmark = button.data('fmark')
        var note = button.data('note')

        var modal = $(this)
        modal.find('.modal-body #mark_id').val(id)  // Send to Modal
        modal.find('.modal-body #typeNameEd').val(mark)
        modal.find('.modal-body #semIdEd').val(sem)
        modal.find('.modal-body #classroom_idEd').val(class)
        modal.find('.modal-body #course_idEd').val(course)
        modal.find('.modal-body #student_idEd').val(student)
        modal.find('.modal-body #markValueEd').val(markv)
        modal.find('.modal-body #fullMarkValueEd').val(fmark)
        modal.find('.modal-body #noteEd').val(note)

        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        
      });

    </script>
@endpush
