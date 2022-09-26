                <div id="comment" class="bg-blue-100 flex border mb-1 p-1 w-full" >
                    <p class="mt-1">
                        <span><img  class="rounded-circle" src="https://source.unsplash.com/random/?city,night/{{$post->id??$comment->id}}" alt="" width="50px" height="50px"></span>
                    </p>
                    <div class="inline px-3 ">
                        <p> <a href="/profile/{{($comment->user->id)}}">{{($comment->user->name)}}</a></p>
                        <p class="text-xs font-semibold text-gray-400">{{($comment->created_at->diffForHumans())}}</p>
                        <p class="mt-2 text-sm">{{$comment->comments}}</p>
                        
                    </div>
                </div>  