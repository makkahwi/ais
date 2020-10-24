@section('swModalForm')

  @include('sems.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#titleSw").val($(this).data('name'));
        $("#year_idSw").val($(this).data('year'));
        $("#startSw").val($(this).data('sdate'));
        $("#joinSw").val($(this).data('jdate'));
        $("#resultsSw").val($(this).data('rdate'));
        $("#endSw").val($(this).data('edate'));

      })

    </script>
@endpush