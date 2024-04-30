@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('admin.login') }}">
  @csrf
  @method('POST')
    <div class="form-group">
      <label for="email">E-Mail</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
