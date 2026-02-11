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
    
    <!-- Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- jQuery UI CSS for sortable -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    
    @stack('styles')

    <style>
        /* Sortable handle styling */
        .handle {
            cursor: grab;
            transition: color 0.3s ease;
        }
        .handle:hover {
            color: #5b73e8 !important;
        }
        .handle:active {
            cursor: grabbing;
        }
        
        /* Sortable helper */
        .ui-sortable-helper {
            background: #f8f9fa !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
            display: table;
            width: 100% !important;
        }
        
        /* Sortable placeholder */
        .ui-sortable-placeholder {
            visibility: visible !important;
            background: #f0f0f0 !important;
            border: 2px dashed #ddd !important;
        }
        
        /* Table row styling for sortable */
        tr.row1 {
            cursor: move;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.layouts.navigation')

        <div class="page-content">
            @yield('content')
        </div>
    </div>

    <!-- JavaScript Loading Order -->
    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- jQuery UI SECOND (MUST be after jQuery) -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    
    <!-- Bootstrap Bundle -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    
    <!-- Custom App JS -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <script>
    $(document).ready(function() {
        // Initialize DataTable for basic-datatable if exists
        if ($('#basic-datatable').length) {
            $('#basic-datatable').DataTable({
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
                }
            });
        }
        
        // Initialize sortable for coupon table
        function initSortableTable() {
            if ($("#tablecontents").length && $("#tablecontents tr.row1").length > 0) {
                // Destroy existing sortable if any
                if ($("#tablecontents").hasClass("ui-sortable")) {
                    $("#tablecontents").sortable("destroy");
                }
                
                // Initialize sortable
                $("#tablecontents").sortable({
                    items: "tr.row1",
                    cursor: 'move',
                    opacity: 0.8,
                    handle: '.handle',
                    placeholder: "ui-sortable-placeholder",
                    start: function(e, ui){
                        ui.placeholder.height(ui.item.height());
                    },
                    update: function(event, ui) {
                        sendOrderToServer();
                    }
                });
                
                // Enable sortable
                $("#tablecontents").sortable("enable");
                
                console.log("Sortable initialized with " + $("#tablecontents tr.row1").length + " rows");
            }
        }
        
        // Call initialization
        initSortableTable();
        
        // Re-initialize if table contents change (like after search)
        $('#searchCoupons').on('input', function() {
            // Wait a bit for the DOM to update
            setTimeout(function() {
                initSortableTable();
            }, 100);
        });
        
        function sendOrderToServer() {
            var order = [];
            $('tr.row1').each(function(index, element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: index + 1
                });
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('admin.coupon.update-order') }}",
                data: {
                    order: order,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status == "success") {
                        // Show success toast
                        toastr.success('Coupon order updated successfully!');
                        
                        // Update row numbers if needed
                        updateRowNumbers();
                    } else {
                        toastr.error('Failed to update order');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error updating order: ' + error);
                }
            });
        }
        
        function updateRowNumbers() {
            $('tr.row1').each(function(index) {
                $(this).find('td:first .fw-semibold').text(index + 1);
            });
        }
        
        // Initialize tooltips
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
    </script>
    
    @stack('scripts')
</body>
</html>