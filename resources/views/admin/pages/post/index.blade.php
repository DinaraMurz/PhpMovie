@extends('admin.layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{route('admin.post.create')}}" class="btn btn-success">Добавить пост</a>
    </div>
@endsection