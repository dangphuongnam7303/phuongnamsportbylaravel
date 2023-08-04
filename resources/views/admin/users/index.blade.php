@extends('admin.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Categories
        </div>
        <div class="card-body">

            <table id="list" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>
                        <a href="{{route('users.create')}}"><button class="btn btn-danger">Add</button></a>
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->role->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ md5($item->password) }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td style="display: flex">

                            <form action="{{ route('users.destroy', $item) }}"
                                  id="item-{{ $item->id }}"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                        onclick="document.getElementById('item-{{ $item->id }}').submit();">Xóa
                                </button>
                            </form>

                            <a href="{{ route('users.edit', $item) }}"><button class="btn btn-success">Edit</button></a>


                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
