@props(['post'])
<div class="">
    <a href="{{route('posts.index',['slug'=>$post->slug])}}">
        <div class="">
            <img class="w-full h-64 rounded-xl"
                 src="{{$post->getPostImage()}}" alt="{{$post->title}}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-4">
            @if($category=$post->categories->first())
                <x-badge href="{{route('posts.index',['category'=>$category->slug])}}" textColor="{{$category->text_color}}" bgColor="{{$category->bg_color}}">
                    {{$category->title}}
                </x-badge>
            @endif
            <p class="text-gray-500 text-sm">{{$post->created_at}}</p>
        </div>
        <a class="text-xl font-bold text-gray-900">{{$post->title}}</a>
    </div>
</div>
