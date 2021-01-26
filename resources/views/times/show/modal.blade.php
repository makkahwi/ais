@section('swModalForm')
      
  @include('times.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#timeNameSw").val($(this).data('tname'));
      $("#startTimeSw").val($(this).data('stime'));
      $("#endTimeSw").val($(this).data('etime'));

    })

  </script>
@endpush