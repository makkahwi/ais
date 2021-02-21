@section('edModalForm')
      
  <form action="{{ route ('studentVisas.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="visaIdEd">
      @include('studentVisas.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){
      
      $("#visaIdEd").val($(this).data('id'));
      $("#studentEd").val($(this).data('student'));
      $("#fathersPassportEd").val($(this).data('fpp'));
      $("#fathersVisasEd").val($(this).data('fvisa'));
      $("#fathersLetterEd").val($(this).data('vletter'));
      $("#mothersPassportEd").val($(this).data('mpp'));
      $("#mothersVisasEd").val($(this).data('mvisa'));
      $("#mothersLetterEd").val($(this).data('mletter'));
      $("#studentsPassportEd").val($(this).data('spp'));
      $("#studentsVisasEd").val($(this).data('svisa'));
      $("#embassyLetterEd").val($(this).data('embassy'));
      $("#schoolLetterEd").val($(this).data('sletter'));
      $("#statusEd").val($(this).data('status'));
      $("#noteEd").val($(this).data('note'));
      
    })

  </script>
@endpush