@extends('admin.master')

@section('content')
<h2>Counter Details </h2>
<form action="{{route('counter.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Counter Location</label>
    <select input type="text" class="form-control"required id="counter_location"name="counter_location" >
    <option>Counter Location</option>
													<option>Abdullahpur,#road 08</option>
													<option>Kamalapur</option>
													<option>Bonani,#road 12</option>
                        	<option>Chapainawabganj</option>
                          <option>CTG-Satkania</option>
                          <option>Bandorban</option>
                          <option>Meherpur</option>
													</select>
  </div>
  <div class="form-group">
    <label for="name">Phone</label>
    <input type="number" class="form-control" required id="phone" name="phone"placeholder="Phone">
  </div>
  
 
    
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection