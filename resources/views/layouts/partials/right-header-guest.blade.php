<div class="top-menu ml-5">
            <x-nav-link class="flex space-x-2 no-underline text-xl mr-5 items-center" href="{{route('register')}}"
                        :active="request()->routeIs('register')">Register</x-nav-link>
     <x-nav-link class="flex space-x-2 no-underline text-xl mr-5 items-center "
                 href="{{route('login')}}" :active="request()->routeIs('login')">
         Login
     </x-nav-link>
 </div>

