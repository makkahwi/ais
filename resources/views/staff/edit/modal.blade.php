@section('edBigModalForm')
      
  <form action="{{ route ('staff.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="staff_id">

      @include('staff.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){
      
      $("#staff_id").val($(this).data('id'));
      $("#staffNoED").val($(this).data('staffno'));
      $("#nameEd").val($(this).data('name'));
      $("#eNameED").val($(this).data('ename'));
      $("#aNameED").val($(this).data('aname'));
      $("#genderED").val($(this).data('gend'));
      $("#dobED").val($(this).data('dob'));
      $("#emailED").val($(this).data('email'));
      $("#phoneED").val($(this).data('phone'));
      $("#addressED").val($(this).data('address'));
      $("#natED").val($(this).data('nat'));
      $("#ppnoED").val($(this).data('ppno'));
      $("#ppeED").val($(this).data('ppe'));
      $("#veedEd").val($(this).data('ve'));
      $("#statusED").val($(this).data('status'));
      $("#leaveDateED").val($(this).data('ldate'));
      
      $("#photoEd").val($(this).data('photo'));
      $("#passportEd").val($(this).data('passport'));
      $("#visaEd").val($(this).data('visa'));
      $("#doc1Ed").val($(this).data('doc1'));
      $("#doc2Ed").val($(this).data('doc2'));
      $("#doc3Ed").val($(this).data('doc4'));
      
    })

  </script>
@endpush