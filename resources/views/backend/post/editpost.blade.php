@extends('backend.master')
@section('main-content')
    <header class="content__title">
    <a href="{{route('post.index')}}" class="custom-button">Post list</a>

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
                    {!!Form::open(['route' => ['post.update',$post->id],'method' => 'post','enctype'=>'multipart/form-data'])!!}
                       {{method_field('PUT')}}
                        <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{$post->title}}" required>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <select class="select2" id="onchange_edit_category" name="cat_id" required>
                                <option>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $post->cat_id) selected = 'selected' @endif>{{$category->category_name}}</option> 
                                @endforeach
                           </select>
                         </div>
                         <div class="form-group">                        
                                <select class="select2" id="sub_edit_ajax_category" name="subcat_id" required>
                                        <option>Select Subcategories</option>
                                        @foreach ($sub_categories as $subcategory)
                                            <option value="{{$subcategory->id}}" @if($subcategory->id == $post->subcat_id) selected = 'selected' @endif>{{$subcategory->sub_category}}</option> 
                                        @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <input type="file" class="form-control" name="imagename" placeholder="Post Tittle" >
                                <i class="form-group__bar"></i>
                                 <img src="{{url('/images/'.$post->image)}}" width="150px" height="100px">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="description" required>{!!$post->description!!}</textarea>
                        </div>
                        <div class="form-group">                        
                            <select class="select2 form-control" name="position" data-minimum-results-for-search="Infinity" required>
                                <option value="1">Subaru</option>
                                <option value="2">Mitsubishi</option>
                                <option value="3">Hino</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Save Post</button>
                        {!!Form::close()!!}
                    </div>
    </div>
<script>
    	CKEDITOR.replace( 'description' );
        $('#onchange_edit_category').on('change', function(e) {
                //console.log(e);
                var categoryid = e.target.value;
                console.log(categoryid);
                $.get('/post/findsubcat/'+ categoryid, function (data) {
                    //console.log(data);
                    $('#sub_edit_ajax_category').empty();
                    //$('#success').html(data);

                    $('#sub_edit_ajax_category').append('<option value="0" disable="true" selected="true">--- Select Subcategory ---</option>');

                    $.each(data, function (index ,subeditcatObj) {
                        $('#sub_edit_ajax_category').append('<option style="color:black" value="' + subeditcatObj.id + '">' + subeditcatObj.sub_category + '</option>');
                    })
                });
            })
</script>
@endsection