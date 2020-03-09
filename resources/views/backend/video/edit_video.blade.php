@extends('backend.master')
@section('main-content')
<header class="content__title">
        <a href="{{route('video.index')}}" class="custom-button">Manage Video</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => ['video.update',$videobyid->id],'method' => 'post','enctype'=>'multipart/form-data'])!!}
        
        {{method_field('PUT')}} 
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{$videobyid->title}}" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" name="link" value="{{$videobyid->link}}" required>
                    <i class="form-group__bar"></i>
                </div>
    
         
              
            <div class="form-group">
            <textarea class="form-control" name="vid_description" required>{{$videobyid->description}}</textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option>Select One</option>
                    <option value="1"@if($videobyid->status == 1) selected = 'selected' @endif>Published</option>
                    <option value="2"@if($videobyid->status == 2) selected = 'selected' @endif>Unpublished</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Update Video</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'vid_description' );
       
	</script>
@endsection
