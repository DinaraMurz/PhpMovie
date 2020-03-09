@extends('admin.layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{route('admin.category.create')}}"> Добавить Кат</a>
</div>

@if($categories->count())
<table class="table table-bordered">
    <thead>
    <tr>
        <th nowrap style="width:1%"></th>
        <th>Автор</th>
        <th>Назв Категории</th>
        <th nowrap style="width:1%">Действие</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->user->username}}</td>
            <td>{{$category->name}}</td>
            <td>
                <a href="{{route('admin.category.edit', $category) }}">Редактировать</a>
                <a href="{{$delete = route('admin.category.destroy', $category)}}"
                   onclick="event.preventDefault();document.getElementById('delete{{$category->id}}').submit()">Удалить
                    <form id="delete{{$category->id}}" action="{{$delete}}" method="post" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    @else
    <div class="alert alert-secondary">
        Нечего нет
    </div>
    @endif

@endsection