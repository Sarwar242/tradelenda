<!DOCTYPE html>
<html>
<head>
	<title>Trade Lenda || @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="shortcut icon" href="#">
	{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}?ver=1.1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}?ver=1.1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}?ver=1.1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}?ver=1.1"> --}}
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/> --}}
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script> --}}
<!-- Styles -->
<link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/site.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Datatables css-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.1/css/fixedColumns.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.2/css/scroller.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.1.1/css/searchPanes.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css"/>
   

<script src="{{ URL::to('js/jquery.min.js') }}"></script>
<style type="text/css">
.paginate_button{
padding: 0px !important;
}
.table{
    width: 100% !important;
}
</style>


	@yield('style')
</head>
<body>
{{--
	<input type="checkbox" id="check"> --}}



	@yield('contents')

    <!-- Scripts -->

    <script src="{{ URL::to('js/site.js') }}" defer></script>
    <script src="{{ URL::to('js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Datatables js-->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap4.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.1.1/js/searchPanes.bootstrap4.min.js"  defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"  defer></script>

    <script>
        $(document).ready(function(){
          $('ul li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
        });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': [-1,-2] /* 1st one, start by the right */
        }]
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable2').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': [-1,-2] /* 1st one, start by the right */
        }]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable3').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': [-1,-2] /* 1st one, start by the right */
        }]
            });
        });
    </script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"/>
     
  
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable4').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': [-1] /* 1st one, start by the right */ 
        }]
        
            });
        });
    </script>

{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable5').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1] /* 1st one, start by the right */
    }]
        });
    });
</script> --}}

{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable6').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1,-2] /* 1st one, start by the right */
    }]
        });
    });
</script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function() {
          $('.select2').select2({
            theme: "classic"
            //allowClear: true
        });

      });
    </script>

<script>
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }
</script>
    @yield('script')
</body>
</html>
