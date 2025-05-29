@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Edit Archieve</h5>
                <form method="POST" action="{{ route('update.archives', $archives->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="title" id="form2Example1"
                            class="form-control @error('title') is-invalid @enderror" value="{{ $archives->title }}"/>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="description" id="form2Example1"
                            class="form-control @error('description') is-invalid @enderror" value="{{ $archives->description }}" />
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <textarea name="content" id="form2Example1" rows="4"
                            class="form-control @error('content') is-invalid @enderror" >{{ $archives->content }}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4 mt-4">

                        <select name="ethic_group" class="form-select  form-control" aria-label="Default select example">
                            <option selected>{{ $archives->ethic_group }}</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Igbo">Igbo</option>
                            <option value="Hausa">Hausa</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="file" name="image" id="form2Example1" class="form-control" value="{{ $archives->image }}" />

                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="link" id="form2Example1"
                            class="form-control @error('link') is-invalid @enderror" value="{{ $archives->link }}" />
                        @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>






                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>


                </form>

            </div>
        </div>
    </div>
</div>
@endsection
