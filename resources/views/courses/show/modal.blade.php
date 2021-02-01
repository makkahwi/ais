@section('swModalForm')

  @include('courses.show.fields')

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#titleSw").val($(this).data('name'));
      $("#codeSw").val($(this).data('code'));
      $("#textBookSw").val($(this).data('book'));
      $("#level_idSw").val($(this).data('level'));
      $("#descriptionSw").val($(this).data('desc'));
      $("#status_idSw").val($(this).data('status'));

    })

  </script>
@endpush