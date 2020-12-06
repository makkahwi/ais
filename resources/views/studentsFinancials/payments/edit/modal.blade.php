@section('edModalForm')
      
    <form action="{{ route ('students.update', 1) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('patch')

        <div class="modal-body bg-warning">
            <input type="hidden" name="id" id="idEd">
            @include('studentsFinancials.payments.edit.fields')
        </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

        $("#idEd").val($(this).data('id'));
        $("#sem_idEd").val($(this).data('sem'));
        $("#studentNoEd").val($(this).data('sno'));
        $("#category_idEd").val($(this).data('category'));
        $("#categoryamountEd").val($(this).data('oriamount'));
        $("#discount_idEd").val($(this).data('discount'));
        $("#discountamountEd").val($(this).data('discharge'));
        $("#finalAmountEd").val($(this).data('final'));

      })

    </script>
@endpush