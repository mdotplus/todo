@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('message')
    @if (session('message'))
        <p class="message message-success">{{ session('message') }}</p>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="message message-error">{{ $error }}</p>
        @endforeach
    @endif
@endsection

@section('contents')
    <form class="form" action="/todos" method="POST">
        @csrf
        <input class="form_input" type="text" name="content">
        <button class="form_button" type="submit">作成</button>
    </form>
    <table class="todo-table">
        <tr class="todo-lists__title">
            <th>Todo</th>
        </tr>
        @foreach ($todos as $todo)
            <tr class="todo-lists__item">
                <form action="todos/update" method="POST">
                    @csrf
                    <td class="todo-lists__item--name">
                        <input type="text" name="content" value="{{ $todo['content'] }}">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                    </td>
                    <td class="todo-lists__item--button-column-update">
                        <button class="todo-lists__item--button todo-lists__item--button-update" type="submit">更新</button>
                    </td>
                </form>
                <form action="todos/delete" method="POST">
                    @csrf
                    <td class="todo-lists__item--button-column-delete">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        <button class="todo-lists__item--button todo-lists__item--button-delete" type="submit">削除</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>
@endsection