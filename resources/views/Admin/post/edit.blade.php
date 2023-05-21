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
                                     <h4 class="card-title mb-0">Edit Post</h4>
                                 </div><!-- end card header -->

                                 <div class="card-body">
                                     <form method="POST" action="{{ route('admin.posts.update',$post->id)}}" enctype='multipart/form-data'>
                                        @csrf
                                        @method('put')
                                         <div class="form-check form-check-outline form-check-success mb-3">
                                             <label for="cleave-time" class="form-label">Title</label>
                                             <input class="form-control" id="title" type="text" name="title" value="{{ old('title',$post->title) }}" placeholder="Enter title">
                                         </div>

                                         <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Description</label>
                                            <textarea class="form-control" name="details" id="editor4" placeholder="Enter description" rows="5">{{ old('description',$post->description) }}</textarea>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-check form-check-outline form-check-success mb-3">
                                                    <label for="cleave-time" class="form-label">Image<sup style="color: red;">*</sup></label>
                                                     <input class="form-control" id="title" type="file" name="image" value="{{ old('title',$post->image) }}" placeholder="Enter title">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-check form-check-outline form-check-success mb-3">
                                                    <label for="cleave-time" class="form-label">Url:<sup style="color: red;">*</sup></label>
                                                     <input class="form-control" id="title" type="text" name="slug" value="{{ old('title',$post->slug) }}" placeholder="Enter Slug">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Meta Title<sup style="color: red;">*</sup></label>
                                             <input class="form-control" id="title" type="text" name="meta_title" value="{{ old('title',$post->meta_title) }}" placeholder="Meta Title">
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Meta Description<sup style="color: red;">*</sup></label>
                                             <input class="form-control" id="title" type="text" name="meta_description" value="{{ old('title',$post->meta_description) }}" placeholder="Meta Description">
                                        </div>

                                        <div class="form-check form-check-outline form-check-success mb-3">
                                            <label for="cleave-time" class="form-label">Role</label>
                                            <select class="form-select mb-3" aria-label="Default select example" name="publish">
                                                <option value="0">Draft</option>
                                                <option value="1" @if($post->publish) selected @endif>Publish</option>
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

                CKEDITOR.replace('editor4', {
                  extraPlugins: 'sourcedialog',
                  removePlugins: 'sourcearea',
                  removeButtons: 'PasteFromWord'
                });
              </script>

@endsection





