<?php
$update = $update ?? false;
?>

@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-lg-3">
            @include('admin.blocks.errors')
            <div class="card card-body">

                <form action="{{$update ? route('admin.category.update', $category) : route('admin.category.store')}}"
                      method="post">
                    @csrf
                    @if($update)
                        @method('PUT')
                    @endif

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                    <div class="form-group">
                        <label for="name"> Название</label>
                        <input id="name" name="name" type="text" class="form-control"
                               value="{{old('name') ?? ($category->name ?? '')}}">
                    </div>
                    <button class="btn btn-primary">{{$update ? 'Update' : 'Save'}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection