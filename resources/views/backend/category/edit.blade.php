@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">New Category</span>
                    <a href="/category " class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/category/ {{ $category->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category_id">Category name</label>
                            <input type="text" name="category_id" id="category_id" class="form-control"
                                placeholder="Enter Category" value=" {{ $category->category_id }} ">
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-check mr-sm-2">
                                    <input type="checkbox" class="form-check-input" name="status" id="status"
                                        value="1" />
                                    <label class="form-check-label" for="customControlAutosizing1">Mark as
                                        active</label>
                                </div>

                            </div>
                        </div> --}}
                        <button type="submit" class="btn btn-info">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
