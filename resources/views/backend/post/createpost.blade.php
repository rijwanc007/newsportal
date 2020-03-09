@extends('backend.master')
@section('main-content')
<header class="content__title">
        <a href="{{route('post.index')}}" class="custom-button">Show Post</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => 'post.store','method' => 'post','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Post Tittle" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                <select class="select2" id="onchange_category" name="cat_id" required>
                    <option>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option> 
                    @endforeach
               </select>
             </div>
             <div class="form-group">                        
                <select class="form-control" id="sub_ajax_category" name="subcat_id" data-minimum-results-for-search="Infinity" required>
                    <option>Select Subcategory</option>
                </select>
            </div>
            <div class="form-group">
                    <input type="file" class="form-control" name="imagename" placeholder="Post Tittle" required>
                    <i class="form-group__bar"></i>
            </div>
               
            <div class="form-group">
               <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="position" data-minimum-results-for-search="Infinity" required>
                        <option>Select One</option>
                    <option value="main-high">Main-Highlited</option>
                    <option value="main-right">Main-High-right</option>
                    <option value="main-bottom">Main-High-bottom</option>
                    <option value="main-sub-bottom">Main-High-sub-bottom</option>
                    <option value="cat-top">Category-Top</option>
                    <option value="cat-right">Category-Right</option>
                    <option value="cat-bottom1">Category-Bottom-Row1</option>
                    <option value="cat-bottom2">Category-Bottom-Row2</option>
                    <option value="cat-bottom3">Category-Bottom-Row3</option>
                    <option value="cat-bottom4">Category-Bottom-Row4</option>
                    <option value="pictur-news">Picture News</option>
                    <option value="news">News</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Save Post</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'description' );
        $('#onchange_category').on('change', function(e) {
                //console.log(e);
                var categoryid = e.target.value;
                $.get('findsubcat/'+ categoryid, function (data) {
                    //console.log(data);
                    $('#sub_ajax_category').empty();
                    //$('#success').html(data);

                    $('#sub_ajax_category').append('<option value="0" disable="true" selected="true">--- Select Subcategory ---</option>');

                    $.each(data, function (index ,subcatObj) {
                        $('#sub_ajax_category').append('<option style="color:black" value="' + subcatObj.id + '">' + subcatObj.sub_category + '</option>');
                    })
                });
            })
	</script>
@endsection
