<x-app-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Users</h4>

                                <div class="col-sm-auto ms-auto">
                                    <div class="list-grid-nav hstack gap-1">
                                        @can('User create')
                                        <a class="btn btn-success addMembers-modal" href="{{route('admin.users.create')}}"><i class="ri-add-fill me-1 align-bottom"></i> Add New User</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                    @can('User access')
                       @foreach($users as $user)
                           <tr>
                              <td>{{ $user->name }}</td>

                              <td>
                                @foreach ($user->roles as $role)
                                    <span>{{ $role->name }}</span>
                                @endforeach
                              </td>

                              <td>
                                @can('User edit')
                                <a href="{{route('admin.users.edit',$user->id)}}" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                @endcan

                                @can('User delete')
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-soft-danger" type="submit"><i class="ri-delete-bin-2-line"></i></button>
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
</x-app-layout>
