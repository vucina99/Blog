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
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5">

                    <div class="pb-4 text-center">
                        <h1 >Create post</h1>
                    </div>
                    <form method="post" action="/create/post">
                        @csrf
                        <div class="form-group">
                            <label for="title">TITLE</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Your title">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="description">DESCRIPTION</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Your description"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="image">IMAGE</label> <br>
                            <input type="file" name="image" id="image" >
                        </div>
                        <br> <br>
                        <input type="submit" class="btn btn-outline-primary w-100 " value="CREATE">
                    </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
