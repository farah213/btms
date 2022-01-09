@extends('admin.master')

@section('content')
<h1>Seat details</h1><br>


<a class="btn btn-primary" href="{{route('addseatinfo')}}">Add Seat info</a>
<br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Seat Number</th>
      <th scope="col">Seat Status</th>
     <th scope="col">Action</th>

    </tr>
  </thead>
   <tbody>
    
        @foreach($seat as $key=>$a)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$a->seat_number}} </td>
          <td>{{$a->seat_status}} </td>
          <td>
              <a class="btn btn-danger" href="{{route('seat.delete',$a->id)}}">Delete</a>
          </td>
        </tr>
         @endforeach

   </tbody>
</table>


@endsection