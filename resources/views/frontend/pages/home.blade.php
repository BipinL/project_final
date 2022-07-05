@extends('frontend.app')
@section('content')
    <!--topbody ad section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex justify-content-centre " style="height: 120px;">
                    <img src="https://i.gifer.com/WO76.gif" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--end topbody ad section-->

    <div class="container py-3">
        <button type="button" class="btn btn-success">News</button>
    </div>

    <div>
        <div class="container bg-light">

            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-md-12 py-3">
                        <a href="" class="text-black">
                            <h1 class="display-2 fw-semi-bold"> <a href=""></a></h1>
                        </a>
                        <img src=" {{ asset($item->image) }} " width="100%" alt="">
                        <div>
                            {!! $item->description !!}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--body ad-->
    <div>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://c.tenor.com/6upu-o0Hh0wAAAAC/chris-barnett-ufc.gif" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $post->title }}</h1>
                    <p> {!! $post->description !!} </p>
                    <img src=" {{ asset($post->image) }}  " width="100%" alt="">
                </div>
            </div>
        @endforeach
    </div>
@endsection
