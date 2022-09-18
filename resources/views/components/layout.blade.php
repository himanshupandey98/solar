
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/app.css">
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<div class="bg-gray-100 py-3  drop-shadow-xl flex w-100 ">
<div class="col-md-auto mx-5">
             <b class="col-md-auto ">HPsol</b>
        </div>
        
<div class="inline-flex mx-5 row w-100">
     
       
       <div class="col-md-auto">
        <a href="/" class="uppercase px-3 font-bold  hover:text-blue-500 text-blue-600  "><i class="fa-solid fa-house"></i> Post</a>
        </div>
        <div class="col-md-auto">
            <a href="/member" class="uppercase px-3 font-bold hover:text-blue-500  "><i class="fa-solid fa-user"></i> members</a>
        </div>
        <div class="col-md-auto px-3 font-bold  hover:text-blue-500"  x-data="{ show:false}" @click.away="show=false">
        <button class="uppercase" @click="show=! show"><i class="fa-solid fa-gear"></i> account settings
        </button>

        <div x-show="show" class="bg-gray-200 rounded-xl absolute w-40 mt-2 py-2" style="display:none">
                <a href="/post/create"  class="block text-left px-3 text-sm">Add My Post</a>
                <a href=""  class="block text-left px-3 text-sm">Change Password</a>
                <a href="/profile/{{auth()->user()->id??null}}"  class="block text-left px-3 text-sm">My profile</a>

        </div>
       </div>
        <div class="col text-end inline-flex">
        
        @if (!auth()->check())
                
                <a href="/session" class="text-s  font-bold uppercase px-5 hover:text-blue-700 text-sm">Log in!</a>
               
                <a href="/regis" class="text-s font-bold uppercase">Register!</a>
                @else
                <span class="px-2 py-1 mt-0 rounded-xl bg-yellow-500 border  text-sm">Welcome ,{{auth()->user()->name}} !</span>
               
               <span class="col-md-auto">
                

               <form action="/session/{{'del'}}" method="post">
                @csrf
               @method('delete')
           
                <button class="text-s mt-1 font-bold uppercase px-5 hover:text-blue-700 text-sm">Log out!</button>
                </form>
                </span>
     
                @endif
              
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

