@extends('admin.master')

@section('content')

<h1>BUS details</h1><br>
  
<!-- <button type="button" href="{{route('addbusinfo')}}"class="btn btn-primary btn-lg">ADD-NEW INFO</button><br> -->
<a class="btn btn-primary" href="{{route('addbusinfo')}}">Add bus info</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Bus name</th>
      <th scope="col">Bus type</th>
      <th scope="col">Seat capacity</th>
      <th scope="col">Coach number</th>
      <th scope="col">Seat availablity</th>
      <th scope="col">Seat number</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>

  <tbody>
    
        @foreach($bus as $key=>$a)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$a->bus_name}} </td>
          <td>{{$a->bus_type}} </td>
          <td>{{$a->seat_capacity}} </td>
          <td>{{$a->coach_number}} </td>
          <td>{{$a->seat_availablity}} </td>
          <td>{{$a->seat_number}} </td>
          <td>
            <a href="{{route('bus.edit',$a->id)}}">edit &rarr;</a>
            <a href="{{route('bus.delete',$a->id)}}">delete</a>
          </td>
          </tr>
        @endforeach

        
  </tbody>
</table>


@endsection
