<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    @yield("seo")

    <meta property="og:type" content="blog" />
    <meta property="og:url" content="https://libroshopns.com/" />
    <meta property="og:image" content="../../img/logo.jpg" />
    <meta property="og:type" content="Website" />
    <meta name="language" content="English">
    <meta name="copyright" content="Copyright © 2021 Blog. All Rights Reserved. Credits: Vuk Zdravković">
    <link rel="shortcut icon" href="../../img/logo.ico" />
</head>
<body>

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
                <a class="nav-item nav-link active" href="#">Create Blog</a>
                <a class="nav-item nav-link active" href="#">My Blogs</a>
                <a class="nav-item nav-link active" href="/logout">Logout</a>
            @endif

            @if(Auth::check() && Auth::user()->is_admin  == 1)
               <a class="nav-item nav-link active" href="#">All User</a>
               <a class="nav-item nav-link active" href="#">Inactive Blogs</a>
               <a class="nav-item nav-link active" href="/logout">Logout</a>


                @endif

        </div>
    </div>

    </div>
</nav>
<header></header>
<main>
    @yield("content")
</main>

<footer></footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
