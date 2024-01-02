@section('title', 'Home')
<x-app-layout>
    @section('content')
    <div class="mb-10 ml-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.post-card :post="$post"/>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
               href="{{route('posts.index')}}">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                @foreach($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post"/>
                    </div>
                @endforeach
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
           href="{{route('posts.index')}}">More
            Posts</a>
    </div>
    @endsection
</x-app-layout>
