<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('/')}}">Home</a>
        <h1 style="">hello</h1>
        <div class="" id="navbarSupportedContent">
            @guest
                @include("layouts.partials.right-header-guest")
            @endguest
            @auth
            @include("layouts.partials.right-auth-header")
        </div>
    </div>
    @endauth
</nav>
