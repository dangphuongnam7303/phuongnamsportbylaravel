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
    <form id="create" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="name">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
