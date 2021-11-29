@extends('admin.master')

@section('content')

<h1>Route details</h1>
<a class="btn btn-primary" href="{{route('routeform')}}">Add New</a>
<br>

<table style="width:100%">

<tr>
    <th>SL</th>
    <th>From</th>
    <th>To</th>
    
 </tr>

 <tbody>
    
        @foreach($route as $key=>$a)
        <tr>
          <th scope="row">{{$key+1}} </th>
          <td>{{$a->Route_name}} </td>
          <td>{{$a->To}} </td>
          
          </tr>
        @endforeach

        
  </tbody>
  

@endsection