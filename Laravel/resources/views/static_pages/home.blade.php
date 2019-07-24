@extends('layouts.default')
<!-- @section('title', '主页') -->

@section('content')

  <div class="jumbotron">
    <h1>Home Page</h1>
    <h1>
      <p class="lead">Now what you see <a href="https://learnku.com/courses/laravel-essential-training">is just a simple page.</a></p>
      <p>And something will change when you click</p>
      <p><a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">this button to sign up</a></p>
    </h1>
  </div>
@stop
