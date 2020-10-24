@section('swModalForm')

  @include('years.show.fields')
  
@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#titleSw").val($(this).data('yname'));

      })

    </script>
@endpush