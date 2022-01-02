
<h2>Bus Information </h2>
<br>

<div class="table">
  @if($trip->count()>0)
  <table style="width:90%">
      <thead>
         <tr>
           <th scope="col">Sl</th>
           <th scope="col">Bus Name</th>
           <th scope="col">Bus Type</th>
           <th scope="col">From</th>
           <th scope="col">To </th>
           <th scope="col">Time</th>  
           <th scope="col">price</th>
          </tr>
       </thead>
  <tbody>
    
       @foreach($trip as $key=>$a)
          <tr>
            <td>{{($key+1)}}</td>
            <td>{{($a-> bus_name)}}</td>
            <td>{{($a->bus_type)}} </td>
            <td>{{($a->from)}}</td>
            <td>{{($a->to )}}</td>
            <td>{{($a->time)}}</td>
            <td>{{($a->price)}}</td>
          </tr>
       @endforeach

  </tbody>
</table>

@else
<p>No trip found</p>

@endif

</div>

   










