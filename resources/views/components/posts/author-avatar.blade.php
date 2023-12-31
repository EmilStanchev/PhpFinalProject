@props(['post'])
<div class="article-meta flex py-1 text-sm items-center">
    <img class="w-10 h-10 rounded-full mr-3"
         src="{{$post->author->image}}"
         alt="avatar">
    <span class="mr-1 text-sm">{{$post->author->first_name}}</span>
    <span class="mr-1 text-sm">{{$post->author->last_name}}</span>
</div>
