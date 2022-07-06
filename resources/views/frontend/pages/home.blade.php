@extends('frontend.app')
@section('content')
    <!--topbody ad section-->

    <!--end topbody ad section-->



    <div class="py-3">
        <div class="container bg-light">

            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-md-12 py-3">
                        <a href="" <h1 class="display-2">{{ $item->title }}</h1>>

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
@endsection
