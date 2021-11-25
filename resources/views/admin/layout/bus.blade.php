@extends('admin.master')

@section('content')

<h1>BUS details</h1><br>
  
<!-- <button type="button" href="{{route('addbusinfo')}}"class="btn btn-primary btn-lg">ADD-NEW INFO</button><br> -->
<a class="btn btn-primary" href="{{route('addbusinfo')}}">Add bus info</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Bus name</th>
      <th scope="col">Bus type</th>
      <th scope="col">Bus from</th>
      <th scope="col">Bus to</th>
      <th scope="col">Price</th>
    </tr>
  </thead>

  <tbody>
    
        @foreach($bus as $a)
        <tr>
          <td>{{$a->name}} </td>
          <td>{{$a->type}} </td>
          <td>{{$a->bus_from}} </td>
          <td>{{$a->bus_to}} </td>
          <td>{{$a->bus_price}} </td>
          </tr>
        @endforeach

        
  </tbody>
</table>


@endsection
