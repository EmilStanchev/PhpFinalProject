
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
    <div class="container">
        <div class="top-menu ml-10">
            <x-nav-link class="flex space-x-2 no-underline mr-5 text-xl items-center "
                        href="{{route('/')}}" :active="request()->routeIs('/')">
                Home
            </x-nav-link>
            <x-nav-link class="flex space-x-2 no-underline text-xl mr-5 items-center"
                        href="{{route('posts.index')}}" :active="request()->routeIs('posts.index')">
                Blog
            </x-nav-link>
        </div>
        <div class="" id="navbarSupportedContent">
            @auth
                @include("layouts.partials.right-auth-header")
            @else
                @include("layouts.partials.right-header-guest")
            @endauth
        </div>
    </div>
</nav>
