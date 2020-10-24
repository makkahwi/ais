<div class="table-responsive">

    @include('sches.create.fields')

    <table class="table" width="100%" id="sches-create-table">
        <thead>
            <tr class="theme-main">
                <th width = 20%>@include('labels.time')@include('layouts.required')</th>
                <th width = 30%>@include('labels.course')@include('layouts.required')</th>
                <th width = 40%>@include('labels.teacher')@include('layouts.required')</th>
                <th width = 10%><a id="addclass" class="btn btn-success"><i class="fa fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody id="classlist">
        </tbody>

        <tfoot id="notes">
        </tfoot>
    </table>
</div>

@push('scripts') 
    <script type="text/javascript">

        var counter = 0, count = 0 , list = new Array(), pid, i;

        $('#addclass').on('click', function(){
            
            $('#addclass').hide();

            list[counter] = ++count;

            counter++;

            $('#classlist').append('@include("sches.create.fieldsN")')

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

            $('#addclass').show();
        });

        $(document).on('click', '#removeclass', function(){
            
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

            $('#classroom_idCrH').empty();
            $.get('dynamicClassroom?level_id='+ level_id, function(data){
                console.log(data);

                $('#classroom_idCrH').append('<option value="">Select a Classroom...</option>')
                $.each(data, function(index, classroom){
                    $('#classroom_idCrH').append('<option value="'+classroom.id+'">'+classroom.title+'</option>')
                });
            });
            
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