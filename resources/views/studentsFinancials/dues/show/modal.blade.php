@section('swBigModalForm')

  <form action="{{route('confLetter')}}">

    @include('studentsFinancials.dues.show.fields')

  </form>

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#show', function(data){

        $("#sem_idDueSw").val($(this).data('sem'));
        $("#studentNoDueSw").val($(this).data('sno'));
        $("#category_idDueSw").val($(this).data('category'));
        $("#categoryamountDueSw").val($(this).data('oriamount'));
        $("#discount_idDueSw").val($(this).data('discount'));
        $("#discountamountDueSw").val($(this).data('discharge'));
        $("#finalamountDueSw").val($(this).data('oriamount')+' - '+$(this).data('discharge')+' = '+$(this).data('final'));

      })

    </script>
@endpush