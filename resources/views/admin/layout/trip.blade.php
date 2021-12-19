@extends('admin.master')

@section('content')
<h2>Trip Details </h2><br>
<a class="btn btn-primary" href="{{route('trip.form')}}">Add new Info</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Bus Name</th>
      <th scope="col">Bus Type</th>
      <th scope="col">From</th>
      <th scope="col">To </th>
      <th scope="col">Time</th>  
      <th scope="col">price</th>

      
    </tr>
  </thead>
  <tbody>
    
        @foreach($trip as $key=>$a)
        <tr>
          <td>{{($key+1)}}</td>
          <td>{{($a-> bus_name)}} </td>
          <td>{{($a->bus_type)}} </td>
          <td>{{($a->from)}} </td>
          <td>{{($a->to )}} </td>
          <td>{{($a->time)}} </td>
          <td>{{($a->price)}} </td>
          @endforeach
</tbody>

   

@endsection