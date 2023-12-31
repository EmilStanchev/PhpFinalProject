<x-app-layout>
    @section('content')
        <div class="mb-10 ml-10">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold text-center">Liked Posts</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @if($likedPosts->count()<1)
                            <h3 class="mt-16 mb-5 text-3xl text-red-500 font-bold">You do not have liked posts </h3>
                        @endif
                        @foreach($likedPosts as $post)
                            <div class="md:col-span-1 col-span-3">
                                <x-posts.post-card :post="$post"/>
                            </div>
                        @endforeach
                    </div>
                </div>
    @endsection
</x-app-layout>
