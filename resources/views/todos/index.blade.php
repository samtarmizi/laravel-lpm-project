@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert {{ session()->get('type') }}">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Todos Index') }}

                    <div class="float-right">
                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Creator</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                                <tr>
                                    <td> {{ $todo->id }}</td>
                                    <td> {{ $todo->title }}</td>
                                    <td> {{ $todo->description }}</td>
                                    <td> {{ $todo->created_at->diffForHumans() }}</td>
                                    <td> {{ $todo->user->name }}</td>
                                    <td>
                                        @can('lihat',$todo)
                                            <a class="btn btn-primary" href="/todos/{{ $todo->id}}">Show</a>
                                        @endcan
                                        @can('edit', $todo)
                                            <a class="btn btn-success" href="/todos/{{ $todo->id}}/edit">Edit</a>
                                        @endcan
                                        @can('delete', $todo)
                                            <a onclick="return confirm('Are you sure')" class="btn btn-danger" href="/todos/{{ $todo->id}}/delete">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $todos->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
