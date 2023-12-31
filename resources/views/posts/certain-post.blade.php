@section('title', 'Certain post')

<x-app-layout>
    @section('content')
    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">

        <h1 class="text-4xl font-bold text-left text-gray-800">
            {{$post->title}}
        </h1>
        <img class="mw-100 mx-auto rounded-xl mt-5 mb-3"
             src="{{$post->getPostImage()}}"
             alt="thumbnail"/>
            <div class="mt-2 flex justify-between items-center">
                <x-posts.author-avatar :post="$post"/>
                <div class="flex items-center">
                    <span class="text-gray-500 text-xs">{{$post->created_at->diffForHumans()}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                         stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <div
                class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
                <div class="flex items-center">
                    <livewire:like-button key="{{$post->id}}" :post="$post"/>
                </div>
                <div>
                </div>
            </div>

            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                {!!  $post->description !!}
            </div>

            <div class="flex items-center space-x-4 mt-10">
                @foreach($post->categories as $category)
                    <x-badge textColor="{{$category->text_color}}" bgColor="{{$category->bg_color}}">
                        {{$category->title}}
                    </x-badge>
                @endforeach
            </div>
        </article>
    @endsection
</x-app-layout>
