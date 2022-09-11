
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/app.css">
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

<div class="bg-gray-100 py-3  drop-shadow-xl flex w-100 ">
<div class="col-md-auto mx-5">
             <b class="col-md-auto ">HPsol</b>
        </div>
        
<div class="inline-flex mx-5 row w-100">
     
       
       <div class="col-md-auto">
        <a href="/" class="uppercase px-3 font-bold  hover:text-blue-500 text-blue-600  ">Post</a>
        </div>
        <div class="col-md-auto">
            <a href="/member" class="uppercase px-3 font-bold hover:text-blue-500  ">members</a>
        </div>
        <div class="col-md-auto">
        <a href="#" class="uppercase px-3 font-bold  hover:text-blue-500 ">account settings</a>
        </div>
       
        <div class="col text-end">
        <a href="/login" class="uppercase px-1 font-bold  hover:text-blue-500 ">Login!</a>
    
       
        <a href="/regis" class="uppercase px-1 font-bold  hover:text-blue-500 ">Register!</a>
        </div>
</div>
  

</div>
  

</div>

<body >
 
@if (session()->has('success'))

<div x-data="{ show:true }"
x-init="setTimeout(()=>show=false,4000)" x-show="show">
    <p class="fixed top-10 left-4 bg-blue-500 text-white rounded-xl text-sm py-2 px-4">
        {{session('success')}}</p>
</div>
@endif
{{$slot}}   
</body>

