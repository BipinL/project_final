@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">New Ad</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/ad/{{ ad->id }} " , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="ad">Ads<span class="text-danger">*</span></label>
                            <input type="text" name="ad" id="ad" class="form-control"
                                placeholder="Enter ads name">
                        </div>



                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                        </div>



                        <button type="submit" class="btn btn-info">Update Ad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
