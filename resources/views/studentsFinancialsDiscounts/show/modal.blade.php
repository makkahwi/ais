@section('swModalForm')

  <form action="{{route('confLetter')}}">

    @include('studentsFinancialsDiscounts.show.fields')

  </form>

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#typeSw").val($(this).data('type'));
      $("#titleSw").val($(this).data('title'));
      $("#descriptionSw").val($(this).data('description'));
      $("#amountSw").val($(this).data('amount'));

    })

  </script>
@endpush