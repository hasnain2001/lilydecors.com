    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard - @yield('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    

        <!-- ✅ jQuery UI (for drag & drop + autocomplete) -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

        <!-- ✅ Toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- ✅ DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
        @stack('styles')

        <style>
            /* ✨ Optional styling for sortable handle hover */
            .handle {
                cursor: grab;
            }
            .handle:active {
                cursor: grabbing;
            }
            tr.ui-sortable-helper {
                background: #f8f9fa;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            }
        </style>
        <style>
    /* DataTable Base Styling */
    #basic-datatable {
        background-color: white;
        color: #212529;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
    }

    /* Table Header */
    #basic-datatable thead th {
        background-color: #f8f9fa;
        color: #212529;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        padding: 12px 10px;
    }

    /* Table Body */
    #basic-datatable tbody td {
        background-color: white;
        color: #212529;
        border-top: 1px solid #dee2e6;
        padding: 12px 10px;
        vertical-align: middle;
    }

    /* Hover Effect */
    #basic-datatable tbody tr:hover td {
        background-color: #f8f9fa;
    }

    /* Striped rows */
    #basic-datatable.table-striped tbody tr:nth-of-type(odd) td {
        background-color: #fafafa;
    }

    #basic-datatable.table-striped tbody tr:nth-of-type(odd):hover td {
        background-color: #f1f3f4;
    }

    /* Pagination Styling */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        background-color: white !important;
        color: #212529 !important;
        border: 1px solid #dee2e6 !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background-color: #007bff !important;
        color: white !important;
        border-color: #007bff !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #f8f9fa !important;
        color: #212529 !important;
    }

    /* Search & Length Inputs */
    .dataTables_wrapper .dataTables_filter input,
    .dataTables_wrapper .dataTables_length select {
        background-color: white;
        color: #212529;
        border: 1px solid #dee2e6;
        padding: 6px 12px;
        border-radius: 4px;
    }

    .dataTables_wrapper .dataTables_filter input:focus,
    .dataTables_wrapper .dataTables_length select:focus {
        border-color: #007bff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    /* Buttons */
    .dt-buttons .btn {
        background-color: white !important;
        color: #212529 !important;
        border: 1px solid #dee2e6 !important;
    }

    .dt-buttons .btn:hover {
        background-color: #f8f9fa !important;
        color: #212529 !important;
    }

    /* Info Text */
    .dataTables_info {
        color: #6c757d;
    }

    /* Border Styling */
    #basic-datatable {
        border: 1px solid #dee2e6;
        border-radius: 4px;
        overflow: hidden;
    }

    /* Responsive Fix */
    @media (max-width: 768px) {
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_length {
            margin-bottom: 10px;
        }
    }

    /* Sorting Icons */
    #basic-datatable thead th.sorting:before,
    #basic-datatable thead th.sorting:after,
    #basic-datatable thead th.sorting_asc:before,
    #basic-datatable thead th.sorting_asc:after,
    #basic-datatable thead th.sorting_desc:before,
    #basic-datatable thead th.sorting_desc:after {
        color: #007bff;
    }

    /* Remove Bootstrap's default table hover if any */
    .table-hover tbody tr:hover {
        background-color: transparent;
    }

    /* Ensure proper spacing */
    .dataTables_wrapper {
        padding: 20px 0;
    }

    /* Modal or Card wrapper styling */
    .card .dataTables_wrapper {
        padding: 1.25rem;
    }

    /* Dark text for all table content */
    #basic-datatable * {
        color: #212529;
    }
    </style>
    </head>

    <body>
        <div class="overlay"></div>

        <!-- ✅ Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- ✅ Main Content -->
        <div class="main-content">
            @include('admin.layouts.navigation')

            <div class="page-content">
                @yield('content')


            </div>
        </div>


        <!-- ✅ Load JS in correct order -->

        <!-- jQuery FIRST -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- jQuery UI SECOND (for sortable + autocomplete) -->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

        <!-- Bootstrap Bundle THIRD -->
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <!-- Toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- ✅ CKEditor (optional for forms) -->
        <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
        <script src="{{ asset('admin/js/ck-editor.js') }}"></script>

        <!-- ✅ Custom App JS -->
        <script src="{{ asset('admin/js/app.js') }}"></script>

        <!-- ✅ Global Scripts -->
        <script>
            // 🔍 Autocomplete Search (optional)
            $(function() {
                $('#searchInput').autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: '{{ route("admin.search") }}',
                            dataType: 'json',
                            data: { query: request.term },
                            success: function(data) {
                                response(data.stores || []);
                            }
                        });
                    },
                    minLength: 1
                });
            });
        </script>

        <!-- ✅ DataTables Initialization (Optional global setup) -->
    <script>
        $(document).ready(function() {
            // Initialize DataTable with export buttons
            const table = $('#basic-datatable').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                dom: '<"row"<"col-md-6"B><"col-md-6"f>><"row"<"col-md-12"tr>><"row"<"col-md-6"l><"col-md-6"p>>',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ],
                language: {
                    searchPlaceholder: "Search...",
                    lengthMenu: "_MENU_ per page",
                    info: "Showing _START_ to _END_ of _TOTAL_"
                },
                initComplete: function() {
                    // Style buttons
                    $('.dt-buttons .btn').addClass('btn-outline-primary btn-sm');
                    
                    // Hide custom search if exists
                    $('#searchBlogs').parent().parent().hide();
                }
            });

            // Optional: Connect custom search
            $('#searchBlogs').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Optional: Sortable rows
            if ($('#tablecontents').length) {
                $('#tablecontents').sortable({
                    items: 'tr',
                    handle: '.handle',
                    update: function() {
                        // Your update logic here
                    }
                });
            }
        });
    </script>
    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
        @stack('scripts')
    </body>
    </html>
