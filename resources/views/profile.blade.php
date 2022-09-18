<x-layout>
    
<div class="lg:grid grid-cols-8 gap-5 BORDER-BOTTOM  pb-4">
<div class="col-start-2 col-span-2  border-rounded-circle mt-4 text-center">
<img  class="flex-shrink-0 rounded-circle " src="https://picsum.photos/500/300?random/{{5}}" alt=""  >

@if(auth()->user()->name=="$user->name")
<div class="mt-3">
    <p class="btn btn-info "> <a href="/profile/{{$user->id}}/edit/">Edit Profile</a></p>
</div>
@endif
</div>
<div class="col-start-4 col-span-4 mt-4 px-3 ">
    <div class="">
    <div class="flex">
    <p class="text-3xl pb-3">{{$user->name}}</p>
    <div class="text-sm mx-5 border border-gray-400 align-self-center rounded-xl bg-yellow-400">
       <a href="/member?category={{$user->category->id}}" class="px-2 py-1  ">{{ucwords($user->category->category)}}</a> </div>
       
    </div>
    
    <div class="flex pb-3">
        <p class="pr-5">{{($user->post)->count()}} posts</p>
        @if($user->category->category!='customer')
        <p> {{$user->sites}} sites </p>
       @endif
    </div>
    
    @if($user->category->category == 'solar installer')
    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-building px-1"></i> Company Name</p>
        <p class="col col-sm-auto">{{ucwords($user->firmname)}}</p>
    </div><br>
    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-building px-1"></i> Gst No.</p>
        <p class="col col-sm-auto">{{ucwords($user->gstno)}}</p>
    </div><br>
  
  
  @endif
  <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-phone"> </i> Contact</p>
        <p class="col col-sm-auto">{{$user->mobileno}}</p>
    </div><br>
   
    @if($user->category->category != 'customer')
    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-sharp fa-solid fa-briefcase"></i> Sites Completed</p>
        <p class="col col-sm-auto">{{$user->sites}}</p>
    </div><br>
    
     @endif
     @if($user->category->category == 'solar technician')
     <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-wallet"></i> Wiring Charge per Watt</p>
        <p class="col col-sm-auto">{{$user->wiringcharge}}</p>
    </div><br>

    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-wallet"></i> Structure Charge per Watt</p>
        <p class="col col-sm-auto">{{$user->structurecharge}}</p>
    </div><br>
    
    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-solid fa-wallet"></i> Total Charge per Watt</p>
        <p class="col col-sm-auto">{{$user->totalcharge}}</p>
    </div><br>
     
@endif
    <div class="gap-4 inline-flex row-cols-sm-auto mt-2">
        <p class=" col-sm-auto font-semibold"><i class="fa-sharp fa-solid fa-location-dot"></i> Address</p>
       <div>
        <p>{{$user->address}} </p>
        <p>{{$user->location}}</p>
        </div>
    </div><br>
    
   

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
    <x-prodtl :user="$media" />
 @endforeach
 @else
 <div class="font-semibold text-center mt-5 text-gray-400">
    No Posts.Check After Some Time !
 </div>
    @endif
</div>
</x-layout>