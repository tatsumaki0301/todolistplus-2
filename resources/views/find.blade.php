@extends('layouts.default')
<head>
  <link rel="stylesheet" href="/css/find.css" >
</head>
@section('title', 'TodoList')

@section('content')
<div class="todo_main_area">
  <div>
    <div class="todo_title_area">
      <p class="todo_title_item">TodoList</p>
      @if (Auth::check())
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <p class="user_name">こんにちは{{$user->name}}さん　　<button class="logout_button">logout</button></p>
      </form>
      @else
        <p class="user_name">こんにちはゲストさん　<a href="/login">ログイン</a>|<a href="/register">登録</a></p>
      @endif
    </div>
    @auth
    <table class="todo_add_area">
      <tr>
        <th>内容</th>
        <th>タグ</th>
        <th>追加</th>
      </tr>
    <form action="/find/search" method="POST">
      @csrf
      <tr>
        <td><input type="search" name="content" value="@if (isset($search)) {{$search}} @endif" class="todo_input_item"/></td>
        <td>
          <select name="tag_id">
            <option></option>
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
          </select>
        </td>
        <td><button class="todo_add_button">検索</button></td>
      </tr>
    </form>
    </table>
  </div>
  <div class="todo_all_area">
    <table  class="todo_all_table">
      <tr>
        <th></th>
        <th></th>
        <th>作成日時</th>
        <th>内容</th>
        <th>タグ</th>
        <th>更新</th>
        <th></th>
        <th>削除<th>
      </tr>
    @endauth
    @foreach($todos as $todo)
      <tr>
      <form action="/find/update" method="POST">
        @csrf
        <td><input type="hidden" name="id" value="{{$todo->id}}" /></td>
        <td><input type="hidden" name="user_id" value="{{$id}}" /></td>
        <td>{{$todo->created_at}}</td>
        <td><input type="text" name="content" value="{{$todo->content}}" class="todo_all_input_item" required/></td>
        <td><select name="tag_id">
          @foreach($tags as $tag)
          <option value="{{$tag->id}}"  @if($tag->id == $todo->tag_id) selected @endif>{{$tag->name}}</option>
          @endforeach
        </select></td>
        <td><button class="todo_all_update_button_item">更新</buttom></td>
      </form>
      <form action="/find/delete" method="POST">
        @csrf
        <td><input type="hidden" name="deleteId" value="{{$todo->id}}" /></td>
        <td><button class="todo_all_delete_button_item">削除</button></td>
      </form>
      </tr>
    @endforeach
    </table>
    {{ $todos->links('vendor.pagination.default')}}
  </div>
  <div class="return_button_area">
    <button class="return_button"><a href="/">戻る</a></button>
  </div>
</div>
@endsection