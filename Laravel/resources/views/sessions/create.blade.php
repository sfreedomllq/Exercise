@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>Login</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
            <label for="exampleCheck1" class="form-check-label">Remember me</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary"> Login</button>

      </form>

      <hr>

      <p>No account?<a href="{{ route('signup') }}"> Sign up now!</a></p>
    </div>
  </div>
</div>
@stop
