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
        <a href="#" style="text-decoration: none" class="logo">Choose your seats</a>
        <div class="header-right">
            <a class="" href="{{url('/')}}" style="margin-right: 15px;
    text-decoration: none">Home</a>
           


        </div>
    </div>


</body>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Card-->
<div class="card shadow mb-5 bg-white rounded">
    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif
    
    <div class="card-body">
        
        <p class="card-title text-center shadow mb-5 rounded">Seat Information</p>
        <div class="icons text-center">
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <hr>
           
            <br>
            <br>

            <form action="{{route('user.book.ticket',$trip->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Chose your seat</label>
                    <select name="seat[]" multiple class="form-control" id="exampleFormControlSelect2">
                        <option>select one seat</option>
                        @foreach($seat as $data)
                        <option value="{{$data->id}}">{{$data->seat_number}}</option>
                        @endforeach
                    </select>
                </div>

                 <div class="col-sm-6"> 
                      <select class="browser-default custom-select mb-4" required id="counter_location" name="counter_id">
                            <option disabled>Counter name</option>
                            @foreach($counter_name as $data)
                            <option value="{{$data->id}}">{{$data->counter_location}}</option>
                            @endforeach
                        </select>
                    </div>

                 <div class="col-sm-6"> 
                    <input readonly type="text" value="{{$date}}" name="date">
                </div>
                <br>

                <div>
                    <button class="btn btn-primary"  type="submit">Book Now</button>
                   <a class="btn btn-primary" href="{{route('showbooking.info')}}" role="button">view booking details</a>
                </div>

            </form>
        </div>
    </div>
