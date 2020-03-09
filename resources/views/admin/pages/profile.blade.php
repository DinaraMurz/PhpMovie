@extends('admin.layouts.app')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mb-3">
                {{$error}}
            </div>
        @endforeach
    @endif

    <h1>{{$user->username}}</h1>
    <p class="lead">
        <b>Создан: </b> {{$user->created_at}}
    </p>

    <div class="card">
        <div class="card-header">
            Смена пароля
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.password') }}" method="post">
                @csrf
                @method('put')
                <label for="password">Пароль</label>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Напешите Пароль">
                </div>

                <label for="password_confirmation">Потверждение</label>
                <div class="form-group">
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Напешите Пароль Еще раз">
                </div>


                <button type="submit" class="btn btn-success">Обновить Пароль</button>
            </form>
        </div>


    </div>
@endsection