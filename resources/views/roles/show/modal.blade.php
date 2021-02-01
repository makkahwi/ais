@section('swModalForm')

  @include('roles.show.fields')

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#titleSw").val($(this).data('name'));
      $("#descriptionSw").val($(this).data('desc'));

    })

  </script>
@endpush