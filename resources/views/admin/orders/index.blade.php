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
                    <th>Time</th>
                    <th>
                        Detail
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{route('orders.show',$item->id)}}">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
