@section('swModalForm')

  <form action="{{route('confLetter')}}">

    @include('studentsFinancialsCategories.show.fields')

  </form>

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#batch_idSw").val($(this).data('batch'));
      $("#frequencySw").val($(this).data('frequency'));
      $("#titleSw").val($(this).data('title'));
      $("#level_idSw").val($(this).data('level'));
      $("#amountSw").val($(this).data('amount'));

    })

  </script>
@endpush