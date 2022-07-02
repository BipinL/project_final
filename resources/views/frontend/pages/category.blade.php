<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach (posts as $post)
                    <a href=" {{ $post->id }} "> {{ $post->title }} </a>
                    <a href=" {{ $post->id }} "> <img src=" {{ asset($post->image) }} " alt=""></a>
                    <a href=" {{ $post->id }} "> {{ !!$post->description }} </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
