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
                          <option>Madina Bus Stand</option>
                          <option>Kashipur</option>
                          <option>Rajshahi Terminal</option>
                          <option>Naogaon Terminal</option>



													</select>
  </div>
  <div class="form-group">
    <label for="name">Phone</label>
    <input type="number" class="form-control" required id="phone" name="phone"placeholder="Phone">
  </div>
  
 
    
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection