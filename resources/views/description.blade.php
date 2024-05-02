<!doctype html>
<html lang="en">

<head>
    <title>Description page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .navbar {
        font-size: 22px;
    }
</style>

<body>

    <div class=" navbar w3-bar w3-padding  w3-black">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
            @else
            <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>



    <div class="card">
        <div class="card-body d-flex flex-row">
            <td><img src="{{asset($blog->profileimg)}}" class="rounded-circle me-3" height="50px" width="50px" alt="avatar"></td>
            <div>
                <h5 class="card-title font-weight-bold mb-2">{{$blog->title}}</h5>
                <p class="card-text"><i class="far fa-clock pe-2"></i>{{$blog->postdate}}</p>
            </div>
        </div>
        <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
            <td><img src="{{asset($blog->coverimg)}}" alt="Card image cap" height="200px" width="150px"></td>
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
        </div>
        <div class="card-body">
            <p>{{$blog->description}}</p>
        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>