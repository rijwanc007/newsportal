@extends('backend.master')
@section('main-content')
<header class="content__title">
        <a href="{{route('contributor.index')}}" class="custom-button">Show Contributor</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => 'contributor.store','method' => 'post','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Contributor Name" required>
                <i class="form-group__bar"></i>
            </div>
            
            
            <div class="form-group">
                    <input type="file" class="form-control" name="contributorimage"  required>
                    <i class="form-group__bar"></i>
            </div>
               
            <div class="form-group">
                    <input type="text" class="form-control" name="designation" placeholder="Contributor Designation" required>
                    <i class="form-group__bar"></i>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                        <option>Select One</option>
                    <option value="1">Active</option>
                    <option value="2">Deactive</option>
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Save Contributor</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'description' );
       
	</script>
@endsection
