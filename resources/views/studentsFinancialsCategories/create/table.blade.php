<div class="table-responsive">

  @include('studentsFinancialsCategories.create.fields')

  <table class="table" width="100%" id="studentsFinancialsCategories-create-table">
    <thead>
      <tr class="theme-main">
        <th>@include('labels.frequency')@include('layouts.required')</th>
        <th>@include('labels.ctitle')@include('layouts.required')</th>
        <th>@include('labels.level')@include('layouts.required')</th>
        <th>@include('labels.amount')@include('layouts.required')</th>
        <th><a id="addcategory" class="btn btn-success"><i class="fa fa-plus"></i></a></th>
      </tr>
    </thead>

    <tbody id="categorylist">
    </tbody>

    <tfoot id="notes">
    </tfoot>
  </table>
</div>

@push('scripts') 
  <script type="text/javascript">

    var counter = 0, count = 0 , list = new Array(), pid, i;

    $('#addcategory').on('click', function(){
      
      $('#addcategory').hide();

      list[counter] = ++count;

      counter++;

      $('#categorylist').append('@include("studentsFinancialsCategories.create.fieldsN")')

      $('#notes').empty();
      for( var i = 0; i < list.length; i++){
        $('#notes').append('<input hidden type="checkbox" checked name="list[]" value="'+list[i]+'">');
      }

      $('#addcategory').show();
    });

    $(document).on('click', '#removecategory', function(){
      
      pid = this.parentNode.parentNode.id;

      counter--;

      for( var i = 0; i < list.length; i++){
        if ( list[i] == pid) {
          list.splice(i, 1);
        }
      }

      $(this).parent().parent().remove();

      $('#notes').empty();
      for( var i = 0; i < list.length; i++){
        $('#notes').append('<input hidden type="checkbox" checked name="list[]" value="'+list[i]+'">');
      }
    });

  </script>
@endpush