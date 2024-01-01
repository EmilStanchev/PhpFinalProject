<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown" >
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <button class="rounded-circle nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle w" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="width: 64px;height: 64px"/>
            </button>
        @else
            <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
        @endif
        <ul class="dropdown-menu dropdown-menu-end">
            <li class="dropdown-item">
                <x-nav-link href="{{ route('profile.user-likes') }}" :active="request()->routeIs('profile.user-likes')">
                    Profile
                </x-nav-link>
            </li>
            <li class="dropdown-item"><x-nav-link href="{{route('profile.show')}}">Settings</x-nav-link></li>
            @if(Auth::user()->isAdmin())
                <li class="dropdown-item">
                    <a href="{{route('filament.admin.auth.login')}}" >
                        {{__('Admin panel')}}
                    </a>
                </li>
            @endif
            <li class="dropdown-item">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-nav-link class="" href="{{ route('login') }}" @click.prevent="$root.submit();" >
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </li>
        </ul>
    </li>
</ul>
