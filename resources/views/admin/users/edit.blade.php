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
    <form id="edit" action="{{ route('users.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" value="{{$data -> name}}" class="form-control" id="name" name="name"  placeholder="name">
        </div>

        <div class="form-group">
            <label>Role</label>
            {{$data->role->id}}
            <select class="form-control" id="role_id" name="role_id">
                @foreach($roles as $role)
                    <option value="{{$role->id}}" <?= $data->role->id == $role->id ? 'selected' : '' ?>>{{$role->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{$data -> username}}" class="form-control" id="username" name="username" placeholder="Image">
        </div>

        <div class="form-group">
            <input type="hidden" value="{{$data -> password}}" class="form-control" id="password" name="password" placeholder="Image">
        </div>

        <div class="form-group">
            <input type="hidden" value="{{$data -> email}}" class="form-control" id="email" name="email" placeholder="Image">
        </div>

        <div class="form-group">
            <input type="hidden" value="{{$data -> address}}" class="form-control" id="address" name="address" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
