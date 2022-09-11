

<div id="post" class="lg:grid grid-cols-5 m-2 ">
    <div class="hover:bg-blue-100 col-start-2 col-span-2">
    <div class=" border border-gray-100 px-2 w-full py-3 inline-flex">
        <img  class="flex-shrink-0 rounded-circle " src="https://source.unsplash.com/random/?city,night/{{5}}" alt="" width="60" height="40" >
     <div class="px-3">
        <p class="text-xl font-semibold"><a href="/member/{{($post->id)}}">{{ucwords($post->user->name)}}</a></p>
        <p class="text-sm font-semibold">{{$post->user->category->category}} in {{ucwords($post->location)}}</p>
        <p class="text-xs text-gray-500 pt-2">{{$post->created_at->diffForHumans()}}.</p>
</div>

</div>


<div class="col-start-2 col-span-2 border border-gray-100">
        <img class="p-1 " src="https://source.unsplash.com/random/?city,night/{{$post->id}}" alt="" >
        <div class="pt-5 px-1">
            <form action="/comment/{{$post->id}}"  method="post">
                @csrf
            
                <input type="text" name="comments" placeholder="share what you feel !" class=" rounded-3xl w-full">
                <div class="text-end px-2 pt-2">
                <button class="btn btn-primary uppercase text-sm font-bold rounded-3xl p">Post</button>
                @if(@error)
                @error('comment')
              <p class="text-red-400 text-xs text-center">{{ $message }}</p>
                @enderror 
                @endif 
            </div>
            
            </form>
            @foreach($post->comment as $comment)
            <x-comment :comment="$comment" :post="$post"/>
               @endforeach
        </div> 
                
    </div>
  
    </div>
</div>
