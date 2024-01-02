
<div id="recommended-topics-box">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Most popular post:</h3>
    <div class="topics flex  justify-start gap-3">
        <article class="border-gray-100 pb-10">
            <div class="article-body grid grid-rows-4 gap-3 items-start">
                <div class="article-thumbnail  flex items-center">
                    <a href="{{route('posts.certain-post',$popularPost->id)}}">
                        <img class="mw-100 mx-auto rounded-xl"
                             src="{{$popularPost->getPostImage()}}"
                             alt="thumbnail"/>
                    </a>
                </div>
                <div class="">
                    <div class="article-meta flex py-1 text-sm items-center gap-3 justify-between">
                        <x-posts.author-avatar :post="$popularPost"/>
                        <span class="text-gray-500 text-xs">{{$popularPost->created_at->diffForHumans()}}</span>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900">
                        <a href="{{route('posts.certain-post',$popularPost->id)}}">
                            {{$popularPost->title}}
                        </a>
                    </h2>
                    <div class="article-actions-bar flex items-center justify-between mt-2">
                        <div class="flex gap-x-2">
                            @foreach($popularPost->categories as $category)
                                <x-badge textColor="{{$category->text_color}}" bgColor="{{$category->bg_color}}">
                                    {{$category->title}}
                                </x-badge>
                            @endforeach
                            <div class="flex items-center space-x-4 mr-3">
                                <span class="text-gray-500 text-sm">{{$popularPost->getReadingTime()}} min read</span>
                            </div>
                                <livewire:like-button key="{{$popularPost->id}}" :post="$popularPost"/>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
