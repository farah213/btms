@extends('admin.master')

@section('content')
<form method="post" action="{{route('routestore')}}">

@csrf
<h2>Add Route</h2><br>

  <div class="form-group">
    <label for="name"> From</label>
<input type="text" class="form-control"  required id="Route_name" name="Route_name"placeholder="name">
  </div><br>

  <div class="form-group">
    <label for="string">To</label>
    <input type="string" class="form-control"  required id="To" name="To"placeholder="">
  </div><br>

  <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection