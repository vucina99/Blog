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
                    <h1 >Create category</h1>
                </div>
                <form method="post" action="/create/category">
                    <div id="success"> </div>

                    @if( Session()->has( 'successMessage' ))
                        <div class="alert alert-success" role="alert">
                            {{ Session()->get( 'successMessage' ) }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="title">CATEGORY</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Your category">
                        @error("category")
                        <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <br> <br>
                    <input type="button" id="createCategory" class="btn btn-outline-primary w-100 " value="CREATE">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
