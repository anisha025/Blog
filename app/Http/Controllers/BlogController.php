<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addblog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $blog = new Blog();
            $blog->author = $request->author;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->postdate = $request->postdate;
            if ($request->hasFile('profileimg')) {
                $file = $request->file('profileimg');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('profileimage/'), $fileName);
            }
            $blog->profileimg = 'profileimage/' . $fileName;

            if ($request->hasFile('coverimg')) {
                $file = $request->file('coverimg');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('coverimage/'), $fileName);
            }
            $blog->coverimg = 'coverimage/' . $fileName;
            $blog->save();
            return back()->with('message', 'Sucessfully Save');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error While Creating');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('editblog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $blog = Blog::find($id);
            $blog->author = $request->author;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->postdate = $request->postdate;
            if ($request->hasFile('profileimg')) {
                $file = $request->file('profileimg');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('profileimage/'), $fileName);
                $blog->profileimg = 'profileimage/' . $fileName;
            }


            if ($request->hasFile('coverimg')) {
                $file = $request->file('coverimg');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('coverimage/'), $fileName);
                $blog->coverimg = 'coverimage/' . $fileName;
            }
            $blog->update();
            return redirect('/home')->with('update-error', 'Successfully updated');
        } catch (\Throwable $th) {
            return back()->with('update-error', 'Error While updating');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::find($id);
            $blog->delete();
            return back()->with('message', 'Successfully deleted');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error While deleting');
        }
    }
}
