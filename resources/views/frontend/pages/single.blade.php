<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href="">
                    <h3>Messi will retire after 2023 wolrd cup</h3>
                </a>
                <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt5850cbc21e714f91/610cff7eb8e2527f0ceed31a/71b8ce54389f65c4f16beb66e7cc06860fc51341.jpg"
                    class="img-fluid" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, at? Odio ipsa veritatis accusamus dicta
                    unde, suscipit quaerat architecto asperiores repellendus fugit eos eius ut possimus minus nesciunt
                    explicabo corporis praesentium. Repellendus dolorum quibusdam quisquam aliquid quae! Asperiores
                    suscipit accusamus, nam fugiat, explicabo aliquam, dolore commodi laudantium quisquam maiores harum.
                </p>
                {{-- @foreach ($posts as $post)
                    <a href=" {{ $post->id }} "> {{ $post->title }} </a>
                    <a href=" {{ $post->id }} "> <img src=" {{ asset($post->image) }} " alt=""></a>
                    <a href=" {{ $post->id }} "> {{ !!$post->description }} </a>
                @endforeach --}}

            </div>
            @foreach ($ads as $ad)
                <div class="col-md-4">
                    <a href=" {{ ad->id }} "><img src=" {{ asset(ad->image) }} " alt=""></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
