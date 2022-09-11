<x-layout>
    
<div class="lg:grid grid-cols-8 gap-5 BORDER-BOTTOM  pb-4">
<div class="col-start-2 col-span-2  border-rounded-circle mt-4 text-center">
<img  class="flex-shrink-0 rounded-circle " src="https://picsum.photos/500/300?random/{{5}}" alt=""  >
</div>
<div class="col-start-4 col-span-4 mt-4 px-3 ">
    <div class="">
    <div class="flex">
    <p class="text-3xl pb-3">{{$user->name}}</p>
    <p class="text-sm mx-5 border border-gray-400 text-right pb-3">{{$user->category->category}}</p>
</div>
    <div class="flex pb-3">
        <p class="pr-5">{{($user->post)->count()}} posts</p>
        <p> 105 sites </p>

    </div>
    @if($user->category->category == 'solar installer')
    <p class="text-xl">{{$user->firmname}}</p>
  
  <div class="text-sm">  <p>{{$user->gstno}}</p>
  @endif
    <p>{{$user->mobileno}}</p>
    @if($user->category->category != 'customer')
     <p>sites completed:105</p>
     @endif
     @if($user->category->category == 'solar technician')
     <p>wiring:{{$user->wiringcharge}}</p>
     <p>structure:{{$user->structurecharge}}</p>
     <p>total:{{$user->totalcharge}}</p>
@endif
    <p>{{$user->address}}</p>
    <p>{{$user->location}}</p>

    </div>
    </div>
</div>
</div>
<!-- our works -->
<div >
    <div class="text-center font-semibold text-xl pt-4">
        Our Works
    </div>

    
@if(($user->post)->count())   
@foreach ($user->post as $media)
    <x-prodtl :user="$media"/>
 @endforeach
 @else
 <div class="font-semibold text-center mt-5 text-gray-400">
    No Posts.Check After Some Time !
 </div>
    @endif
</div>
</x-layout>