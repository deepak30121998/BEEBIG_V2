
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
                                     <h4 class="card-title mb-0">Create New Post</h4>
                                 </div><!-- end card header -->

                                 <div class="card-body">
                                     <form method="POST" action="{{ route('admin.posts.store') }}" enctype='multipart/form-data' >
                                     @csrf
                                         <div class="form-check form-check-outline form-check-success mb-3">
                                             <label for="cleave-time" class="form-label">Title<sup style="color: red;">*</sup></label>
                                             <input class="form-control" id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                             @error('title')
                                             <div class="invalid-feedback" style="display: block !important;">
                                                {{$message}}
                                            </div>
                                             @enderror
                                         </div>

                                         <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Description<sup style="color: red;">*</sup></label>
                                            <textarea class="form-control" name="description" id="neweditor" placeholder="Enter description" rows="5">{{ old('description') }}</textarea>
                                            @error('description')
                                             <div class="invalid-feedback" style="display: block !important;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-outline form-check-success mb-3">
                                                        <label for="cleave-time" class="form-label">Image<sup style="color: red;">*</sup></label>
                                                         <input class="form-control" id="title" type="file" value="{{ old('image') }}" name="image" placeholder="Enter title">
                                                        @error('image')
                                                            <div class="invalid-feedback" style="display: block !important;">
                                                            {{$message}}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-check form-check-outline form-check-success mb-3">
                                                        <label for="cleave-time" class="form-label">Url:<sup style="color: red;">*</sup></label>
                                                         <input class="form-control" id="title" type="text" value="{{ old('slug') }}" name="slug" placeholder="Enter Slug">
                                                        @error('slug')
                                                        <div class="invalid-feedback" style="display: block !important;">
                                                        {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                        </div>




                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Meta Title<sup style="color: red;">*</sup></label>
                                             <input class="form-control" id="title" type="text" name="meta_title" value="{{ old('meta_title') }}" placeholder="Meta Title">
                                                @error('meta_title')
                                                <div class="invalid-feedback" style="display: block !important;">
                                                {{$message}}
                                                </div>
                                                @enderror
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Meta Description<sup style="color: red;">*</sup></label>
                                             <input class="form-control" id="title" type="text" name="meta_description" value="{{ old('meta_description') }}" placeholder="Meta Description">
                                                @error('meta_description')
                                                <div class="invalid-feedback" style="display: block !important;">
                                                {{$message}}
                                                </div>
                                                @enderror
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Action</label>
                                            <select class="form-select mb-3" aria-label="Default select example" name="publish">
                                                <option value="0">Draft</option>
                                                <option value="1">Publish</option>
                                            </select>
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

             <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
             <script>
                // We need to turn off the automatic editor creation first.
                CKEDITOR.disableAutoInline = true;

                CKEDITOR.replace('neweditor', {
                  extraPlugins: 'sourcedialog',
                  removePlugins: 'sourcearea',
                  removeButtons: 'PasteFromWord'
                });
              </script>
@endsection


