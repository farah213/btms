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
        <a href="#" style="text-decoration: none" class="logo">Online Bus Ticket Booking System</a>
        <div class="header-right">
            <a class="" href="{{url('/')}}" style="margin-right: 15px;
    text-decoration: none">Home</a>
            


        </div>
    </div>


</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Card-->
<div class="card shadow mb-5 bg-white rounded">
    <!--Card-Body-->
    <div class="card-body">
        <!--Card-Title-->
        <p class="card-title text-center shadow mb-5 rounded">Ticket Booking Form</p>
        <div class="icons text-center">
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <i class="fa fa-bus fa-2x" aria-hidden="true"></i>
            <hr>
            <p class="searchText"><strong>Search For Trip</strong></p>


            <form  action="{{route('webbusdetails')}}" method="GET">
               
                <div class="row">
                    <div class="col-sm-6">
                        <select class="browser-default custom-select mb-4" required id="from" name="from">
                            <option disabled>selected from</option>
                            @foreach($from as $data)
                            <option value="{{$data->Route_name}}">{{$data->Route_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6"> 
                      <select class="browser-default custom-select mb-4" required id="to" name="to">
                            <option disabled>To</option>
                            @foreach($from as $data)
                            <option value="{{$data->Route_name}}">{{$data->Route_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-sm-6">
                        <input type="date" class="browser-default custom-select mb-4" required id="date" name="date">
                    </div>
                    <div class="col-sm-6"> <select class="browser-default custom-select mb-4" required id="select"
                            name="time">
                            <option value="" disabled="" selected="">Time</option>
                            <option>Morning(6:00 AM)</option>
                            <option>Morning(7:00 AM)</option>
                            <option>Morning(10:00 AM)</option>
                            <option>Afternoon(12:00 PM)</option>
                            <option>Afternoon(3:00 PM)</option>
                            <option>Afternoon(5:00 PM)</option>
                            <option>Night(7:00 PM)</option>
                            <option>Night(8:00 PM)</option>
                            <option>Night(10:00 PM)</option>
                        </select> 
                      </div>
                </div>
                <!--Fifth Row-->
                <div class="row">
                    <div class="col-sm-4"> 
                      <select class="browser-default custom-select mb-4" reqyuired id="coach_type"
                            name="coach_type">
                            <option>Coach Type</option>
                            <option value="AC">AC</option>
                            <option value="NON-AC">NON-AC</option>
                      </select> 
                    </div>
                </div> 
                <button class="btn btn-primary" type="submit">Search</button>
  </form>
        </div>
    </div>
