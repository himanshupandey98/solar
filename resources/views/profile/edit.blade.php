<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../../register/css/style.css">

   


	</head>
	<body class="img bg-image " style="background-image: url(/register/images/bg.jpg);">
    


	<section class="ftco-section">
		<div class="container">

      

			<div class="row justify-content-center">

				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Edit My Profile</h2>
				</div>
			</div>
			<div class="row justify-content-center  ">
				<div class="col-md-6 col-lg-4 bg-dark p-3 ">
					<div class="login-wrap p-0">

                    @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                  @endforeach
                  @endif

          
		      
		      	<form action="/profile/{{$user->id}}" class="signin-form" method="post">
                  @csrf
                  @method('put')
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
               

		      	
		      		@if(auth()->user()->category->category=='solar installer')
                      <div class="form-group pt-3">
		      			<input type="text" name="firmname" class="form-control border" placeholder="Enter firmname"  value="{{$user->firmname}}">
		      		</div>

                    		
                      <div class="form-group pt-3">
		      			<input type="text" name="gstno" class="form-control border" placeholder="Enter gstno"  value="{{$user->gstno}}">
		      		</div>
                    @endif

                    @if(auth()->user()->category->category !== 'customer')
                      <div class="form-group pt-3">
		      			<input type="number" name="sites" class="form-control border" placeholder="Enter sites you completed"  value="{{$user->sites}}">
		      		</div>
                    @endif


                      <div class="form-group pt-3">
		      			<input  type="number" name="mobileno" class="form-control border" placeholder="Enter mobileno"  value="{{$user->mobileno}}">
		      		</div>

                    
                      <div class="form-group pt-3">
		      			<input  type="text" name="address" class="form-control border" placeholder="Enter your address"  value="{{$user->address}}">
		      		</div>

                      <div class="form-group pt-3">
		      			<input  type="text" name="location" class="form-control border" placeholder="Enter your location"  value="{{$user->location}}">
		      		</div>

                      @if(auth()->user()->category->category=='solar technician')
                      <div class="form-group pt-3">
		      			<input  type="number" name="wiringcharge" class="form-control border" placeholder="Enter wiringcharge per watt"  value="{{$user->wiringcharge}}">
		      		  </div>
	
                      <div class="form-group pt-3">
		      			<input  type="number" name="structurecharge" class="form-control border" placeholder="Enter structurecharge per watt"  value="{{$user->structurecharge}}">
		      		</div>

                      <div class="form-group pt-3">
		      			<input  type="number" name="totalcharge" class="form-control border" placeholder="Enter totalcharge per watt"  value="{{$user->totalcharge}}">
		      		</div>

                    
         
                      @endif
                    <div class="text-center">
                        <button class="btn btn-primary">Edit</button>
                    </div>
	            
	          </form>
	        
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/register/js/jquery.min.js"></script>
  <script src="/register/js/popper.js"></script>
  <script src="/register/js/bootstrap.min.js"></script>
  <script src="/register/js/main.js"></script>

	</body>
</html>

