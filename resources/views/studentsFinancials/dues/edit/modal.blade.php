@section('edBigModalForm')
      
    <form action="{{ route ('sFinancials.update', 1) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('patch')

        <div class="modal-body bg-warning">
            <input type="hidden" name="id" id="idDueEd">
            @include('studentsFinancials.dues.edit.fields')
        </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

    $(document).on('click', '#edit', function(data){

        $("#idDueEd").val($(this).data('id'));
        $("#sem_idDueEd").val($(this).data('sem'));
        $("#studentNoDueEd").val($(this).data('sno'));
        $("#category_idDueEd").val($(this).data('category'));
        $("#categoryamountDueEd").val($(this).data('oriamount'));
        $("#discount_idDueEd").val($(this).data('discount'));
        $("#discountamountDueEd").val($(this).data('discharge'));
        $("#finalAmountDueEd").val($(this).data('final'));

      })

    </script>
@endpush