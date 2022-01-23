
  
 @extends('admin.master') 

 @section('content') 
<h1>User details</h1>

<br>

<table style="width:100%">
<thead> 
    <tr>
    <th scope="col">Serial</th>
    <th scope="col">FirstName</th>
    <th scope="col">LastName</th>
    <th scope="col">Email</th>
    <th scope="col">Contact</th>
    
    
 </tr>
</thead>
<tbody>
    @foreach($data as $key=>$a)
    <tr>
     <th scope="row">{{$key+1}}</th>   
    <td>{{$a->name}}</td>
    <td>{{$a->lastname}}</td>
    <td>{{$a->email}}</td>
    <td>{{$a->phone}}</td>
   
    
    
 </tr>
 @endforeach
</tbody>

</table>
 
 @endsection 

