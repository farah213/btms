@extends('admin.master')

@section('content')

 
<h2>Counter Details </h2><br>
<a class="btn btn-primary" href="{{route('counter.details')}}">Add new</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Counter locaction</th>
      <th scope="col">Phone</th>

      
    </tr>
  </thead>
  <tbody>
    
        @foreach($counter as $key=>$a)
        <tr>
          <td>{{($key+1)}}</td>
          <td>{{($a->counter_location)}} </td>
          <td>{{($a->phone)}} </td>
          @endforeach
</tbody>

   

@endsection