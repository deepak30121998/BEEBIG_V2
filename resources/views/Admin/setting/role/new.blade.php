@extends('Admin.layouts.app')

@section('content')
   <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Create New Role</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.roles.store')}}">
                                    @csrf
                                    @method('post')
                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Role Name</label>
                                            <input class="form-control" id="role_name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter role">

                                        </div>

                                        <div class="border mt-3 border-dashed"></div>
                                        <h6 class="mb-3 fs-14 text-muted">Permissions</h6>

                                        @foreach ($permissions as $permission)
                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}">
                                            <label class="form-check-label" for="formCheck15">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                        @endforeach

                                        <div class="col-lg-12">
                                            <div class="text-start">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>


                                    </form><!-- end form -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


@endsection
