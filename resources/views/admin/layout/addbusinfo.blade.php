@extends('admin.master')

@section('content')
<h1>ADD-NEW INFO</h1>

<form action="{{route('addbusinfo')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="example" class="form-label">Bus-id</label>
    <input type="digit" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Bus-name</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Bus-type</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Bus-from</label>
    <input type="text" class="form-control" >
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Bus-to</label>
    <input type="text" class="form-control" >
  </div>
   <div class="mb-3">
    <label for="example" class="form-label">Price</label>
    <input type="digit" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection