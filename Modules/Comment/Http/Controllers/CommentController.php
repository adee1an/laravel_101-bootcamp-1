<?php

namespace Modules\Comment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Comment\Entities\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $lists = Comment::orderBy('id', 'DESC')->paginate(20); // SELECT * FROM comment ORDER id DESC

        return view("comment::index", compact('lists'));
    }

    public function create()
    {
        return view("comment::create");
    }

    public function store(Request $request)
    {
        Comment::create($request->all());

        return redirect()->route('comment.index');
    }

    public function edit($id)
    {
        $result = Comment::find($id); // SELECT * FROM comments WHERE id = $id

        return view('comment::edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        Comment::find($id)->update($request->all()); // UPDATE comment SET ..., ..., WHERE id = $id

        return redirect()->route('comment.index');
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();

        return redirect()->route('comment.index');
    }
}
