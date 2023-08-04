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
    <form id="edit" action="{{ route('roles.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" class="form-control" value="{{$data->name}}" id="name" name="name"  placeholder="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
