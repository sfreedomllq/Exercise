@extends('layouts.default')
@section('title', 'Sign up')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>Sign Up</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('users.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name" >名称：</label>
          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div>
          <label for="email" >邮箱：</label>
          <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div>
          <label for="password" >密码：</label>
          <input type="password" class="form-control"  name="password" value="{{ old('password') }}">
        </div>

        <div>
          <label for="password_confirmation" >确认密码：</label>
          <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">注册</button>
      </form>
    </div>
  </div>
</div>
@stop
