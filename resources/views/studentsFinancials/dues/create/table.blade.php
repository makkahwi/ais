<div class="table-responsive">

    @include('studentsFinancials.dues.create.fields')

    <table class="table" width="100%" id="studentsFinancials-create-table">
        <thead>
            <tr class="theme-main">
                <th>@include('labels.ctitle')@include('layouts.required')</th>
                <th>@include('labels.amount')</th>
                <th>@include('labels.dtitle')</th>
                <th>@include('labels.amount')</th>
                <th>@include('labels.famount')@include('layouts.required')</th>
                <th><a id="addfinance" class="btn btn-success"><i class="fa fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody id="financelist">
        </tbody>

        <tfoot id="notes">
        </tfoot>
    </table>
</div>

@push('scripts') 
    <script type="text/javascript">

        var counter = 0, count = 0 , list = new Array(), pid, i;

        $('#addfinance').on('click', function(){
            
            $('#addfinance').hide();

            list[counter] = ++count;

            counter++;

            $('#financelist').append('@include("studentsFinancials.dues.create.fieldsN")')

            $('#notes').empty();
            for( var i = 0; i < list.length; i++){
                $('#notes').append('<input hidden type="checkbox" checked name="list[]" value="'+list[i]+'">');
            }

            $('#addfinance').show();
        });

        $(document).on('click', '#removefinance', function(){
            
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