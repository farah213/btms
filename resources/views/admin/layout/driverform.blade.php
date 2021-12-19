@extends('admin.master')

@section('content')
<form method="post" action="{{route('driver.store')}}">
@csrf
<h2>Driver Details Form</h2>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" required id="name"name="name" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="string">Age</label>
    <input type="number" class="form-control" required id="number" name="age"placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" class="form-control" required id="phone" name="phone"placeholder="Enter  Phone Number">
  </div>
  
  <div class="form-group">
    <label for="contact">Voter ID </label>
    <input type="string" class="form-control"required id="voter_id_no" name="voter_id"placeholder="">
  </div>
  <div class="form-group">
    <label for="contact">Driver Liecence No</label>
    <input type="string" class="form-control" required id="driver_licence_no" name="driver_licence_no"placeholder="">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection