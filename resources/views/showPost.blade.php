
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
           <div class="col-lg-6 col-md-6 col-sm-12 pt-5 text-center">
               <img src="/blogImage/{{$post->image}}" class="w-50 border border-muted" alt="{{$post->title}}">
           </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-5 text-center">
                <h1>{{$post->title}}
                    <hr></h1> <br><br>
                <p>{!!nl2br($post->description)!!}</p> <br><br>
                <a href="{{ URL::previous() }}"> <button class="btn btn-lg btn-outline-dark"> <i class="fas fa-arrow-left"></i> Go Back </button></a>

            </div>
        </div>
    </div>

@endsection
