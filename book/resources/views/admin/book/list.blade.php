@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <style>
        .form-group{
            
            width: 100%;
        }
        .form-group .form-control{
            float: right;
            width: 75% !important;
        }
        .modal-body{
            display: flow-root;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
             @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tile</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Img</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                
                <tbody>
                     @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    @foreach ($book as $key => $value) 
                            
                   
                    <tr class="odd gradeX" align="center">
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->author}}</td>
                        <td><img style="width: 200px;height: 300px;" src="upload/img/{{$value->img}}" alt=""></td>
                        <td>
                        
                            <button class="btn btn-danger" data-catid={{$value->id}} data-toggle="modal" data-target="#delete">Delete</button>
                       
                            <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                                  </div>
                                  <form action="delete" method="post">
                                        {{csrf_field()}}
                                      <div class="modal-body">
                                            <p class="text-center">
                                                Are you sure you want to delete this?
                                            </p>
                                            <input type="hidden" name="category_id" id="cat_id" value="">

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                                        <button type="submit" class="btn btn-warning">Yes, Delete</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                       </td>
                        <td class="center">
                           <button type="button" class="btn btn-primary" data-catid={{$value->id}} data-mytitle="{{$value->title}}" data-desc="{{$value->description}}" data-author="{{$value->author}}" data-img="{{$value->img}}" data- data-toggle="modal" data-target="#edit">
                              Edit
                          </button>

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
                                         <form action="admin/book/edit" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                {{method_field('patch')}}
                                                {{csrf_field()}}
                                                
                                                <input type="hidden" name="category_id" id="cat_id" value="">
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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection