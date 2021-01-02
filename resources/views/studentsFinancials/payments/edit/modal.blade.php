@section('edModalForm')
      
    <form action="{{ route ('sPayments.update', 1) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('patch')

        <div class="modal-body bg-warning">
            <input type="hidden" name="id" id="idPaymentEd">
            @include('studentsFinancials.payments.edit.fields')
        </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

    $(document).on('click', '#editing', function(data){
        
        $("#idPaymentEd").val($(this).data('id'));
        $("#sem_idPaymentEd").val($(this).data('sem'));
        $("#datePaymentEd").val($(this).data('date'));
        $("#studentNoPaymentEd").val($(this).data('student'));
        $("#amountPaymentEd").val($(this).data('amount'));
        $("#methodPaymentEd").val($(this).data('method'));
        $("#receiptNoPaymentEd").val($(this).data('receiptno'));
        $("#notePaymentEd").val($(this).data('note'));
        $("#receiptPaymentEd").val($(this).data('receipt'));

      })

    </script>
@endpush