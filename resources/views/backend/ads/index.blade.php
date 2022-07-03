@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">Ad</span>
                            <a href="/post/create" class="float-end btn btn-info">new Ad</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($ads as $ad)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{ $ad->title }}</h4>
                                                <img src="{{ asset($ad->image) }}" class="img-fluid" alt="">
                                            </div>

                                            <form action="/ad/{{ $ad->id }} "method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/ad/{{ $ad->id }}/edit " class="btn btn-info m-2">edit</a>


                                                <button type="submit" class="btn btn-danger m-2">delete</button>

                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
