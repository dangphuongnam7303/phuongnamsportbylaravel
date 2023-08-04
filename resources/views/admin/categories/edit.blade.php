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
    <form id="edit" action="{{ route('categories.update', $model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" class="form-control" value="{{$model->name}}" id="name" name="name"  placeholder="name">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
