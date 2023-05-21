@extends('Admin.layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Permissions</h4>

                                <div class="col-sm-auto ms-auto">
                                    <div class="list-grid-nav hstack gap-1">

                                        <a class="btn btn-success addMembers-modal" href="{{route('admin.permissions.create')}}"><i class="ri-add-fill me-1 align-bottom"></i>New Permission</a>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Permission Name</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @can('Permission access')
                                                    @foreach($permissions as $permission)
                                                       <tr>
                                                          <td>{{ $permission->name }}</td>

                                                          <td class="py-4 px-6 border-b border-grey-light text-right">
                                                            @can('Permission edit')
                                                            <a href="{{route('admin.permissions.edit',$permission->id)}}" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                            @endcan

                                                            @can('Permission delete')
                                                            <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button><i class="ri-delete-bin-5-line"></i></button>
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
    </div>
@endsection
