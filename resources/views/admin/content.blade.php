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

<div style="margin-top:200px; margin-left: 400px;">
                        <h1 class="mt-4">Welcome Admin</h1>
                        <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active"></li>   
                        </ol>
                        
</div>
@endsection

