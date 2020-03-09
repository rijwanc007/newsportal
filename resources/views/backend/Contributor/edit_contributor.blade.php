@extends('backend.master')
@section('main-content')
    <header class="content__title">
    <a href="{{route('contributor.index')}}" class="custom-button">Contributor list</a>

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
                    {!!Form::open(['route' => ['contributor.update',$contributorbyid->id],'method' => 'post','enctype'=>'multipart/form-data'])!!}
                       {{method_field('PUT')}}
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{$contributorbyid->name}}" required>
                            <i class="form-group__bar"></i>
                        </div>
                       <div class="form-group">
                                <input type="file" class="form-control" name="contributorimage" placeholder="Post Tittle" >
                                <i class="form-group__bar"></i>
                                 <img src="{{url('/contributorimage/'.$contributorbyid->image)}}" width="150px" height="100px">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="designation" value="{{$contributorbyid->designation}}" required>
                                <i class="form-group__bar"></i>
                        </div>
                       <div class="form-group">                        
                                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                                    <option>Select One</option>
                                    <option value="1"@if($contributorbyid->status == 1) selected = 'selected' @endif>Active</option>
                                    <option value="2"@if($contributorbyid->status == 2) selected = 'selected' @endif>Deactive</option>
                                </select>
                            </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block blockbtn">Update Contributor</button>
                        {!!Form::close()!!}
                    </div>
    </div>
<script>
    	CKEDITOR.replace( 'description' );
        
</script>
@endsection