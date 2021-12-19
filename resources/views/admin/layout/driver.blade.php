@extends('admin.master')

@section('content')
<h2>Driver Details </h2><br>
<a class="btn btn-primary" href="{{route('driver.form')}}">Add new Info</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Voter ID </th>
      <th scope="col">Driver licence No</th>

      
    </tr>
  </thead>
  <tbody>
    
        @foreach($driver as $key=>$a)
        <tr>
          <td>{{($key+1)}}</td>
          <td>{{($a->name)}} </td>
          <td>{{($a->phone)}} </td>
          <td>{{($a->age)}} </td>
           <td>{{($a->voter_id )}} </td>
          <td>{{($a->driver_licence_no)}} </td>
          @endforeach
</tbody>

   

@endsection