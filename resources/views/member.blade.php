<x-layout>

<div class="text-center font-semibold  m-5 ">

<form id="form" action="/member" class="inline-flex" >
<select name="category" onchange="this.form.submit()" id="" class="text-sm rounded-xl bg-blue-100 ">
  
<option value="" class="font-semibold text-gray-300 ">{{$category[request('category')-1]->category??'Select Category'}}</option>
<option value="">All</option>
  @foreach($category as $category)
  <option value="{{$category->id}}">{{ucwords($category->category)}}</option>
  @endforeach
 
</select>

<div class="mx-5">
  <input type="text" name="search" class="rounded-xl text-sm " placeholder="search" value="{{request('search')}}">
</div>
</form>


</div>

@if($member->count())
@foreach($member as $member)
  <x-user  :member="$member" /> 
 @endforeach 
 @else
 <div class="text-center mt-5 text-gray-400 font-semibold">
  No Members Avaiable.
 </div>
 @endif
</x-layout>