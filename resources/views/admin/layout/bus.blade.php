@extends('admin.master')

@section('content')

<h1>BUS List</h1><br>
  
<!-- <button type="button" href="{{route('addbusinfo')}}"class="btn btn-primary btn-lg">ADD-NEW INFO</button><br> -->
<a class="btn btn-primary" href="{{route('addbusinfo')}}">Add bus info</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Bus_id</th>
      <th scope="col">Bus-name</th>
      <th scope="col">Bus-type</th>
      <th scope="col">Bus-form</th>
      <th scope="col">Bus-to</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">101</th> 
      <td>DragonLines</td>
      <td>AC</td>
      <td>Dhaka</td>
      <td>Chittagong</td>
      <td>1400 BDT</td>
    </tr>
    <tr>
      <th scope="row">102</th>
      <td>DragonLines</td>
      <td>NON-AC</td>
      <td>Dhaka</td>
      <td>Chittagong</td>
      <td>900 BDT</td>
    </tr>
    <tr>
      <th scope="row">103</th>
      <td>DragonLines</td>
      <td>AC</td>
      <td>Dhaka</td>
      <td>Rajshahi</td>
      <td>1200 BDT</td>
    </tr>
    <tr>
      <th scope="row">104</th>
      <td>DragonLines</td>
      <td>NON-AC</td> 
      <td>Dhaka</td>
      <td>Rajshahi</td>
      <td>700 BDT</td>
    </tr>
  </tbody>
</table>


@endsection
