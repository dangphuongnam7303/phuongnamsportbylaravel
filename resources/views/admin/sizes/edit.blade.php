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
    <form id="edit" action="{{ route('sizes.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" class="form-control" value="{{$data->name}}" id="name" name="name"  placeholder="name">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="text" class="form-control" value="{{$data->image}}" id="image" name="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
