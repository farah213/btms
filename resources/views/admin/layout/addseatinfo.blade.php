@extends('admin.master')

@section('content')
<form action="{{route('store')}}" method="post">
    @csrf
 <div class="mb-3">
    <label for="example" class="form-label">Seat Number</label>
    <input type="text" name="seat_number" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Seat Status</label>
    <input type="text" name="status" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection