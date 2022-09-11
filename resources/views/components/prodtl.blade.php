<div class="lg:grid grid-cols-10 pt-4   ">
        <div class="inline-flex hover:bg-gray-100 col-span-8 border col-start-2  rounded-xl p-2">
            
            <img src="https://source.unsplash.com/random/{{$user->id}}" alt="" class="w-full rounded-xl h-80 col-span-3 w-80 flex-shrink-0 " >
            
          <div class="col-start-6 col-span-4 px-5 items-center">
            <p class="font-bold text-3xl text-gray-500">{{$user->sitename}}</p>
            <p class="pt-4">{{$user->sitedetail}}</p>
        </div>
    </div>
    </div>