@section('swModalForm')

  <form action="{{route('confLetter')}}">

    @include('studentsFinancials.payments.show.fields')

  </form>

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#sem_idPaymentSw").val($(this).data('sem'));
      $("#datePaymentSw").val($(this).data('date'));
      $("#studentNoPaymentSw").val($(this).data('student'));
      $("#amountPaymentSw").val($(this).data('amount'));
      $("#methodPaymentSw").val($(this).data('method'));
      $("#receiptNoPaymentSw").val($(this).data('receiptno'));
      $("#notePaymentSw").val($(this).data('note'));

    })

  </script>
@endpush