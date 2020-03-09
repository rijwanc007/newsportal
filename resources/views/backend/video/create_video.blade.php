@extends('backend.master')
@section('main-content')
<header class="content__title">
        <a href="{{route('video.index')}}" class="custom-button">Manage Video</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => 'video.store','method' => 'post','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Video Tittle" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" name="link" placeholder="Video Link" required>
                    <i class="form-group__bar"></i>
                </div>
    
         
              
            <div class="form-group">
               <textarea class="form-control" name="vid_description" required></textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option>Select One</option>
                    <option value="1">Published </option>
                    <option value="2">Unpublished</option>
                   
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Save Video</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'vid_description' );
       
	</script>
@endsection
