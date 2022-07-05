@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">Post</span>
                            <a href="/post/create" class="float-end btn btn-info">new post</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{ $post->title }}</h4>
                                            </div>
                                            <div class="card-body">
                                                <img src="{{ asset($post->image) }}" class="img-fluid" alt="">

                                                {{-- <p> {!! $post->description !!}</p> --}}

                                            </div>

                                            <div class="card-footer">
                                                <form action="/post/{{ $post->id }} "method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/post/{{ $post->id }}/edit "
                                                        class="btn btn-info m-2">edit</a>


                                                    <button type="submit" class="btn btn-danger m-2">delete</button>

                                                </form>
                                            </div>
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
