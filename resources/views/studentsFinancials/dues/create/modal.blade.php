@section('crBigModalForm')

  <form action="{{ route ('sFinancials.store') }}" method="post">

    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancials.dues.create.table')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    var discharge;

    $('#levelCr').on('change',function(e){

      var level_id = e.target.value;

      $('#classroomCr').empty();
      $('#studentNoCr').empty();
      $('.category_idCr').empty();
      $('#studentNoCr').append('<option value="">Choose a classroom first</option>')
      $('.category_idCr').append('<option value="">Choose a classroom first</option>')
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
      $('.category_idCr').empty();
      $('.category_idCr').append('<option value="">Choose a Student first</option>')
      $.get('dynamicStudents?classroom_id='+classroom_id, function(data){

        $('#studentNoCr').append('<option value="">Select a Student...</option>')
        $.each(data, function(index, student){
          $('#studentNoCr').append('<option value="'+student.studentNo+'">'+student.studentNo+' | '+student.user.name+'</option>')
        });
      });

    });

    $('#studentNoCr').on('change',function(e){ // Dynamic Category Change ///////////////////

      var studentNo = e.target.value;

      $('.category_idCr').empty();
      $.get('dynamicFCategoryOfStudent?studentNo='+studentNo, function(data){
        $('.category_idCr').append('<option value="">Select a Category...</option>')
        $.each(data, function(index, category){
          if (category.level)
            $('.category_idCr').append('<option value="'+category.id+'">Batch '+category.batch.batch+' | '+category.title+' | '+category.level.title+'</option>')
          else
            $('.category_idCr').append('<option value="'+category.id+'">Batch '+category.batch.batch+' | '+category.title+' | All Levels</option>')
        });
      });

    });

    $(document).ready(function() {
      $(document).on('change', '.category_idCr', function(e) {

        var category_id = e.target.value;

        var $categoryamountCr = $(this).parent().parent().find('#categoryamountCr') ;
        var $discount_idCr = $(this).parent().parent().find('#discount_idCr');
        var $discountamountCr = $(this).parent().parent().find('#discountamountCr');
        var $finalAmountCr = $(this).parent().parent().find('#finalAmountCr');

        $categoryamountCr.val('');
        $discount_idCr.val('0');
        $discountamountCr.val(0);

        $.get('dynamicSFCategory?category_id='+category_id, function(data){
          $.each(data, function(index, category){
            $categoryamountCr.val(category.amount);
            $finalAmountCr.val(category.amount);
          });
        });

      });
    });

    $(document).ready(function() {
      $(document).on('change', '.discount_idCr', function(e) {

        var discount_id = e.target.value;

        var $discountamountCr = $(this).parent().parent().find('#discountamountCr');
        var $finalAmountCr = $(this).parent().parent().find('#finalAmountCr');

        $discountamountCr.val(0);
        var categoryamount = $(this).parent().parent().find('#categoryamountCr').val() ;

        $.get('dynamicSFDiscount?discount_id='+discount_id, function(data){
          $.each(data, function(index, discount){
            if(discount.type == "Fixed Amount") {
              discharge = discount.amount;
            }
            else {
              discharge = categoryamount*discount.amount/100
            }

            $discountamountCr.val(discharge);
            $finalAmountCr.val(categoryamount-discharge);
          });
        });

        if(discount_id == 0){
          $discountamountCr.val(0);
          $finalAmountCr.val(categoryamount);
        }

      });
    });

  </script>
@endpush