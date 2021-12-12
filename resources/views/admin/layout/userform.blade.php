
  
 @extends('admin.master') 

 @section('content') 
<h1>User details</h1>

<br>

<table style="width:100%">
<thead> 
    <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Contact</th>
    
 </tr>
</thead>
<tbody>
    @foreach($data as $a)
    <tr>
    <td>{{$a->name}}</td>
    <td>{{$a->lastname}}</td>
    <td>{{$a->email}}</td>
    <td>{{$a->phone}}</td>
    
    
 </tr>
 @endforeach
</tbody>

</table>
 
 @endsection 

