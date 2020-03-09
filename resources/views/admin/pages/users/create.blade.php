@extends('admin.layouts.app')

@section('content')
            <div class="row">
                <div class="col-xs-12 col-lg-3">
            <div class="card card-body">
                @include('admin.blocks.errors')
                <form action="{{route('admin.user.store')}}" method="post">
                    @csrf
                    <div class="from-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter username"
                               class="form-control">
                    </div>
                    <div class="from-group">
                        <label for="password">Username</label>
                        <input type="password" id="password" name="password" placeholder="Enter password"
                               class="form-control">
                    </div>

                    <div class="from-group">
                        <label for="passwordConf">Username</label>
                        <input type="password" id="passwordConf" name="password_confirmation"
                               placeholder="Enter passwordConf" class="form-control">
                    </div>

                    <div class="from-group">
                        <input type="checkbox" id="superadmin" name="superadmin" class="form-control" value="1">
                        <label for="superadmin">superadmin</label>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection