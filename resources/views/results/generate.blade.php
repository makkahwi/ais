@push('scripts') 
    <script type="text/javascript">

        var courseTotal = 0;
        var courseMark = 0;
        var markSpec;
        var level_id;
        var classroom_id;

        $('#yearesults').on('click', function(){

            $.get('currentSem', function(data1){
              
                $.each(data1, function(index1, sem){

                    $.get('alllevels', function(data2){
                        $.each(data2, function(index2, level){

                            level_idd = level.level_id;

                            $.get('activeclassrooms?level_idd='+level_idd, function(data3){
                                $.each(data3, function(index3, classroom){

                                    classroom_id = classroom.classroom_id;

                                    $.get('activestudents?classroom_id='+classroom_id, function(data4){
                                        $.each(data4, function(index4, student){

                                            $.get('activecourses?level_idd='+level_idd, function(data5){
                                                $.each(data5, function(index5, course){

                                                    courseTotal = 0;
                                                    markSpec = [student.studentNo, course.course_id, sem.semId];

                                                    $.get('marksntypes?markSpec='+markSpec, function(data6){
                                                        $.each(data6, function(index6, mark){
                                                            
                                                            courseTotal += mark.markValue / mark.max * mark.weight

                                                        });
                                                    });

                                                    courseMark = [ 1, student.studentNo, courseTotal]

                                                    $.post('resultstore?courseMark='+courseMark, function(response){
                                                    });

                                                });
                                            });

                                        });
                                    });

                                });
                            });

                        });
                    });

                });
            });

            location.reload()

        });

    </script>
@endpush