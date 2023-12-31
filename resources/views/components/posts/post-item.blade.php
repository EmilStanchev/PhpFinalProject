@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a href="">
                <img class="mw-100 mx-auto rounded-xl"
                     src="{{$post->getPostImage()}}"
                     alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                <img class="w-10 h-10 rounded-full mr-3"
                     src="{{$post->author->image}}"
                     alt="avatar">
                <span class="mr-1 text-sm">{{$post->author->first_name}}</span>
                <span class="mr-1 text-sm">{{$post->author->last_name}}</span>
                <span class="text-gray-500 text-xs">{{$post->created_at->diffForHumans()}}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="http://127.0.0.1:8000/blog/first%20post">
                    {{$post->title}}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{$post->getResume()}}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex gap-x-2">
                    @foreach($post->categories as $category)
                        <x-badge textColor="{{$category->text_color}}" bgColor="{{$category->bg_color}}">
                            {{$category->title}}
                        </x-badge>
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{$post->getReadingTime()}} min read</span>
                    </div>
                </div>
                <div>
                   <livewire:like-button key="{{$post->id}}" :post="$post"/>
                </div>
            </div>
        </div>
    </div>
</article>

