@section('edBigModalForm')
      
  <form action="{{ route ('students.update', 1) }}" method="post" enctype="multipart/form-data">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="student_id">
      @include('students.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#student_id").val($(this).data('no'));
      $("#studentNoEd").val($(this).data('id'));
      $("#statusEd").val($(this).data('stat'));
      $("#eNameEd").val($(this).data('ename'));
      $("#aNameEd").val($(this).data('aname'));
      $("#nameEd").val($(this).data('name'));
      $("#dobEd").val($(this).data('dob'));
      $("#genderEd").val($(this).data('gend'));
      $("#emailEd").val($(this).data('email'));
      $("#phoneEd").val($(this).data('phone'));
      $("#addressEd").val($(this).data('address'));
      $("#nationEd").val($(this).data('nat'));
      $("#ppnoEd").val($(this).data('ppno'));
      $("#ppExpiryEd").val($(this).data('ppe'));
      $("#visaExpiryEd").val($(this).data('ve'));
      $("#level_idEd").val($(this).data('level'));
      $("#classroom_idEd").val($(this).data('class'));
      $("#financialEd").val($(this).data('fin'));
      $("#svisaEd").val($(this).data('svisa'));
      $("#transEd").val($(this).data('trans'));
      
      $("#photoEd").val($(this).data('photo'));
      $("#passportEd").val($(this).data('passport'));
      $("#visaEd").val($(this).data('visa'));
      $("#doc1Ed").val($(this).data('doc1'));
      $("#doc2Ed").val($(this).data('school'));
      
      $("#rEd").val($(this).data('relative'));
      $("#relationEd").val($(this).data('relation'));

    })

  </script>
@endpush