<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>
<style>
    .Edit {
        background-color: rgb(240, 178, 20);
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .Delete {
        background-color: red;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .student-detail-table {
        width: 100%;
    }

    .navbar {
        font-size: 22px;
    }
</style>

<body>
    <!-- Navbar Start -->
    <div class=" navbar w3-bar w3-padding  w3-black">
        <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
        <a href="/add-blog" class="w3-bar-item w3-button">Add Blog</a>
        <!-- <a href="/addblog" class="w3-bar-item w3-button">Blog</a> -->

        <div class="logout-class">
            <a class="w3-bar-item w3-button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- <a href="/add-blog">addblog</a> -->
    </div>
    <!-- Navbar Ends -->

    @yield('content')
</body>

</html>