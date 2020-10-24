@push('scripts')
    <script type="text/javascript"> // Data Searching /////////////////////////////////

        $(document).ready(function() {

            var table = $('#results-table').DataTable( {
                
                ordering: false,

                dom: 'Bfrtip',

                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn-success dataBtn',
                        text: '<i class="fa fa-copy"></i> Copy نسخ'
                    },
                    {
                        extend: 'excel',
                        className: 'btn-primary dataBtn',
                        text: '<i class="fa fa-file-excel"></i> Export تصدير'
                    },
                    {
                        extend: 'print',
                        className: 'btn-warning dataBtn',
                        text: '<i class="fas fa-print"></i> Print طباعة',
                        messageBottom: '<br>This document was automatically generated through {{ config('app.name') }} https://students.aqsa.edu.my',
                        customize: function ( win ) {
                            $(win.document.body)
                                .css( 'font-size', '10pt' );

                            $(win.document.body).find( 'h1' )
                                .addClass( 'compact' )
                                .css( 'font-size', '15pt' )
                                .css( 'text-align', 'center' )
                                .css( 'padding-bottom', '5%' );
                        }
                    }
                ]
                
            } );
        })

    </script>
@endpush