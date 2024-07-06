@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('message')
    <p class="message message-success">Todoを作成しました</p>
    <p class="message message-error">Todoを入力してください</p>
@endsection

@section('contents')
    <form class="form" action="" method="POST">
        <input class="form_input" type="text" name="new-todo">
        <button class="form_button" type="submit">作成</button>
    </form>
    <table class="todo-table">
        <tr class="todo-lists__title">
            <th>Todo</th>
        </tr>
        <tr class="todo-lists__item">
            <form class="todo-lists__item--form" action="" method="POST">
                <th class="todo-lists__item--name">test</th>
                <td class="todo-lists__item--button-set">
                    <button class="todo-lists__item--button todo-lists__item--button-update" type="submit">更新</button>
                    <button class="todo-lists__item--button todo-lists__item--button-delete" type="submit">削除</button>
                </td>
            </form>
        </tr>
        <tr class="todo-lists__item">
            <form class="todo-lists__item--form" action="" method="POST">
                <th class="todo-lists__item--name">test</th>
                <td class="todo-lists__item--button-set">
                    <button class="todo-lists__item--button todo-lists__item--button-update" type="submit">更新</button>
                    <button class="todo-lists__item--button todo-lists__item--button-delete" type="submit">削除</button>
                </td>
            </form>
        </tr>
    </table>
@endsection