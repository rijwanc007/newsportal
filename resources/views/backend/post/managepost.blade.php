@extends('backend.master')
@section('main-content')
    <header class="content__title">
    <a href="{{route('post.create')}}" class="custom-button">CreatePost</a>

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
           <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            {{-- <th>Description</th> --}}
                            <th>Photo</th>
                            <th>Category</th>
                            {{-- <th>SubCategory</th> --}}
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>composer
                     @foreach ($posts as $post)
                        <tr>
                            
                            <td>{{$loop->index + 1}}</td>
                            <td>{!! str_limit($post->title, $limit = 30, $end = '...') !!}</td>
                            {{-- <td>{!! str_limit($post->description, $limit = 50, $end = '...') !!}</td> --}}
                            <td>
                               <img src="{{url('/images/'.$post->image)}}" width="150" height="60">
                            </td>
                            <td>{{$post->category_name}}</td>
                            {{-- <td>{{$post->sub_category}}</td> --}}
                            <td>
                                <a href="{{route('post.edit',$post->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $post->id }}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection