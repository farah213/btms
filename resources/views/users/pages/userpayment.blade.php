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


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

 <body>

     <div class="header">
         <a href="#" style="text-decoration: none" class="logo">Payment</a>
         <div class="header-right">
             <a class="" href="{{url('/')}}" style="margin-right: 15px;
    text-decoration: none">Home</a>



         </div>
     </div>

     <!-- template's css -->

     <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
         id="bootstrap-css">
     <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <!------ Include the above in your HEAD tag ---------->

  

     <div class="container">
         <div class="row-fluid">
                @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

             <form class="form-horizontal" action="{{route('user.payment.post',$id)}}" method="post">
                 @csrf
                 <fieldset>
                     <div id="legend">
                         <legend class="">Payment</legend>
                     </div>

                     <!-- Name -->
                     <input hidden name="user_id" type="text" value="{{auth()->user()->id}}">
                     <div class="control-group">
                         <label class="control-label" for="username">Card Holder's Name</label>
                         <div class="controls">
                             <input value={{auth()->user()->name}} type="text" id="username" name="username"
                                 placeholder="" class="input-xlarge">
                         </div>
                     </div>

                     <!-- Card Number -->
                     <div class="control-group">
                         <label class="control-label" for="email">Payment mathod</label>
                         <div class="controls">
                             <select name="payment_mathod" class="form-control" id="exampleFormControlSelect1">
                               
                                <option>Bkash</option>
                                 <option>Rocket</option>
                                 <option>Nogod</option>
                                 
                             </select>
                         </div>
                     </div>

                     <div class="control-group">
                         <label class="control-label" for="username">Transaction id</label>
                         <div class="controls">
                             <input  type="text" id="transaction_id" name="transaction_id"
                                 placeholder="" class="input-xlarge">
                         </div>
                     </div>

                     <div class="control-group">
                         <label class="control-label" for="username">Amount</label>
                         <div class="controls">
                             <input readonly type="number" id="amount" name="amount" value="{{$booking->sub_total}}"
                                 placeholder="" class="input-xlarge">
                         </div>
                     </div>
                     <div class="control-group">
                         <div class="controls">
                             @if($view == true)
                               <a class="btn btn-success" href="{{route('view.info',$booking->id)}}">View</a>
                               @else
                             <button type="submit" class="btn btn-success">Pay Now</button>

                               @endif
                         </div>
                     </div>

                 </fieldset>
             </form>
         </div>
     </div>
