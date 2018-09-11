<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action=""></form>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
			</div>
			<form action="member/book/delete" method="post">
				{{method_field('patch')}}
				{{csrf_field()}}
				<div class="modal-body">
					<p class="text-center">
						Are you sure you want to delete this?
					</p>
					<input type="hidden" name="name_id" id="cat_id" value="">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
					<button type="submit" class="btn btn-warning">Yes, Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>