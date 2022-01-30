@extends('admin.master')

@section('content')


@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

<!-- <form method="post" action="{{route('trip.store')}}"> -->


<h1>ADD-NEW INFO</h1>

<form action="{{route('businfo.store')}}" method="post">
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
    <!-- <option>Seat Capacity</option>
													<option>40</option>
													<option>35</option>
                          <option>30</option>

													</select>  -->
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Coach-number</label>
    <input type="string" name="coach_number" class="form-control"required >
  </div>
   
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection