<div class="col-12 grid-margin stretch-card">
    <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Input Data - Struktur Organisasi</h4>
                        <div class="table-responsive">
                        <div align="right"><a class="btn btn-dark btn-rounded btn-fw" href="{{route('sto.create')}}"><i class="icon icon-plus mr-2"></i>Input Data</a></div>
                        </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="t_struktur_o" class="table table-bordered table-condensed table-striped">
                                    <thead>
                                        <tr bgcolor="#c7c6c1">
                                            <th width="50"><b>#ID</th>
                                            <th width="500"><b>file</th>
                                            <th width="100"><b>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                
            </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('#t_struktur_o').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            responsive: true, // <-- penting!
            autoWidth: false,
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row mb-2'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            ajax: "{{ route('sto.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'image_path',
                    name: 'image_path'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

        // Print functionality
        // $('#printTable').on('click', function () {
        //     var tableContent = $('#t_activity').clone();
        //     var newWindow = window.open('', '', 'height=600,width=800');
        //     newWindow.document.write('<html><head><title>Print Data</title>');
        //     newWindow.document.write('<style>table {width: 100%; border-collapse: collapse;} table, th, td {border: 1px solid black;} th, td {padding: 10px; text-align: left;}</style>');
        //     newWindow.document.write('</head><body>');
        //     newWindow.document.write('<h3>Data Program</h3>');
        //     newWindow.document.write(tableContent[0].outerHTML);
        //     newWindow.document.write('</body></html>');
        //     newWindow.document.close();
        //     newWindow.print();
        // });
    });
</script>