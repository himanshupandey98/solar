<x-layout>

@foreach($post as $post)
  <x-post :post="$post"/>

  
@endforeach


</x-layout>
