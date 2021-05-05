
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
    <div class="container">
        <a class="navbar-brand" href="/">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                @if(!Auth::check())
                    <a class="nav-item nav-link active" href="/">Home </a>
                    <a class="nav-item nav-link active" href="/login">Login </a>
                    <a class="nav-item nav-link active" href="/register">Register </a>

                @endif
                @if(Auth::check() && Auth::user()->is_admin  == 0)
                    <a class="nav-item nav-link active" href="/">Home </a>
                    <a class="nav-item nav-link active" href="/create/post">Create Post</a>
                    <a class="nav-item nav-link active" href="/my/posts">My Posts</a>
                    <a class="nav-item nav-link active" href="/logout">Logout</a>
                @endif

                @if(Auth::check() && Auth::user()->is_admin  == 1)
                    <a class="nav-item nav-link active" href="/">Home </a>
                    <a class="nav-item nav-link active" href="/all/users">All Users</a>
                    <a class="nav-item nav-link active" href="/all/posts">All Posts</a>
                    <a class="nav-item nav-link active" href="/inactive/posts">Inactive Posts <span class="badge text-dark bg-light bg-secondary">{{$countPosts}}</span></a>
                    <a class="nav-item nav-link active" href="/category">Add Categories </a>
                    <a class="nav-item nav-link active" href="/logout">Logout</a>


                @endif

            </div>
        </div>

    </div>
</nav>
