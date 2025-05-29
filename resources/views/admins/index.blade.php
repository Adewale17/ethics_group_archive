@extends('layouts.admin')
@section('content')
<div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Archives</h5>

              <p class="card-text">number of Archives: {{ $archiveCount }}</p>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>

              <p class="card-text">number of admins: {{ $adminCount }}</p>

            </div>
          </div>
        </div>
      </div>
@endsection
