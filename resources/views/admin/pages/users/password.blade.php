@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="card card-body">
                @include('admin.blocks.errors')
                <form action="{{route('admin.user.password.update', $user)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="from-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                    </div>

                    <div class="from-group">
                        <label for="passwordConf">passwordConf</label>
                        <input type="password" id="passwordConf" name="password_confirmation" placeholder="Enter passwordConf" class="form-control">
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection