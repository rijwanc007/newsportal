@extends('backend.master')
@section('main-content')
    <header class="content__title">
        <a href=""data-toggle="modal" data-target="#modal-default" class="custom-button">AddCategory</a>
        <div class="actions">
                <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="" class="dropdown-item">Refresh</a>
                        <a href="" class="dropdown-item">Manage Widgets</a>
                        <a href="" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
    </header>
    <div class="card" id="allcategory">
        <div class="card-body">
           <div class="table-responsive" >
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Category Name</th>
                            <th>Created at</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                       <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                            <a href="" id="{{$category->id}}" class="btn btn-primary edit"  data-toggle="modal" data-target="#edit-modal-default"><i class="fa fa-edit"></i></a>
                            <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy',$category->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Create Category</h5>
                </div>
                <div class="modal-body">
                       {!!Form::open(['route' => 'category.store','method' => 'post'])!!}
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name ="category_name" placeholder="Category Name">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="status">
                            <option>Select Status</option>
                       <option style="color:black" value="1">highlighted</option>
                       <option style="color:black" value="2">Not highlighted</option>
                           
                        </select>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save changes</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-modal-default" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Edit Category</h5>
                    </div>
                    <div class="modal-body">
                           {!!Form::open(['url'=>'category/update','method' => 'post', 'id'=>'category_update'])!!}
                        <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="category_name" name ="category_name" value="">
                            <i class="form-group__bar"></i>
                            <input type="hidden" class="form-control form-control-sm" id="category_id" name ="category_id" value="">
                            <i class="form-group__bar"></i>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link">Update</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

        <script>
            $(document).on('click','.edit',function(){
                var catid = $(this).attr('id');
                $.get('category/catbyid/'+ catid, function(data){
                    $('#category_update').find('#category_name').val(data.category_name);
                    $('#category_update').find('#category_id').val(data.id);
                });
            });
            $('#category_update').on('submit',function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url,data,function(data){
                    $('#category_update').trigger('reset');
                    //$('#allcategory').load(location.href + ' #allcategory');
                    window.location = "/category";
                    //console.log(data);
                });

            });
        
        </script>
@endsection