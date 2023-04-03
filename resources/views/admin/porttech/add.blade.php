@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('porttech.store')}}">
  @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection