<div class="lg:grid grid-cols-10 pt-4   ">
        <div class="inline-flex hover:bg-gray-100 col-span-8 border col-start-2  rounded-xl p-2">
            
            <img src="https://source.unsplash.com/random/{{$user->id}}" alt="" class="w-full rounded-xl h-80 col-span-3 w-80 flex-shrink-0 " >
            
          <div class="col-start-6 col-span-4 px-5 items-center">
            <p class="font-bold text-3xl text-gray-500">{{$user->sitename}}</p>
            <p class="pt-4">{{$user->sitedetail}}</p>

            
              @if(($user->comment)->count())
              <div id="maincomment" class="h-80 overflow-scroll">
            @foreach($user->comment as $comment)
             
              <x-comment :comment="$comment"/>
          
              @endforeach
              </div>
   
            @endif
           
        </div>
      
        @if(auth()->user()->name=="$member->name")
        <div class="col text-right px-4 flex">
         
          <a href="/post/{{$user->id}}/edit" class="px-2"><i class="fa-regular fa-pen-to-square"></i></a>
           <form action="/post/{{$user->id}}" method="post">       
            @csrf
            @method('delete')
          <button class="px-2"><i class="fa-solid fa-trash-can"></i></button>
          </form>
        </div>
        @endif
    </div>
    </div>