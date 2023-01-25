<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class FindController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();
        $tags = Tag::get();
        $todos = Todo::where('user_id', '=', $id)->with('user','tag')->paginate(5);
        $todo = Todo::with('tag')->where('id', $tags && 'tag_id', $todos)->get(); //$todoはタグのselectedを指定するための変数

        $param = [
            'todos' => $todos,
            'user' => $user,
            'id' => $id,
            'tags' => $tags,
            'todo' => $todo,
        ];

        return view('find', $param);
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        $tags = Tag::get();
        $todos = Todo::get();

        $search = $request->content;
        $tag_id = $request->tag_id;

        $query = Todo::query();
        if ($search) {
            $query->where('content', 'LIKE BINARY', "%{$search}%")->get();
        }
        elseif ($search == null && $tag_id) {
            $query->where('tag_id', '=', $tag_id)->get();
        }

        $todos = $query->paginate(5);

        $param = [
            'todos' => $todos,
            'user' => $user,
            'tags' => $tags,
            'id' => $id,
        ];

        return view('find', $param);
    }

    public function update(TodoRequest $request)
    {
        $todo_id = $request->id;
        $todo_content = $request->content;
        $user_id = $request->user_id;
        $tag_id = $request->tag_id;

        $form = [
            'id' => $todo_id,
            'content' => $todo_content,
            'user_id' => $user_id,
            'tag_id' => $tag_id,
        ];
        
        Todo::where('id', $todo_id)->update($form);

        return redirect('/find');
    }

    public function delete(Request $request)
    {
        $delete_id = $request->deleteId;

        Todo::find($delete_id)->delete();

        return redirect('/find');
    }


}
