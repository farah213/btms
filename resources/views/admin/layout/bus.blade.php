@extends('admin.master')

@section('content')
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

<h1>BUS details</h1><br>


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
          <td>
            <a href="{{route('bus.edit',$a->id)}}">edit &rarr;</a>
            <a href="{{route('bus.delete',$a->id)}}">delete</a>
          </td>
          </tr>
        @endforeach

        
  </tbody>
</table>


@endsection
