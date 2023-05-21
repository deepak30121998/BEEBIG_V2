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
                                     <h4 class="card-title mb-0">Edit Permission</h4>
                                 </div><!-- end card header -->

                                 <div class="card-body">
                                    <form method="POST" action="{{ route('admin.permissions.update',$permission->id)}}">
                                        @csrf
                                        @method('put')
                                         <div class="form-check form-check-outline form-check-success mb-3">
                                             <label for="cleave-time" class="form-label">Permission Name</label>
                                             <input class="form-control" id="role_name"
                                             type="text"
                                             name="name"
                                             value="{{ old('name',$permission->name) }}"
                                             placeholder="Enter permission">

                                         </div>


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
