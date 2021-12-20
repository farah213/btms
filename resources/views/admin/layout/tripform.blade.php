@extends('admin.master')
@section('content')
<form method="post" action="{{route('trip.store')}}">
@csrf


<h2>Add Trip</h2>
  <div class="form-group">
    <label for="name">Bus name</label>
    <input type="text" class="form-control" required id="bus_name"name="bus_name" placeholder="">
    
  </div>
    <div class="form-group">
    <label for="contact">Bus Type</label>
    <select class="form-control"required id="bus_type"name="bus_type" >
                               <option  ></option>
                                    <option >AC</option>
                                    <option >NON AC</option>
						            
    </select>
            
  </div>
  
  <div class="form-group">
    <label for="contact">From</label>
    <select class="form-control"required id="from"name="from" >
         <option value="From" disabled>From</option>
<option ></option>
                       <option >Rajshahi</option>
                       <option >Khulna</option>
						            <option >Dhaka</option>
						            <option >Kushtia</option>
						            <option >Chittagong</option>
						            <option >Barishal</option>
                        <option >Sylhet</option>
                        <option >Feni</option>
                        <option >Naogan</option>
    </select>
            
  </div>
    <div class="form-group">
    <label for="contact">To</label>
    <select class="form-control"required id="to"name="to" >
         <option value="To" disabled>To</option>
                       <option ></option>
                       <option >Rajshahi</option>
                       <option >Khulna</option>
						            <option >Dhaka</option>
						            <option >Kushtia</option>
						            <option >Chittagong</option>
						            <option >Barishal</option>
                         <option >Sylhet</option>
                         <option >Feni</option>
                         <option >Naogan</option>
    </select>
            
  </div>
 <div class="form-group">
    <label for="time">Time</label>
    <select class="form-control"required id="time"name="time" >
         <option value="Time" disabled>Time</option>
              <option > </option>
			        <option>Morning(6:00 AM)</option>
              <option>Morning(7:00 AM)</option>
              <option>Morning(10:00 AM)</option>
			        <option>Afternoon(12:00 PM)</option>
              <option>Afternoon(3:00 PM)</option>
              <option>Afternoon(5:00 PM)</option>
              <option>Night(7:00 PM)</option>
              <option>Night(8:00 PM)</option>
              <option>Night(10:00 PM)</option>


	</select>
    
  </div>
  
  <div class="form-group">
    <label for="contact">Price</label>
    <input type="number" class="form-control" required id="price" name="price"  placeholder="">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
