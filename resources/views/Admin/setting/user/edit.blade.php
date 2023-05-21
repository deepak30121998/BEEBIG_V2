<x-app-layout>
    <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="main-content">

             <div class="page-content">
                 <div class="container-fluid">


                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card">
                                 <div class="card-header">
                                     <h4 class="card-title mb-0">Edit User</h4>
                                 </div><!-- end card header -->

                                 <div class="card-body">
                                    <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
                                        @csrf
                                        @method('put')
                                         <div class="form-check form-check-outline form-check-success mb-3">
                                             <label for="cleave-time" class="form-label">User Name</label>
                                             <input class="form-control" id="name" type="text" name="name" value="{{ old('name',$user->name) }}" placeholder="Enter name">
                                         </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Email</label>
                                            <input class="form-control" id="email" type="text" name="email" value="{{ old('email',$user->email) }}" placeholder="Enter email" >
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Confirm Password</label>
                                            <input class="form-control" id="password_confirmation" type="text" name="password_confirmation" placeholder="Re-enter password">
                                        </div>

                                        <div class="border mt-3 border-dashed"></div>
                                        <h6 class="mb-3 fs-14 text-muted">Role</h6>

                                        @foreach ($roles as $role)
                                         <div class="form-check form-check-outline form-check-success mb-3">
                                             <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}"
                                             @if(count($user->roles->where('id',$role->id)))
                                                 checked
                                             @endif>
                                             <label class="form-check-label" for="formCheck15">
                                                {{ $role->name }}
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



 </x-app-layout>
