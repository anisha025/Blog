<!DOCTYPE html>
<html>
<title> Add Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>
<style>
    .navbar {
        font-size: 22px;
    }
</style>

<body>

    <!-- Navbar Start -->
    <div class=" navbar w3-bar w3-padding  w3-black">
        <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
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
    </div>
    <!-- Navbar Ends -->


    <!-- Registration form start -->
    <div class="w3-container" style="margin-top: 25px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-amber w3-center">
                <h2>Update details</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/update-blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w3-container w3-padding">
                        <label>Author </label>
                        <input class="w3-input" type="text" name="author" value="{{$blog->author}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label>Title </label>
                        <input class="w3-input" type="text" name="title" value="{{$blog->title}}" required />
                    </div>

                    <div class="w3-container w3-padding">
                        <label>Profile picture</label>
                        <input id="password" class="w3-input" type="file" name="profileimg" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label>Cover picture</label>
                        <input id="password" class="w3-input" type="file" name="coverimg" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label> Description</label>
                        <input id="password" class="w3-input" type="text" name="description" value="{{$blog->description}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label></i> Post Date</label>
                        <input id="password" class="w3-input" type="text" name="postdate" value="{{$blog->postdate}}" required />
                    </div>


                    <div class="w3-container w3-padding w3-center">
                        <button type="submit" class="w3-button w3-amber w3-round w3-margin-top w3-hover-black w3-block" required>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>