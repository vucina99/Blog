
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
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pt-5">
                @if( Session()->has( 'successDelete' ))
                    <div class="alert alert-success" role="alert">
                        {{ Session()->get( 'successDelete' ) }}
                    </div>
                @endif
                    @if( Session()->has( 'successMessageEdit' ))
                        <div class="alert alert-success" role="alert">
                            {{ Session()->get( 'successMessageEdit' ) }}
                        </div>
                    @endif
                <table class="table bg-dark text-light rounded-3 inactive" >
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">IMAGE</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ACTIONS</th>
                        <th scope="col">PROCESSED</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td><img class="imageSizeMyBlog" style="width: 70px; height: 70px; object-fit: cover;" src="/blogImage/{{$post->image}}"  alt="" ></td>
                        <td class="align-middle">{{Str::limit($post->title, 35)}}</td>
                        <td class="align-middle">{{Str::limit($post->description, 40)}}</td>



                        <td class="align-middle">
                            <div class="w-100 d-flex">
                                <div class="pe-3">
                                    <form action="/edit/post" method="get">
                                        @csrf
                                        <input type="hidden" name="blog_id" id="blog_id" value="{{$post->id}}">
                                        <button type="submit" class="btn  btn-success" ><i class="fas fa-pencil-alt"></i></button>
                                    </form>
                                </div>
                                <div>
                                    <form action="/notaccept" method="delete">
                                        @csrf
                                        <input type="hidden" name="blog_id" id="blog_id" value="{{$post->id}}">
                                        <button type="submit" class="btn  btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            @if($post->active == 0)
                                <i class="fas fa-2x fa-clock text-muted"></i>
                            @elseif($post->active == 1)
                                <i class="fas  fa-2x fa-check text-success"></i>
                            @endif
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
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
