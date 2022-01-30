@extends('admin.master')

@section('content')

<h1>Update-Bus INFO</h1>

<form action="{{route('bus.update')}}" method="post">
    @csrf

    <div class="mb-3">
    
    <input type="hidden" name="id" value="{{$bus->id}}" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label for="example" class="form-label">Bus-name</label>
    <input type="string" name="bus_name" value="{{$bus->bus_name}}" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Bus-type</label>
    <input type="string" name="bus_type" value="{{$bus->bus_type}}" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label for="example" class="form-label">Seat-capacity</label>
    <input type="string" name="seat_capacity" value="{{$bus->seat_capacity}}" class="form-control"required >
    
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Coach-number</label>
    <input type="string" name="coach_number" value="{{$bus->coach_number}}"class="form-control"required >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection