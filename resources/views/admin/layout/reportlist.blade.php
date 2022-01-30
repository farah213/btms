@extends('admin.master')

@section('content')

<h1>User Bookings Details</h1>
<form  action="{{route('reportlist')}}">



<div class="input-group rounded mt-3 mb-2">
 <div class="form-outline">
    <input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
<form class="print_order">
        <input class="btn btn-primary"  type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Bus Name</th>
      <th scope="col">Bookings seat</th>
      <th scope="col">Total price</th> 
      <th scope="col">Counter Location</th>
      <th scope="col">Date</th>
      
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
      <td>{{$detail->sub_total}}</td>
      <td>{{$detail->counter->counter_location}}</td>
      <td>{{$detail->date}}</td>


      
      
    </tr>
    @endforeach
  </tbody>  

@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Frontend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>