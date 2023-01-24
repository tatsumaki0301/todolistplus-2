<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Pagination\Paginator;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::paginate(5);

        $param = [
            'todos' => $todos,
        ];

        return view('index', $param);
    }
    public function create(TodoRequest $request)
    {
        $content = $request->content;

        $form = [
            'content' => $content,
        ];

        Todo::create($form);

        return redirect('/home');
    }
    public function update(TodoRequest $request)
    {
        $todo_id = $request->id;
        $todo_content = $request->content;

        $form = [
            'id' => $todo_id,
            'content' => $todo_content,
        ];
        
        Todo::where('id', $todo_id)->update($form);

        return redirect('/home');
    }
    public function delete(Request $request)
    {
        $delete_id = $request->deleteId;

        Todo::find($delete_id)->delete();

        return redirect('/home');
    }

}
