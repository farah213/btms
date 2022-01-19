@extends('admin.master')

@section('content')


<h1>Payment Details</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Payment Mathod</th>
      <th scope="col">Transection ID</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
 


      
    </tr>
  </thead>
  <tbody>
    @foreach($payment as $detail)
    <tr>
      <td>{{optional($detail->userRelation)->name}}</td>
      <td>{{optional($detail->userRelation)->email}}</td>
      <td>{{$detail->payment_mathod}}</td>
      <td>{{$detail->transaction_id}}</td>
      <td>{{$detail->amount}}</td>
      <td>{{($detail->created_at)->toDateString()}}</td>
    </tr>
    @endforeach
</tbody>



  


    

@endsection