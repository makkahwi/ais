@section('crBigModalForm')

  <form action="{{ route ('sFinancials.store') }}" method="post">

    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancials.dues.create.table')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    var oriamount, discount, distype, discharge, finamount;

    $('#levelCr').on('change',function(e){
            
      console.log(e);

      var level_id = e.target.value;

      $('#classroomCr').empty();
      $('#studentNoCr').empty();
      $('#studentNoCr').append('<option value="">Choose a classroom first</option>')
      $.get('dynamicClassroom?level_id='+ level_id, function(data){
        console.log(data);
        
        $('#classroomCr').append('<option value="">Select a Classroom...</option>')
        $.each(data, function(index, clas){
          $('#classroomCr').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });
      });
        
    });

    $('#classroomCr').on('change',function(e){

      console.log(e);

      var classroom_id = e.target.value;

      $('#studentNoCr').empty();
      $.get('dynamicStudents?classroom_id='+classroom_id, function(data){
        console.log(data);

        $('#studentNoCr').append('<option value="">Select a Student...</option>')
        $.each(data, function(index, student){
          $('#studentNoCr').append('<option value="'+student.studentNo+'">'+student.studentNo+' | '+student.user.name+'</option>')
        });
      });

    });

    $('#category_idCr').on('change',function(e){

      console.log(e);

      var category_id = e.target.value;

      $('#categoryamountCr').val('');
      $('#discountamountCr').val('');
      $('#discount_idCr').val('0');
      distype = 0;
      discount = 0;
      $.get('dynamicSFCategory?category_id='+category_id, function(data){
        console.log(data);

        $.each(data, function(index, category){
          oriamount = category.amount;
          $('#categoryamountCr').val(oriamount)
        });
        
        $('#finalAmountCr').val(oriamount);
      });
      

    });

    $('#discount_idCr').on('change',function(e){

      console.log(e);

      var discount_id = e.target.value;

      $('#discountamountCr').val('');

      if (discount_id == 0)
        $('#finalAmountCr').val(oriamount);
      
      else {
        $.get('dynamicSFDiscount?discount_id='+discount_id, function(data){
          console.log(data);

          $.each(data, function(index, discoun){
            discount = discoun.amount;
            distype = discoun.type;
            $('#discountamountCr').val(discount+' ('+distype+')');
          });

          if (distype == 'Fixed Amount'){
            finamount = oriamount - discount;
            $('#finalAmountCr').val(finamount);
          }
          else if (distype == 'Percentage') {
            discharge = oriamount * discount / 100;
            finamount = oriamount-discharge;
            $('#finalAmountCr').val(finamount);
          }
        });
      }

    });

  </script>
@endpush