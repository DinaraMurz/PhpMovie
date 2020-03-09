<?php

use App\User;
use \Illuminate\Database\Eloquent\Collection;

/**
 * @var Collection|User[] $user
 */

?>


@extends('admin.layouts.app')


@section('content')
    <div class="card card-body">
        <img scr="{{}}">///////////
        <div class="mb-3">
            <a href="{{route('admin.user.create')}}" class="btn btn-secondary">Add</a>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя пользователя</th>
                <th nowrap style="width: 1%;">Действия</th>
            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        {{$user->username}}
                        @if($user->superadmin)
                            <span class="badge badge-primary">superadmin</span>
                        @endif
                    </td>
                    @if(!$user->useradmin && $user->id != 1)
                        <td>
                            <a href="{{route('admin.user.edit', $user)}}">Редактировать</a>
                            <a href="{{route('admin.user.password.edit', $user)}}" class="text-warning">Обновить
                                Пароль</a>
                            <a href="{{route('admin.user.destroy', $user)}}" class="text-danger"
                               onclick="event.preventDefault();document.getElementById('delete-{{$user->id}}').submit()">Удалить
                                <form id="delete-{{ $user->id }}" action="{{route('admin.user.destroy', $user)}}"
                                      method="post" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection