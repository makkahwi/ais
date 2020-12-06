@section('swModalForm')

  <form action="{{route('confLetter')}}">

    @include('studentsFinancials.dues.show.fields')

  </form>

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#sem_idSw").val($(this).data('sem'));
        $("#studentNoSw").val($(this).data('sno'));
        $("#category_idSw").val($(this).data('category'));
        $("#categoryamountSw").val($(this).data('oriamount'));
        $("#discount_idSw").val($(this).data('discount'));
        $("#discountamountSw").val($(this).data('discharge'));
        $("#finalamountSw").val($(this).data('oriamount')+' - '+$(this).data('discharge')+' = '+$(this).data('final'));

      })

    </script>
@endpush