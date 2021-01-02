@section('crModalForm')

  <form action="{{ route ('sPayments.store') }}" method="post">

    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancials.payments.create.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    var oriamount, discount, distype, discharge, finamount;

    $('#levelPaymentCr').on('change',function(e){
            
      

      var level_id = e.target.value;

      $('#classroomPaymentCr').empty();
      $('#studentNoPaymentCr').empty();
      $('#studentNoPaymentCr').append('<option value="">Choose a classroom first</option>')
      $.get('dynamicClassroom?level_id='+ level_id, function(data){
      
        
        $('#classroomPaymentCr').append('<option value="">Select a Classroom...</option>')
        $.each(data, function(index, clas){
          $('#classroomPaymentCr').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });
      });
        
    });

    $('#classroomPaymentCr').on('change',function(e){

      

      var classroom_id = e.target.value;

      $('#studentNoPaymentCr').empty();
      $.get('dynamicStudents?classroom_id='+classroom_id, function(data){
      

        $('#studentNoPaymentCr').append('<option value="">Select a Student...</option>')
        $.each(data, function(index, student){
          $('#studentNoPaymentCr').append('<option value="'+student.studentNo+'">'+student.studentNo+' | '+student.user.name+'</option>')
        });
      });

    });

    $('#category_idPaymentCr').on('change',function(e){

      var category_id = e.target.value;

      $('#categoryamountPaymentCr').val('');
      $('#discountamountPaymentCr').val('');
      $('#discount_idPaymentCr').val('0');
      distype = 0;
      discount = 0;

      $.get('dynamicSFCategory?category_id='+category_id, function(data){
        $.each(data, function(index, category){
          oriamount = category.amount;
          $('#categoryamountPaymentCr').val(oriamount)
        });
        
        $('#finalAmountPaymentCr').val(oriamount);
      });

    });

    $('#discount_idPaymentCr').on('change',function(e){

      var discount_id = e.target.value;

      $('#discountamountPaymentCr').val('');

      if (discount_id == 0)
        $('#finalAmountPaymentCr').val(oriamount);
      
      else {
        $.get('dynamicSFDiscount?discount_id='+discount_id, function(data){
        

          $.each(data, function(index, discoun){
            discount = discoun.amount;
            distype = discoun.type;
            $('#discountamountPaymentCr').val(discount+' ('+distype+')');
          });

          if (distype == 'Fixed Amount'){
            finamount = oriamount - discount;
            $('#finalAmountPaymentCr').val(finamount);
          }
          else if (distype == 'Percentage') {
            discharge = oriamount * discount / 100;
            finamount = oriamount-discharge;
            $('#finalAmountPaymentCr').val(finamount);
          }
        });
      }

    });

  </script>
@endpush