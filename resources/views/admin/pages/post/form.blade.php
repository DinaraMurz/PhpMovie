<?php
$update = $update ?? false;
?>

@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-lg-3">
            @include('admin.blocks.errors')
            <div class="card card-body">

                <form action="{{( $update?? false ) ? route('admin.post.update', $category) : route('admin.post.store')}}">

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                    <div class="form-group">
                        <label for="category_id"></label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="0" selected disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{(old('category_id') ?? $post->$category ?? null) === $category->id ? 'selected' : ''}} >
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group custom-file">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                    </div>
                    ////////////
                    <button class="btn btn-access">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection