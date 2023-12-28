 <div class="navbar-nav ms-auto mb-2 mb-lg-0">
            <x-nav-link class="nav-link" aria-current="page" href="{{route('register')}}"
                        :active="request()->routeIs('register')">Register</x-nav-link>

     <x-nav-link class="nav-link " aria-current="page" href="{{route('login')}}"
                 :active="request()->routeIs('login')">Login</x-nav-link>
 </div>

