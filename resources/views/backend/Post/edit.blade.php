@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">New Post</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/post/ {{ $post->id }} " , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter Title" value=" {{ $post->title }} ">
                        </div>

                        {{-- <div class="form-group">
                            <label for="category_name"> Category <span class="text-danger">*</span></label>

                            <select name="category_id[]" id="category_id" class="form-select form-control select2" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div> --}}

                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title"
                                value=" {{ $post->image }} ">
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" rows="3" placeholder="Description"
                                value=" {{ $post->description }} "></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
