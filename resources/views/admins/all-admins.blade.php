@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}
                    </p>
                    @endif
                </div>
                <h5 class="card-title mb-4 d-inline">Admins</h5>
                <a href="{{ route('create.admins') }}" class="btn btn-primary mb-4 text-center float-right">Create
                    Admins</a>
                <table class="table">
                    <thead>

                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $admin->name}}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <form action="{{ route('delete.admin', $admin->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
