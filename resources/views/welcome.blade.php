<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /* .background-img {
            background: url("/images/bg.png") no-repeat;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .background-img::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .center {
            position: absolute;
            top: 52%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            padding: 0 20px;
            text-align: center;
        }

        .center .title {
            color: #fff;
            font-size: 55px;
            font-weight: 600;
        }

        .center .sub_title {
            color: rgb(240, 178, 20);
            font-size: 52px;
            font-weight: 600;
        } */

        .navbar {
            font-size: 22px;
        }

        /* card */
        .product-list {
            padding-top: 20px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .blog-card {
            width: calc(100% / 4 - 20px);
            padding-top: 20px;
        }

        .card {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            max-width: 280px;
            margin: auto;
            text-align: center;
            font-family: arial;
            transition: 0.2s linear;
            overflow: hidden;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        body {
            background-color: #f5f7fa;
        }
    </style>
</head>

<body class="antialiased">
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
    <!-- <div class="background-img">
    </div>
    <div class="center">
        <div class="title">We Bring The Good Cart To Life.</div>
        <div class="sub_title">Shop Now</div>
    </div> -->

    <div class="container product-list">


        @foreach($blogs as $blog)
        <div class="blog-card">
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
                    <a href="/description/{{$blog->id}}">Show more</a>
                </div>


                <!-- <div class="card-body">
                    <p class="card-text collapse" id="collapseContent">
                        {{$blog->description}}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link link-danger p-md-1 my-1" data-bs-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>
                </div> -->

            </div>
        </div>
        @endforeach

    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>