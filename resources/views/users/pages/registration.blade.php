<style> {box-sizing: border-box;}

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
  padding: 12px;
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
}</style>











<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Registration Here</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('/reg/')}}/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('/reg/')}}/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>

<div class="header">
  <a href="#" class="logo" style="text-decoration: none">Online Bus Ticket Booking System</a>
  <div class="header-right">
    <a class="" href="{{url('/')}}" style="text-decoration: none">Home</a>
    
    <a href="{{route('loginshow')}}"style="text-decoration: none">Log In</a>
        
    
    
  </div>
</div>



</body>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-cta">
         

  
<!-- @csrf
<div class="container">
	<div class="row" style="padding: 50px 350px;">
 @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif -->



		<main class="form-signin">
  <form method="post" action="{{route('user.store')}}">
    @csrf
    <div style="display: flex;justify-content: center;">
    <div>
        <div style="display:flex;justify-content:center;">
			<img class="mb-4" src="https://cdn3.vectorstock.com/i/1000x1000/11/02/bus-ticket-book-online-banner-vector-27931102.jpg" alt="" width="72" height="57">
		</div>
    <h1 class="h3 mb-3 fw-normal">Registration Info</h1>
    </div>
</div>
    <label for="name" class="visually-hidden">First Name</label>
    <input   type="text" id="name" class="form-control" placeholder="First Name" name='name' autofocus="">
	<label for="name" class="visually-hidden">Last Name</label>
    <input type="text" id="lastname" class="form-control" placeholder="Last Name" name='lastname' autofocus="">
	<label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" id="email" class="form-control" placeholder="Email address" name='email' autofocus="">
	<label for="inputEmail" class="visually-hidden">Contact</label>
    <input type="phone" id="phone" class="form-control" placeholder="Contact" name='phone' autofocus="">
	
	<!-- <label for="inputEmail" class="visually-hidden">Role</label>
    <input type="role" id="role" class="form-control" placeholder="Role" name="role" autofocus=""> -->
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" name="password">
    <div class="checkbox mb-3">
     
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    
  </form>
  
</main>      
		
	</div>
</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>