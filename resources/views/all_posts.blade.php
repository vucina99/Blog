
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
                        <th scope="col">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                    @foreach($posts as $post)
                        <tr>
                            <td><img class="imageSizeMyBlog" style="width: 70px; height: 70px; object-fit: cover;" src="/blogImage/{{$post->image}}"  alt="" ></td>
                            <td class="align-middle">{{$post->user->name}}</td>
                            <td class="align-middle">{{Str::limit($post->title, 35)}}</td>
                            <td class="align-middle">{{Str::limit($post->description, 40)}}</td>
                            <td class="align-middle">
                                <div class="w-100 ">


                                    <form action="/notaccept" method="delete">
                                        <input type="hidden" name="blog_id" id="blog_id" value="{{$post->id}}">
                                        <button type="submit" class="btn  btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <br>
                <div class="text-center" >
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
