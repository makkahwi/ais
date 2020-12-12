<div class="table-responsive">
    <table class="table tableTail" width="100%" id="applicants-table">
    
        <thead>
            @include('applicants.tableHead')
        </thead>

        <tfoot>
            @include('applicants.tableHead')
        </tfoot>
        
        <tbody>
            @include('applicants.tableRow')
        </tbody>
    </table>
</div>

@push('scripts') 
    <script type="text/javascript">

        $('.updateRecord').on('click',function(){
            
            var studentNo = $(this).parent().parent().find('#oldStudentNo').val();
            var newStudentNo = $(this).parent().parent().find('#studentNo').val();

            var status = $(this).parent().parent().find('#status').val();
            var classroom = $(this).parent().parent().find('#classroom').val();

            $(this).parent().parent().find('#statusUpdateConfirmation').empty();
            $(this).parent().parent().find('#studentNoUpdateConfirmation').empty();
            $(this).parent().parent().find('#levelUpdateConfirmation').empty();
            $(this).parent().parent().find('#classroomUpdateConfirmation').empty();
            $(this).parent().parent().find('#updateConfirmation').empty();
            $(this).parent().parent().find('#updateConfirmation').append('@include("layouts.updated")');

            $.get('applicantUpdate?status='+status+'&studentNo='+studentNo+'&classroom='+classroom+'&newStudentNo='+newStudentNo, function(data){
                $(this).parent().parent().find('#updateConfirmation').append('@include("layouts.updated")');
            });
        });

        $('.statusId').on('change',function(){
            
            $(this).parent().parent().find('#statusUpdateConfirmation').empty();
            $(this).parent().parent().find('#updateConfirmation').empty();
            $(this).parent().parent().find('#statusUpdateConfirmation').append('@include("layouts.changed")');

        });

        $('.levelId').on('change',function(e){

            var level = e.target.value - 1;
            
            var studentNo = $(this).parent().parent().find('#oldStudentNo').val();

            var firstStudentNo = Math.floor(studentNo / 100000);

            var secondStudentNo = studentNo % 1000;

            if (level < 10)
                var finalStudentNo =  firstStudentNo+''+0+''+level+''+secondStudentNo;
            else
                var finalStudentNo =  firstStudentNo+''+level+''+secondStudentNo;

            $(this).parent().parent().find('#studentNo').val(finalStudentNo);

            $(this).parent().parent().find('#studentNoUpdateConfirmation').empty();
            $(this).parent().parent().find('#levelUpdateConfirmation').empty();
            $(this).parent().parent().find('#classroomUpdateConfirmation').empty();
            $(this).parent().parent().find('#updateConfirmation').empty();
            $(this).parent().parent().find('#studentNoUpdateConfirmation').append('@include("layouts.changed")');
            $(this).parent().parent().find('#levelUpdateConfirmation').append('@include("layouts.changed")');
            $(this).parent().parent().find('#classroomUpdateConfirmation').append('<div class="alert alert-danger" role="alert"><i class="fa fa-arrow-up"></i> Update This</div>');

        });

        $('.classroomId').on('change',function(){

            $(this).parent().parent().find('#classroomUpdateConfirmation').empty();
            $(this).parent().parent().find('#updateConfirmation').empty();
            $(this).parent().parent().find('#classroomUpdateConfirmation').append('@include("layouts.changed")');

        });

    </script>
@endpush