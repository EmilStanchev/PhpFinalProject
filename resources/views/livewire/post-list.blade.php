<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-xl">
            @if($searchValue)
                <div class="flex-1 justify-between align-content-center" style="text-align: center">
                    Searching {{$searchValue}}
                   <span> <button wire:click="removeValue()" class="btn hover:border-yellow-500 hover:text-yellow-500 border-gray-950" >X</button></span>
                </div>
            @endif
        </div>
        <div class="text-xl">
            @if($category)
                <div class="flex-1 justify-between align-content-center" style="text-align: center">
                    Searched category:  {{$category}}
                        <span> <button wire:click="removeCategoryValue" class="btn hover:border-yellow-500 hover:text-yellow-500 border-gray-950" >X</button></span>
                </div>
            @endif
        </div>
        <div id="filter-selector" class="flex items-center space-x-4 text-xl ">
            <button class="{{$sort==='desc'?'text-gray-900 border-b border-gray-700': 'text-gray-9500'}} py-4"
                    wire:click="setSort('desc')">Latest</button>
            <button class="{{$sort==='asc'?'text-gray-900 border-b border-gray-700': 'text-gray-950'}} py-4"
                    wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach($this->posts as $post)
            <x-posts.post-item wire:key="{{$post->id}}" :post="$post"/>
        @endforeach
    </div>
    <div class="my-3">
        {{$this->posts->links()}}
    </div>
</div>
