@extends('layout.main')
@section('content')

<!-- Registration form start -->
<div class="w3-container" style="margin-top: 25px">
    <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
        <header class="w3-container w3-border-bottom w3-border-amber w3-center">
            <h2>Enter details</h2>
        </header>
        @if(session('message'))
        <div class="alert success">
            {{session('message')}}
        </div>
        @endif
        @if(session('error'))
        <div class="alert ">
            {{session('error')}}
        </div>
        @endif
        <div class="w3-container w3-padding">
            <form action="/store-blog" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w3-container w3-padding">
                    <label>Author </label>
                    <input class="w3-input" type="text" name="author" value="" />
                </div>
                <div class="w3-container w3-padding">
                    <label>Title </label>
                    <input class="w3-input" type="text" name="title" value="" required />
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
                    <input id="password" class="w3-input" type="text" name="description" value="" required />
                </div>
                <div class="w3-container w3-padding">
                    <label></i> Post Date</label>
                    <input id="password" class="w3-input" type="text" name="postdate" value="" required />
                </div>

                <div class="w3-container w3-padding w3-center">
                    <button type="submit" class="w3-button w3-amber w3-round w3-margin-top w3-hover-black w3-block" required>
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection