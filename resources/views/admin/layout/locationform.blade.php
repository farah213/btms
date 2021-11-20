@extends('admin.master')

@section('content')
<form method="post" action="{{route('locationform')}}">

@csrf
<h2>Add Location</h2><br>

  <div class="form-group">
    <label for="name"> From</label>
<input type="text" class="form-control"  required id="location_name" name="location_name"placeholder="name">
  </div><br>

  <div class="form-group">
    <label for="string">To</label>
    <input type="string" class="form-control"  required id="status" name="status"placeholder="">
  </div><br>

  <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection