@section('edModalForm')
      
  <form action="{{ route ('attendances.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="attendanceId">
      @include('attendances.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#attendanceId").val($(this).data('id'));
      $("#semIdEd").val($(this).data('sem'));
      $("#student_idEd").val($(this).data('student'));
      $("#dateEd").val($(this).data('date'));
      $("#attenEd").val($(this).data('atten'));
      $("#noteEd").val($(this).data('note'));

    })

  </script>
@endpush