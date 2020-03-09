@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-lg-3">
            <div class="card card-body">
                @include('admin.blocks.errors')
                <form action="{{route('admin.user.update', $user)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="usermame" placeholder="Enter username" class="form-control" value="{{old('username')?? $user->username}}">
                    </div>

                    <input type="hidden" name="superadmin" value="0">
                        <input type="checkbox" id="superadmin" name="superadmin" class="form-control" for="superadmin" value="{{ (old('superadmin' ?? $user->superadmin) ? 'checked' : '') }}">
                        <label for="superadmin">superadmin</label>
                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
