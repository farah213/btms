@extends('admin.master')

@section('content')
<form method="post" action="{{route('routestore')}}">

@csrf
<h2>Add Route</h2><br>

  <div class="form-group">
    <label for="name"> From</label>
	
                    <select name="From" id="type" required="">
                        <option value="Route" disabled>Route</option>
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


													
  </div><br>

  <div class="form-group">
    <label for="string">To</label>
	<select name="To" id="To" required="">
                        <option value="Route" disabled>Route</option>
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
    
  </div><br>

  <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection