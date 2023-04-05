@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('service.store')}}">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Image class</label>
    <input name="image" type="text" class="form-control" id="image" placeholder="Enter class name">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
@endsection
