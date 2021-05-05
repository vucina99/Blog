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
                    <h1 >Contact</h1>
                </div>
                <form method="post" action="/sendEmail" >
                    @csrf

                    @if( Session()->has( 'successMessage' ))
                        <div class="alert alert-success" role="alert">
                            {{ Session()->get( 'successMessage' ) }}
                        </div>
                    @endif
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
                        <label for="description">DESCRIPTION</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Your description"></textarea>
                    </div>
                    @error("description")
                    <span class="text-danger">
                                {{$message}}
                          </span>
                    @enderror
                    <br>


                    <br> <br>
                    <input type="submit" class="btn btn-outline-primary w-100 " value="SEND">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
