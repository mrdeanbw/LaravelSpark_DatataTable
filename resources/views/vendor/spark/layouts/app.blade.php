<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.2.0/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href="/css/DatatableCSS/editor.dataTables.min.css" rel="stylesheet">

    <!-- Scripts -->
    @yield('scripts', '')

    <!-- Global Spark Object -->
    <script>
        window.Spark = <?php echo json_encode(array_merge(
            Spark::scriptVariables(), []
        )); ?>;
    </script>
</head>
<body class="with-navbar">
    <div id="spark-app" v-cloak>
        <!-- Navigation -->
        @if (Auth::check())
            @include('spark::nav.user')
        @else
            @include('spark::nav.guest')
        @endif

        <!-- Main Content -->
        @yield('content')

        <!-- Application Level Modals -->
        @if (Auth::check())
            @include('spark::modals.notifications')
            @include('spark::modals.support')
            @include('spark::modals.session-expired')
        @endif
    </div>

    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="/js/sweetalert.min.js"></script>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.0/js/dataTables.rowReorder.min.js"></script>
    <script src="/js/DatatableJS/dataTables.editor.js"></script>


    <script>
        var editor; // use a global for the submit and return data rendering in the examples
        console.log("ready document1");
        $(document).ready(function() {
            console.log("ready document!");
            editor = new $.fn.dataTable.Editor( {
                //ajax:  '../php/sequence.php',
            ajax: {
                url: 'data-response',
                headers: {
                   //  {{ csrf_field() }}
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
                table: '#example',
                idSrc:  'display_sequence',
                fields: [ 
                    // {
                    //     label: 'Order:',
                    //     name: 'facility_id',
                    //     multiEditable: false
                    // }, 
                    {
                        label: 'Template Name:',
                        name:  'name'
                    }, {
                        label: 'Description:',
                        name:  'description'
                    }, {
                        label: 'Display Sequence',
                        name:  'display_sequence'
                    }, {
                        label: 'Required:',
                        name:  'required'
                    }, 
                    {
                        label: 'User Editable',
                        name:  'user_editable'
                    },
                    {
                        label: 'Type:',
                        name:  'type'
                    },
                ]
            } );
        
            var table = $('#example').DataTable( {
                dom: 'Bfrtip',
                //ajax: '../php/sequence.php',
                ajax: '/datatables/data',
                columns: [
                    // { data: 'facility_id', className: 'reorder' },
                    { data: 'name' },
                    { data: 'description' },
                    { data: 'display_sequence' },
                    { data: 'user_editable' },
                    { data: 'required' },
                    { data: 'type' }                          
                ],
                    
                // columns: [
                //     { "data" : "facility_id",   name : 'facility_id' },
                //     { "data": "name",           name : 'name' }, 
                //     { "data": "description" ,    name : 'description' },
                //     { "data": "display_sequence", name : 'display_sequence' },
                //     { "data": "required" ,      name : 'required' },
                //     { "data": "type" ,          name : 'type' }
                // ],

                columnDefs: [
                    { orderable: false, targets: [ 1,2,3 ] }
                ],
                // rowReorder: {
                //     dataSrc: 'readingOrder',
                //     editor:  editor
                // },
                select: true,
                buttons: [
                    { extend: 'create', editor: editor },
                    { extend: 'edit',   editor: editor },
                    { extend: 'remove', editor: editor }
                ]
            } );
        
            editor
                .on( 'postCreate postRemove', function () {
                    // After create or edit, a number of other rows might have been effected -
                    // so we need to reload the table, keeping the paging in the current position
                    table.ajax.reload( null, false );
                } )
                .on( 'initCreate', function () {
                    // Enable order for create
                    //editor.field( 'readingOrder' ).enable();
                } )
                .on( 'initEdit', function () {
                    // Disable for edit (re-ordering is performed by click and drag)
                    //editor.field( 'readingOrder' ).disable();
                } );
        } );
    
    </script>

</body>
</html>
