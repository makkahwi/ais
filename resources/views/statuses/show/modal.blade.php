@section('swModalForm')

  @include('statuses.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#titleSw").val($(this).data('name'));
        $("#descSw").val($(this).data('desc'));

      })

    </script>
@endpush