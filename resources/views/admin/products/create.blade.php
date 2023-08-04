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
    <form id="create" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group"  >
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="name">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label>Category_id</label>
            <select class="form-control" id="category_id" name="category_id">

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" id="descrip" name="descrip">
        </div>

        <div class="form-group">
            <label>Size_id</label>
            <select class="form-control" id="size_id" name="size_id">
                @foreach($sizes as $size)
                    <option value="{{$size->id}}">{{$size->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Image 1:</label>
            <input type="file" class="form-control" id="img1" name="img1">
        </div>

        <div class="form-group">
            <label>Image 2:</label>
            <input type="file" class="form-control" id="img2" name="img2">
        </div>

        <div class="form-group">
            <label>Image 3:</label>
            <input type="file" class="form-control" id="img3" name="img3">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
