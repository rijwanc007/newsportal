@extends('backend.master')
@section('main-content')
    <header class="content__title">
        <a href=""data-toggle="modal" data-target="#sub-category-modal" class="custom-button">Add SubCategory</a>

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
    <div class="card">
            <div class="card-body">
                    <div class="table-responsive" >
                         <table id="data-table" class="table">
                             <thead>
                                 <tr>
                                     <th>S.N</th>
                                     <th>Category Name</th>
                                     <th> Sub Category </th>
                                     <th>Created at</th>
                                     <th>Options</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($sub_categories as $sub_category)
                                <tr>
                                     <td>{{$loop->index +1}}</td>
                                     <td>{{$sub_category->category_name}}</td>
                                     <td>{{$sub_category->sub_category}}</td>
                                     <td>{{$sub_category->created_at}}</td>
                                     <td>
                                     <a href="" id="{{$sub_category->id}}" class="btn btn-primary edit_sub"   data-toggle="modal" data-target="#subcat-edit-modal"><i class="fa fa-edit"></i></a>
                                     <form id="delete-form-{{$sub_category->id }}" method="post" action="{{ route('subcategory.destroy',$sub_category->id) }}" style="display: none">
                                         {{ csrf_field() }}
                                         {{ method_field('DELETE') }}
                                     </form>
                                     <a href="" onclick="
                                             if(confirm('Are you sure, You Want to delete this?'))
                                             {
                                             event.preventDefault();
                                             document.getElementById('delete-form-{{ $sub_category->id }}').submit();
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

    

    <div class="modal fade" id="sub-category-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Create Sub Category</h5>
                </div>
                {!!Form::open(['route' => 'subcategory.store','method' => 'post'])!!}
                <div class="modal-body">
                  <div class="form-group">
                            <select class="form-control" name="category_name">
                                <option>Select Category</option>
                            @foreach ($categories as $category)
                            <option style="color:black" value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="sub_category" placeholder="Sub Category Name">
                        <i class="form-group__bar"></i>
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

    <div class="modal fade" id="subcat-edit-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Edit Sub Category</h5>
                    </div>
                    {!!Form::open(['url'=>'subcategory/update','method' => 'post', 'id'=>'subcategory_update'])!!}
                    <div class="modal-body">
                           <div class="form-group">
                                <select class="form-control" name="category_name" id="subcategory_select">
                                    <option>Select Category</option>
                                @foreach ($categories as $category)
                         <option style="color:black" value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="sub_category" name ="sub_category" value="">
                            <i class="form-group__bar"></i>
                            <input type="hidden" class="form-control form-control-sm" id="subcategory_id" name ="subcategory_id" value="">
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
                $(document).on('click','.edit_sub',function(){
                    var subcatid = $(this).attr('id');
                    $.get('subcategory/subcatbyid/'+ subcatid, function(data){
                        $('#subcategory_update').find('#sub_category').val(data.sub_category);
                        $('#subcategory_update').find('#subcategory_id').val(data.id);
                        $('#subcategory_update').find('#subcategory_select').val(data.category);
                    });
                });
                $('#subcategory_update').on('submit',function(e){
                    e.preventDefault();
                    var data = $(this).serialize();
                    var url = $(this).attr('action');
                    $.post(url,data,function(data){
                        $('#subcategory_update').trigger('reset');
                        //$('#allcategory').load(location.href + ' #allcategory');
                        window.location = "/subcategory";
                        console.log(data);
                    });
    
                });
            
            </script>
@endsection