@extends('admin.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
     <th scope="col">Email</th>
      <th scope="col">Bus Name</th>
      <th scope="col">Bookings seat</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($details as $detail)
    <tr>
      <td>{{$detail->user->name}}</td>
     <td>{{$detail->user->email}}</td>
      <td>{{$detail->trip->bus_name}}</td>
      <td>
        @foreach($detail->bookings_seat as $value)
        {{$value->seat->seat_number}}
        @endforeach
      </td>
      
    </tr>
    @endforeach
  </tbody>

   

@endsection