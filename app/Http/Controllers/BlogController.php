<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //


    public function index()
    {
        $allBlogs = Blog::whereNotNull('status')->get()->count();
        $activeBlogs = Blog::where('status','Active')->get()->count();
        $inactiveBlogs = Blog::where('status','Inactive')->get()->count();
        $blogs = Blog::whereNotNull('status')->orderBy('id', 'desc')->get();
        return view('app.blogs.index',compact('blogs', 'allBlogs', 'activeBlogs', 'inactiveBlogs'));
    }

    public function add()
    {
        return view('app.blogs.add');
    }

    public function view(Request $request, $id)
    {
        $blog = Blog::find($id);

        if(!$blog || is_null($blog->status))
        {
            return redirect()->route('blogs')->with('message', 'The blog did not exist.Try again');
        }

        return view('app.blogs.view',['blog'=> $blog]);
    }

    public function edit(Request $request, $id)
    {
        $blog = Blog::find($id);

        if(!$blog || is_null($blog->status))
        {
            return redirect()->route('blogs')->with('message', 'The blog did not exist.Try again');
        }

        return view('app.blogs.edit', compact('blog'));
    }

    public function store(Request $request)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required',
        ]);

        $credentials['userID'] = auth()->user()->id;
        $credentials['status'] = 'Active';

        if($request->hasFile('image')){
            $credentials['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog = Blog::create($credentials);
        if($blog)
        {
            return redirect()->route('blogs')->with('message', 'You successfully publish a blog');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function update(Request $request, blog $blog)
    {
        // Validation logic here (you can use Laravel validation)
        $credentials = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required',
        ]);

        if($request->hasFile('image')){
            $credentials['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($credentials);

        if($blog)
        {
            return redirect()->route('blog.view', $blog->id)->with('message', 'You successfully update a blog');
        }

        return redirect()->back()->with('message', 'There is an error.Try again');
    }

    public function delete(Request $request, blog $blog)
    {
        $blog->update([
            'status' => null
        ]);

        if($blog)
        {
            return redirect()->route('blogs')->with('message', 'You successfully delete a blog');
        }
        return redirect()->back()->with('message', 'There is an error.Try again');
    }


}
