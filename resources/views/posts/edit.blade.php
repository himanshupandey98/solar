<!doctype html>
<html lang="en">
  <head>
  	<title>Edit post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../register/css/style.css">

   


	</head>
	<body class="img bg-image " style="background-image: url(/register/images/bg.jpg);">
    


	<section class="ftco-section">
		<div class="container">

      

			<div class="row justify-content-center">

				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Edit Post</h2>
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

                  @if (session()->has('success'))
            <div x-data="{ show:true }"
                x-init="setTimeout(()=>show=false,4000)" x-show="show">
                    <p class="fixed top-10 left-4 bg-blue-500 text-white rounded-xl text-sm py-2 px-4">
                        {{session('success')}}</p>
                </div>
                @endif
		      
		      	<form action="/post/{{'update'}}" class="signin-form" method="post">
                  @csrf
                  @method('put')

                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" name="id" value="{{$id}}">

		      	
		      		
                      <div class="form-group pt-3">
		      			<input type="text" name="sitename" class="form-control border" placeholder="Enter sitename" required value="{{$data->sitename}}">
		      		</div>

                      <div class="form-group pt-3">
		      			<textarea name="sitedetail" class="form-control border" placeholder="Enter sitedetail" required value="{{old('sitedetail')}}"></textarea>
		      		</div>

                      <div class="form-group pt-3">
		      			<input type="text" name="address" class="form-control border" placeholder="Enter address" required value="{{$data->address}}">
		      		</div>
	                
                      <div class="form-group pt-3">
		      			<input type="text" name="location" class="form-control border" placeholder="Enter location" required value="{{$data->location}}">
		      		</div>

                    <div class="text-center">
                        <button class="btn btn-primary">Post</button>
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

