
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

                <table class="table bg-dark text-light rounded-3 ">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">COUNT OF POSTS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr >
                        <td class="align-middle ">{{$user->name}}</td>
                        <td class="align-middle ">{{$user->email}}</td>
                        <td class="align-middle ">{{count($user->blogs)}}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <br>
                <div class="text-center" >
                    {{ $users->links() }}
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>

@endsection
