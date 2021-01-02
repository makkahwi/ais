@section('crBigModalForm')

  <form action="{{ route ('sFinancials.store') }}" method="post">

    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancials.dues.create.table')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    var discharge, finalamount;

    $('#levelCr').on('change',function(e){

      var level_id = e.target.value;

      $('#classroomCr').empty();
      $('#studentNoCr').empty();
      $('#studentNoCr').append('<option value="">Choose a classroom first</option>')
      $.get('dynamicClassroom?level_id='+ level_id, function(data){
        
        $('#classroomCr').append('<option value="">Select a Classroom...</option>')
        $.each(data, function(index, clas){
          $('#classroomCr').append('<option value="'+clas.id+'">'+clas.title+'</option>')
        });
      });
        
    });

    $('#classroomCr').on('change',function(e){

      var classroom_id = e.target.value;

      $('#studentNoCr').empty();
      $.get('dynamicStudents?classroom_id='+classroom_id, function(data){

        $('#studentNoCr').append('<option value="">Select a Student...</option>')
        $.each(data, function(index, student){
          $('#studentNoCr').append('<option value="'+student.studentNo+'">'+student.studentNo+' | '+student.user.name+'</option>')
        });
      });

    });

    $(document).ready(function() {

      $(document).on('change', '.category_idCr', function(e) {

        var category_id = e.target.value;

        $(this).parent().parent().find('#categoryamountCr').val('');
        $(this).parent().parent().find('#discount_idCr').val('0');
        $(this).parent().parent().find('#discountamountCr').val(0);

        $.get('dynamicSFCategory?category_id='+category_id, function(data){
          $.each(data, function(index, category){
            finalamount = category.amount;
          });
        });
        
        $(this).parent().parent().find('#categoryamountCr').val(finalamount);
        $(this).parent().parent().find('#finalAmountCr').val(finalamount);

      });

      $(document).on('change', '.discount_idCr', function(e) {

        var discount_id = e.target.value;

        $(this).parent().parent().find('#discountamountCr').val(0);

        $.get('dynamicSFDiscount?discount_id='+discount_id, function(data){
          $.each(data, function(index, discount){
            if(discount.type == "Fixed Amount")
              discharge = discount.amount;
            else
              discharge = finalamount*discount.amount/100
          });
        });
        
        $(this).parent().parent().find('#discountamountCr').val(discharge);
        $(this).parent().parent().find('#finalAmountCr').val(finalamount-discharge);

      });
    });

  </script>
@endpush