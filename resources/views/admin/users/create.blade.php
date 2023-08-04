@extends('admin.layout.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="create" method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="name">
        </div>

        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role_id" name="role_id">
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Image">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Image">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Image">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
