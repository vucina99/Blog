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
                    <h1 >Login <i class="fas fa-user"></i></h1>
                </div>
                <form method="post" action="/login/user">
                    @csrf
                    @if( Session()->has( 'errorLogin' ))
                        <div class="alert alert-danger" role="alert">
                            {{ Session()->get( 'errorLogin' ) }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                    </div>
                    @error("email")
                    <span class="text-danger">
                                {{$message}}
                          </span>
                    @enderror
                    <br>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                    </div>
                    @error("password")
                    <span class="text-danger">
                                {{$message}}
                          </span>
                    @enderror
                    <br> <br>
                    <input type="submit" class="btn btn-outline-primary w-100 " value="LOGIN">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
