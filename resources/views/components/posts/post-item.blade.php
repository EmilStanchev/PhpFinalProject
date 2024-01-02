@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a href="{{route('posts.certain-post',$post->id)}}">
                <img class="mw-100 mx-auto rounded-xl"
                     src="{{$post->getPostImage()}}"
                     alt="thumbnail"/>
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center gap-3 justify-between">
                <x-posts.author-avatar :post="$post"/>
                <span class="text-gray-500 text-xs">{{$post->created_at->diffForHumans()}}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="{{route('posts.certain-post',$post->id)}}">
                    {{$post->title}}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{$post->getResume()}}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex gap-x-2">
                    @foreach($post->categories as $category)
                        <x-badge wire:key="{{$category->id}}}" textColor="{{$category->text_color}}" bgColor="{{$category->bg_color}}">
                            {{$category->title}}
                        </x-badge>
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{$post->getReadingTime()}} min read</span>
                    </div>
                </div>
                <div>
                   <livewire:like-button :id="'like-' . $post->id" :key="$post->id . now()" :post="$post"/>
                </div>
            </div>
        </div>
    </div>
</article>

