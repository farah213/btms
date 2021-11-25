@extends('admin.master')

@section('content')

<h1>Location details</h1>
<a class="btn btn-primary" href="{{route('locationform')}}">Add New</a>
<br>

<table style="width:100%">

<tr>
    <th>SL</th>
    <th>From</th>
    <th>To</th>
    
 </tr>

 <tbody>
    
        @foreach($location as $key=>$a)
        <tr>
          <td>{{$a->$key+1}} </td>
          <td>{{$a->Location_name}} </td>
          <td>{{$a->To}} </td>
          
          </tr>
        @endforeach

        
  </tbody>
  

@endsection