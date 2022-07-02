<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <a href=" {{ $post->id }} "> {{ $post->title }} </a>
                    <a href=" {{ $post->id }} "> <img src=" {{ asset($post->image) }} " alt=""></a>
                    <a href=" {{ $post->id }} "> {{ !!$post->description }} </a>
                @endforeach

            </div>
            @foreach ($ads as $ad)
                <div class="col-md-4">
                    <a href=" {{ ad->id }} "><img src=" {{ asset(ad->image) }} " alt=""></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
