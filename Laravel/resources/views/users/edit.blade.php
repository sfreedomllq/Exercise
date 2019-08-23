@extends('layouts.default')
@section('title', 'Edit profile')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>Edit profile</h5>
    </div>

    <div class="card-body">

      @include('shared._errors')

      <div class="gravatar_edit">
        <a href="http://gravatar.com/emails" target="_blank">
          <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
        </a>
      </div>

      <form action="{{ route('users.update', $user->id) }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Name: </label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" name="email" value="{{ $user->email}}" disabled>
        </div>

        <div class="form-group">
          <label for="password">Password: </label>
          <input type="password" class="form-control" name="password" value="{{ old('password') }}">
        </div>

        <div class="form-group">
          <label for="password_confirmation">Confirm Password: </label>
          <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </div>
</div>
@stop
