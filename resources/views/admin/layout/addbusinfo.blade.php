@extends('admin.master')

@section('content')
<h1>ADD-NEW INFO</h1>

<form action="{{route('store')}}" method="post">
    @csrf
  
  <div class="mb-3">
    <label for="example" class="form-label">Bus-name</label>
    <input type="string" name="bus_name" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Bus-type</label>
    <input type="string" name="bus_type" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label for="example" class="form-label">Seat-capacity</label>
    <input type="string" name="seat_capacity" class="form-control"required >
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Coach-number</label>
    <input type="string" name="coach_number" class="form-control"required >
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Seat-availability</label>
    <input type="integer"  name="seat_availablity" class="form-control"required >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Seat-number</label>
    <input type="integer"  name="seat_number" class="form-control"required >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection