<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="top-menu ml-5">
            <x-nav-link class="flex space-x-2 text-white no-underline mr-5 text-xl items-center hover:text-yellow-900 text-sm text-yellow-500"
                        href="{{route('/')}}" :active="request()->routeIs('/')">
                Home
            </x-nav-link>
            <x-nav-link class="flex space-x-2 text-white no-underline text-xl mr-5 items-center hover:text-yellow-900 text-sm text-yellow-500"
                        href="{{route('/')}}" :active="request()->routeIs('/blog')">
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
