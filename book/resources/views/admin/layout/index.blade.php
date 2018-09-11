<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Khoa Phạm</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('admin_asset/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('admin_asset/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('admin_asset/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{URL::asset('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{URL::asset('admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

    <base href="{{asset('')}}">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.header')

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('admin_asset/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('admin_asset/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('admin_asset/dist/js/sb-admin-2.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{URL::asset('admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>



    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var cat_id = button.data('catid') 
        var modal = $(this)
        modal.find('.modal-body #cat_id').val(cat_id);
    });

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })


    $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var title  = button.data('mytitle') // Extract info from data-* attributes
      var desc   = button.data('desc')
      var author = button.data('author')
      var img    = button.data('img')
       var cat_id = button.data('catid') 
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-body #title').val(title)
      modal.find('.modal-body #desc').val(desc)
      modal.find('.modal-body #author').val(author)
      modal.find('.modal-body #img').val(img)
      modal.find('.modal-body #cat_id').val(cat_id)
    })
    </script>

    @yield('script');
</body>

</html>
