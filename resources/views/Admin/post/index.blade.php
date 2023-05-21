
@extends('Admin.layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">




                @if ($message = Session::get('success'))
                    <div class="alert alert-borderless shadow alert-success" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                @endif

                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible shadow fade show mb-xl-0" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif



                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Posts</h4>

                                <div class="col-sm-auto ms-auto">
                                    <div class="list-grid-nav hstack gap-1">
                                        @can('Permission create')
                                        <a class="btn btn-success addMembers-modal" href="{{route('admin.posts.create')}}"><i class="ri-add-fill me-1 align-bottom"></i>New post</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">


                                    <div class="table-responsive" id="table-gridjs">
                                        <table class="table table-bordered gridjs-table" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Meta Title</th>
                                                    <th scope="col">Meta Description</th>
                                                    <th scope="col">Scope</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @can('Post access')
                                                   @foreach ($posts as $post)
                                                       <tr>
                                                           <td>{{ $post->title }}</td>
                                                           <td>
                                                            <img class="image avatar-xs shadow" alt="" src="{{ $post->getFirstMediaUrl() }}">
                                                           </td>
                                                           <td>{{substr(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($post->description))), 0, 200)}}</td>
                                                           <td>{{ $post->slug }}</td>
                                                           <td>{{ $post->meta_title }}</td>
                                                           <td>{{ $post->meta_description }}</td>
                                                           <td class="status">
                                                            @if($post->publish)
                                                            <span class="badge badge-soft-success text-uppercase">Publish</span>
                                                            @else
                                                            <span class="badge badge-soft-warning text-uppercase">Draft</span>
                                                            @endif
                                                           </td>

                                                           <td class="d-flex gap-2">

                                                            @can('Post edit')
                                                                <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                            @endcan

                                                            @can('Post delete')
                                                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-sm btn-danger remove-item-btn">Delete</button>
                                                                </form>
                                                            @endcan
                                                           </td>
                                                       </tr>
                                                   @endforeach
                                                @endcan
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable({
        "ordering": false
    });
});
</script>
