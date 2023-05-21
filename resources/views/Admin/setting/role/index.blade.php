@extends('Admin.layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Roles</h4>

                                <div class="col-sm-auto ms-auto">
                                    <div class="list-grid-nav hstack gap-1">
                                        <a class="btn btn-success addMembers-modal" href="{{route('admin.roles.create')}}"><i class="ri-add-fill me-1 align-bottom"></i> Add New Role</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Role Name</th>
                                                    <th scope="col">Permissions</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                       @foreach($roles as $role)
                       <tr>
                         <td>{{ $role->name }}</td>
                         <td>
                             @foreach($role->permissions as $permission)
                               <span class="items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none bg-gray-500 rounded-full">{{ $permission->name }}</span>
                             @endforeach
                         </td>
                         <td>


                           <a href="{{route('admin.roles.edit',$role->id)}}" class="link-primary"><i class="ri-settings-4-line"></i></a>



                           <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" class="inline">
                               @csrf
                               @method('delete')
                               <button><i class="ri-delete-bin-5-line"></i></button>
                           </form>


                         </td>
                       </tr>
                       @endforeach


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
