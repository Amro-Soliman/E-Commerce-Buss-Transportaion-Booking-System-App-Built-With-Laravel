@extends('layouts.app')
@section('content')
<div class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Edit Password
      </div>
      <div class="card-body">
      <form action="{{ route('change.password') }}" method="POST"   class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
          <div class="form-group row">
            <label class="col-md-3">Current password</label>
            <div class="col-md-9">
              <input class="form-control" type="password" name="current" >
              <span class="help-block">You must provide your current password in order to change it.</span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3">New password</label>
            <div class="col-md-9">
              <input class="form-control"  type="password" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3">Password confirmation</label>
            <div class="col-md-9">
              <input class="form-control"  type="password" name="password_confirmation" >
            </div>
          </div>
          <button class="btn btn-primary btn-sm">Save</button>

        </form>
      </div>
      <div class="card-footer">
        <div class="form-group row">
          <div class="col-md-9 offset-md-3">
          <button class="btn btn-primary btn-sm">Save</button>

          </div>
        </div>
      </div>
  </div>        </div>
    </div>
</div>
@endsection