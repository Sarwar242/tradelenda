<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>


    <title>Trade Lenda @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/site.css') }}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    		<!-- Datatables css-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.bootstrap4.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.1/css/fixedColumns.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.2/css/scroller.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.1.1/css/searchPanes.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css"/>
    @yield('style')
    <style type="text/css">
    .paginate_button{
    padding: 0px !important;
    }
    .table{
        width: 100% !important;
    }
    </style>

</head>
<body>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
    {{ session('status') }}
    </div>
    @endif
    <!--   <main class="py-4">-->
            @yield('content')


                    <!-- Scripts -->

            <script src="{{ URL::to('js/jquery.min.js') }}"></script>
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


            <script type="text/javascript">
                $(document).ready(function() {
                    $('#dataTable').DataTable({
                        responsive: true,
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
                        'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1,-2] /* 1st one, start by the right */
                }]
                    });
                });
            </script>


            <script type="text/javascript">
                $(document).ready(function() {
                    $('#dataTable4').DataTable({
                        responsive: true,
                        'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1,-2] /* 1st one, start by the right */
                }]
                    });
                });
            </script>

            @yield('script')
            <!-- Start of tradelendasupport Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=d958fe34-52d4-4992-9be8-8aef80d9811c"> </script>
    <!-- End of tradelendasupport Zendesk Widget script -->
</body>
</html>
