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
                        <option >Naogaon</option>
                        <option >Tangail</option>
                        <option >Noakhali</option>

                    </select>


													
  </div><br>

  <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection