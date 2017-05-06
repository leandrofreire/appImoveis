<!-- Login admin -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Login</h3>
    <form class="" action="{{ route('admin.login') }}" method="post">
      {{ csrf_field() }}
      @include('admin.login._form')
      <button class="btn blue">Entar</button>
    </form>
  </div>
@endsection
