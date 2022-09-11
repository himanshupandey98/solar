<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="register/css/style.css">

   


	</head>
	<body class="img bg-image " style="background-image: url(/register/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center ">
				<div class="col-md-6 col-lg-4 bg-dark p-3">
					<div class="login-wrap p-0">

                    @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                  @endforeach
                  @endif
		      
		      	<form action="/regis" class="signin-form" method="post">
                  @csrf

                
               <div class="text-center  mb-3 mt-3">
                
                <select name="category_id" id="category" class="p-2 w-100 rounded-pill border bg-dark text-light">
                <option value="" class="text-center">Select your category</option>

                    @foreach($category as $category)
                <option value="{{$category->id}}"><b>{{ucwords($category->category)}}</b></option>
                 @endforeach

                </select>
               </div>

		      		</div>
		      		<div class="form-group">
		      			<input type="text" name="name" class="form-control border" placeholder="Enter name" required value="{{old('name')}}">
		      		</div>
                      <div class="form-group">
		      			<input type="email" name="email" class="form-control border" placeholder="Enter email" required value="{{old('email')}}">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control border" placeholder="Create password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control border btn btn-primary submit px-3">Register!</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
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

