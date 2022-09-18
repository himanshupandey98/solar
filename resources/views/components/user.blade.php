<link rel="stylesheet" href="/app.css"> 
<div id="user" class="lg:grid grid-cols-5 mt-2 ">
        <div class="col-start-2 border border-gray-100 col-span-3 hover:bg-gray-300">
            <div class="lg:grid grid-cols-8 mt-4">
        <img src="https://picsum.photos/500/300?random/{{$member->id}}" alt="" width="60" height="40" class="px-1 rounded-circle">
        <div class="col-start-2 col-span-4 ">
            <p class="font-bold text-xl"><a href="/profile/{{($member->id)}}">{{ucwords($member->name)}}</a></p>
            <p>{{ucwords($member->firmname)}}</p>
            <div class="mt-3 text-start">
            Address:{{ucwords($member->address)}} <p>{{ucwords($member->location)}}</p>  
        </div>
        </div>
        
        <div class="col-start-7 col-span-2 m-1 py-1">
        <p class="text-xs  border-blue-400 py-2 text-center rounded-xl  bg-yellow-400 font-semibold hover:bg-gray-100"><a href="member?category={{$member->category->id}}">{{ucwords($member->category->category)}}</a>
            </p>
           
        </div>
    </div>
 </div>

       
    </div>