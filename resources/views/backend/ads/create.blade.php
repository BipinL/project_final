@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">New Ad</span>
                    <a href="/ad" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/ad" , method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Ads<span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter Title">
                        </div>



                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                        </div>



                        <button type="submit" class="btn btn-info">Save ad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
