<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $lists = Post::orderBy('id', 'DESC')->paginate(20);

        return view("post.index", compact('lists'));
    }

    public function create()
    {
        return view("post.create");
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('index');
    }

    public function edit($id)
    {
        return "แก้ไขรายการข้อมูล {$id}";
    }

    public function destroy($id)
    {
        return "ลบรายการข้อมูล {$id}";
    }
}
