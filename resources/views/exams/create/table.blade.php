<div class="table-responsive">

    @include('exams.create.fields')

    <table class="table" width="100%" id="exams-create-table">
        <thead>
            <tr class="theme-main">
                <th>@include('labels.course')@include('layouts.required')</th>
                <th>@include('labels.date')@include('layouts.required')</th>
                <th>@include('labels.note')</th>
                <th><a id="addexam" class="btn btn-success"><i class="fa fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody id="examslist">
        </tbody>

        <tfoot id="notes">
        </tfoot>
    </table>
</div>

@push('scripts') 
    <script type="text/javascript">

        var counter = 0, count = 0 , list = new Array(), pid, i;

        $('#addexam').on('click', function(){

            $('#submitbutton').show();

            $('#addexam').hide();
            
            list[counter] = ++count;

            counter++;

            $('#examslist').append('@include("exams.create.fieldsN")')

            var level_id = document.getElementById("level_idCrH").value;
                
            $.get('dynamicCourse?level_id='+level_id, function(data){
                console.log(data);

                $('#course_idCr'+count+'').empty();

                $('#course_idCr'+count+'').append('<option value="">Select a Course...</option>')
                $.each(data, function(index, cour){
                    $('#course_idCr'+count+'').append('<option value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
                });

            });

            $('#notes').empty();
            for( var i = 0; i < list.length; i++){
                $('#notes').append('<input hidden type="checkbox" checked name="list[]" value="'+list[i]+'">');
            }

            $('#addexam').show();
        });

        $(document).on('click', '#removeexam', function(){
            
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

        $('#level_idCrH').on('change',function(e){ // Dynamic Courses Change ///////////////////
            
            console.log(e);

            var level_id = e.target.value;
            
            $.get('dynamicCourse?level_id='+level_id, function(data){
                    console.log(data);

                for (var i = 0; i <= count; i++) {

                    $('#course_idCr'+i+'').empty();

                    $('#course_idCr'+i+'').append('<option value="">Select a Course...</option>')
                    $.each(data, function(index, cour){
                        $('#course_idCr'+i+'').append('<option value="'+cour.id+'">'+cour.code+' | '+cour.title+'</option>')
                    });

                }
            });

        });

    </script>
@endpush