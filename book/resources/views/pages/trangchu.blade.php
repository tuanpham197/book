<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<base href="{{asset('')}}">
</head>
<body>

	@include('pages.header')
	@yield('noidung')





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
    });


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
    });
    </script>

    @yield('script')

</body>
</html>
