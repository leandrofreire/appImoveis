<!-- Login admin -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Login</h3>
    <form class="" action="#" method="post">
      @include('admin.login._form')
      <button class="btn blue">Entar</button>
    </form>
  </div>
@endsection
