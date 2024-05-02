@extends('layout.main')
@section('content')

@if(session('message'))
<div class="alert success">
    {{session('message')}}
</div>
@endif
@if(session('error'))
<div class="alert">
    {{session('error')}}
</div>
@endif
@if(session('update-message'))
<div class="alert success">
    {{session('update-message')}}
</div>
@endif
@if(session('update-error'))
<div class="alert">
    {{session('update-error')}}
</div>
@endif

<!-- Registration form start -->
<div class="w3-container" style="margin-top: 17px">
    <div class="w3-modal-content w3-animate-zoom w3-padding w3-round student-detail-table">
        <table class="w3-table-all w3-card-4 w3-hoverable">
            <tr class="w3-amber">
                <th>ID</th>
                <th>Title</th>
                <th>Profile Picture</th>
                <th>Cover Picture</th>
                <th>Description</th>
                <th>Author</th>
                <th>Post Date</th>
                <th></th>
            </tr>

            <!-- for each loop here -->
            @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td><img src="{{asset($blog->profileimg)}}" alt="" width="50"></td>
                <td><img src="{{asset($blog->coverimg)}}" alt="" width="50"></td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->author}}</td>
                <td>{{$blog->postdate}}</td>
                <td>
                    <a href="/edit-blog/{{$blog->id}}"> <button class="Edit">Edit</button></a>
                    <a href="/delete-items/{{$blog->id}}"> <button class="Delete">Delete</button></a>
                </td>
            </tr>
            @endforeach
            <!-- end of for each loop here -->
        </table>
    </div>
</div>
@endsection