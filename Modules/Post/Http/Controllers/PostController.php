<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Post;

class PostController extends Controller
{
    public function index()
    {
        $lists = Post::orderBy('id', 'DESC')->paginate(20); // SELECT * FROM post ORDER id DESC

        return view("post::index", compact('lists'));
    }

    public function create()
    {
        return view("post::create");
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $result = Post::find($id); // SELECT * FROM posts WHERE id = $id

        return view('post::edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all()); // UPDATE post SET ..., ..., WHERE id = $id

        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('post.index');
    }
}
