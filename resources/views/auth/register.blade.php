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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5 ">

                <div class="pb-4 text-center">
                    <h1 >Register <i class="fas fa-sign-in-alt"></i> </h1>
                </div>
                <form method="post" action="/register/user">
                    @csrf
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                        @error("name")
                        <span class="text-danger">
                                {{$message}}
                          </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                        @error("email")
                        <span class="text-danger">
                                {{$message}}
                          </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                        @error("password")
                        <span class="text-danger">
                                {{$message}}
                          </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password_confirmation">PASSWORD CONFIRMATION</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter password">
                        @error("password_confirmation")
                        <span class="text-danger">
                                {{$message}}
                          </span>
                        @enderror
                    </div>
                    <br> <br>
                    <input type="submit" class="btn btn-outline-primary w-100 " value="REGISTER">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
