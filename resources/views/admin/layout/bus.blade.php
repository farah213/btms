@extends('admin.master')

@section('content')

<h1>BUS List</h1><br>
  
<!-- <button type="button" href="{{route('addbusinfo')}}"class="btn btn-primary btn-lg">ADD-NEW INFO</button><br> -->
<a class="btn btn-primary" href="{{route('addbusinfo')}}">Add bus info</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Bus_code</th>
      <th scope="col">Bus-name</th>
      <th scope="col">Bus-type</th>
       <th scope="col">Bus-time</th>
      <th scope="col">Bus-form</th>
      <th scope="col">Bus-to</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>


@endsection
