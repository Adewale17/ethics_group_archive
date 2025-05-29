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
                <h5 class="card-title mb-4 d-inline">Foods</h5>
                <a href="{{ route('create.archives') }}" class="btn btn-primary mb-4 text-center float-right">Create
                    Archive</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">image</th>
                            <th scope="col">Ethic</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($archives as $archive)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $archive->title }}</td>
                            <td>{{ $archive->description }}</td>
                            <td><img height="60" width="60" src="{{asset('assets/images/'.$archive->image) }}"
                                    alt="Ifa Religion"></td>
                            <td>{{ $archive->ethic_group }}</td>
                            <td><a href="{{ route('edit.archives', $archive->id) }}"
                                    class="btn btn-success  text-center ">Edit</a></td>
                            <td>
                                <form action="{{ route('delete.admin', $archive->id) }}" method="POST"
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
                <div class="d-flex justify-content-center">
                    {{ $archives->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
