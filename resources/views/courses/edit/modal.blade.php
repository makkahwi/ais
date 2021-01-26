@section('edModalForm')
      
  <form action="{{ route ('courses.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="course_id">

      @include('courses.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#course_id").val($(this).data('id'));
      $("#titleEd").val($(this).data('name'));
      $("#codeEd").val($(this).data('code'));
      $("#textbookEd").val($(this).data('book'));
      $("#level_idEd").val($(this).data('level'));
      $("#descriptionEd").val($(this).data('desc'));
      $("#status_idEd").val($(this).data('status'));
      
    })

  </script>
@endpush