@section('swModalForm')

  @include('days.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#dayNameSw").val($(this).data('day'));

      })

    </script>
@endpush