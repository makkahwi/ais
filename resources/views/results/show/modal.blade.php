@section('swModalForm')

  <form action="{{ route ('transcript') }}">

    @csrf

    <div class="modal-body bg-info">
      <input type="hidden" name="sno" id="sno">
      <input type="hidden" name="sem" id="sem">
      @include('results.show.fields')
    </div>

  </form>

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#studentSw").val($(this).data('student'));
      $("#valueSw").val($(this).data('value'));
      $("#semSw").val($(this).data('semester'));
      $("#sem").val($(this).data('sem'));
      $("#gradeSw").val($(this).data('grade'));
      $("#sno").val($(this).data('studentno'));

    })

  </script>
@endpush