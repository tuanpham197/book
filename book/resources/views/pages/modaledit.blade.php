<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="edit">Modal title</h5>
				<button type="button" class="close"  data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="member/book/edit" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					{{method_field('patch')}}
					{{csrf_field()}}

					
					<p>
						<div class="form-group">
							<label>Title</label>
							<input class="form-control" value="" name="title" id="title" />
						</div>  
					</p>
					<p>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" value="" style="width:300px; height:150px;"name="desc" id="desc"></textarea>
						</div>
					</p>
					<p>
						<div class="form-group">
							<label>Author</label>
							<input class="form-control" value="" id="author" name="author" placeholder="Please Enter Username" />
							<input type="hidden" name="name_id" id="cat_id" value="">
						</div>
					</p>
					<p>
						<div class="form-group">
							<label>Images</label>
							<input type="file" name="image" >
						</div>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			<form>
			</div>
		</div>
	</div>