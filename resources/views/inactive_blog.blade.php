
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
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-5">

                <table class="table bg-dark text-light rounded-3 inactive" >
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">IMAGE</th>
                        <th scope="col">AUTHOR</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="https://ps.w.org/simple-full-screen-background-image/assets/icon-256x256.png?rev=2006030" alt=""></td>
                        <td class="align-middle">Vuk Zdravkovic</td>
                        <td class="align-middle">Sve o IT</td>
                        <td class="align-middle">Some text is there ajde bre k....</td>
                        <td class="align-middle">
                            <div class="w-100 d-flex">
                                <div class="pe-3">
                                <form action="/accept" method="post">
                                    <input type="hidden" name="blog_id" id="blog_id" value="">
                                    <button type="submit" class="btn  btn-success" ><i class="fas fa-check"></i></button>
                                </form>
                                </div>
                                <div>
                                <form action="/notaccept" method="delete">
                                    <input type="hidden" name="blog_id" id="blog_id" value="">
                                    <button type="submit" class="btn  btn-danger"><i class="fas fa-times"></i></button>
                                </form>
                                </div>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
