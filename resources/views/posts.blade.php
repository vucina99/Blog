@extends("content")

@section("seo")
    <title>Blog</title>
    <meta name="keywords" content="" />

    <meta name="description" content="" />

    <meta property="og:title" content=" " />

    <meta property="og:keywords" content="" />

    <meta property="og:description" content="" />
@endsection


@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 d-flex flex-wrap justify-content-center  ">
                @foreach($posts as $post)

                <div class="card mt-3 ms-3" >
                    <a href="show/post/{{$post->id}}">
                    <img class="card-img-top" src="/blogImage/{{$post->image}}" alt="{{$post->title}}">
                    </a>
                    <div class="card-body">
                        <h6 class="card-text text-center"> {{Str::limit($post->title, 32)}}</h6>
                        <hr>
                        <p class="card-text  text-center">Created by : {{Str::limit($post->user->name,20)}}</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection
