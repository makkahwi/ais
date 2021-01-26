<div class="table-responsive">

  @include('attendances.create.fieldsH')

  <table class="table" width="100%" id="attendances-create-table">
    <thead>
      <tr class="theme-main">
        <th></th>
        <th>@include('labels.name')@include('layouts.required')</th>
        <th colspan="3">@include('labels.atten')@include('layouts.required')</th>
        <th>@include('labels.note')</th>
      </tr>
      <tr>
        <th colspan="2"></th>
        <th>Attended</th>
        <th>Late</th>
        <th>Absent</th>
        <th></th>
      </tr>
    </thead>

    <tbody id="attendanceslist">
    </tbody>

    <tfoot id="footer">
    </tfoot>
  </table>
</div>

@push('scripts') 
    <script type="text/javascript">

        var counter;

        $('#classroom_idCrH').on('change',function(e){

            

            var classroom_id = e.target.value;

            counter = 0;

            $('#attendanceslist').empty();
            $.get('dynamicStudents?classroom_id='+classroom_id, function(data){
              

                $.each(data, function(index, student){
                    ++counter
                    $('#attendanceslist').append('@include("attendances.create.fieldsN")')
                });

                $('#footer').empty();
                $('#footer').append('<input hidden type="number" name="count" value="'+counter+'">');
            });

        });

    </script>
@endpush