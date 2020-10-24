@section('swModalForm')

  @include('levels.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#titleSw").val($(this).data('level'));
        $("#descriptionSw").val($(this).data('desc'));

      })

    </script>
@endpush