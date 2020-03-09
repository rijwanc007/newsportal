@extends('backend.master')
@section('main-content')
    <header class="content__title">
    <a href="{{route('video.create')}}" class="custom-button">Create Video</a>

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
                            <th>Link</th>
                            <th>description</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>composer
                     @foreach ($videos as $video)
                        <tr>
                           <td>{{$loop->index + 1}}</td>
                            <td>{!! str_limit($video->title, $limit = 30, $end = '...') !!}</td>
                            <td>{!! str_limit($video->link, $limit = 30, $end = '...') !!}</td>
                            <td>{!! str_limit($video->description, $limit = 50, $end = '...')!!}</td>
                            <td>
                                <a href="{{route('video.edit',$video->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $video->id }}" method="post" action="{{ route('video.destroy',$video->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $video->id }}').submit();
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