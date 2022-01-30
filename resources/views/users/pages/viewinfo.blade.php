<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 2px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }

    .card {
        margin: auto;
        border: solid 1px #dbdad7;
        width: 40%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important
    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%
    }

    div.card-body {
        padding: 0px
    }

    .custom-select {
        width: 100%
    }

    .btn2 {
        margin-left: 10%
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .radiobtn {
        margin-left: 3.5%
    }

    .icons {
        margin: auto !important
    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center
    }

    .fa-plane {
        color: #1cad9f
    }

    .fa-taxi {
        color: #c2f700
    }

    .fa-train {
        color: red
    }

    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important
        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }
    }

</style>




<div style="margin-top:57px; margin-left: 61px;">

     <form class="print_order">
        <input class="btn btn-primary"  type="button" onClick="PrintDiv();" value="Print">
     </form>

 <div id="divToPrint">

    <h1>Booking Details </h1>
     
   <div style="display:flex; align-items:center;">
       <h4 style="font-weight: bold; padding-right: 15px;">Passenger's Name:</h4>
       <dd class="col-sm-9" style="font-size: 22px;">{{($detail->user->name)}}</dd>
   </div>
        
      
    <div style="display:flex; align-items:center;">

         <h4 style="font-weight: bold; padding-right: 15px;">Email:</h4>
         <dd class="col-sm-9"  style="font-size: 22px;"> {{($detail->user->email)}}</dd>
        
    </div>
      
    <div style="display:flex; align-items:center;">

            <h4 style="font-weight: bold; padding-right: 15px;">Bus Name: </h4>
            <dd class="col-sm-9"  style="font-size: 22px;">{{($detail->trip->bus_name)}}</dd>
         
    </div>
      
        
    <div style="display:flex; align-items:center;">
            <h4 style="font-weight: bold; padding-right: 15px;">Seat Number:</h4>  
             <dd class="col-sm-9"  style="font-size: 22px;">@foreach($detail->bookings_seat as $value)
                  {{$value->seat->seat_number}}
                   @endforeach</dd>
                
    </div>

    <div style="display:flex; align-items:center;">

          <h4 style="font-weight: bold; padding-right: 15px;">Total Price: </h4>
          <dd class="col-sm-9"  style="font-size: 22px;">{{$detail->sub_total}}</dd>
         
    </div>

    
    <div style="display:flex; align-items:center;">
          <h4 style="font-weight: bold; padding-right: 15px;">Date: </h4>
            <dd class="col-sm-9"  style="font-size: 22px;">{{$detail->date}}</</dd>    
    </div>

    <div style="display:flex; align-items:center;">
          <h4 style="font-weight: bold; padding-right: 15px;">Counter Location: </h4>
            <dd class="col-sm-9"  style="font-size: 22px;">{{$detail->counter->counter_location}}</dd>    
    </div>
 </div>

</div>     


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
     

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Frontend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>



