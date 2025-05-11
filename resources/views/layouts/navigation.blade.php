<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        Abraham's Cuisine
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('designer')" :active="request()->routeIs('designer')">
                        {{ __('Edit Site') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('feedbacks')" :active="request()->routeIs('feedbacks')">
                        {{ __('Feedbacks') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('product')" :active="request()->routeIs('products')">
                        {{ __('Products') }}
                    </x-nav-link>
                </div>
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('backgrounds')" :active="request()->routeIs('backgrounds')">
                        {{ __('Backgrounds') }}
                    </x-nav-link>
                </div> --}}
          
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                
                <div class="relative" x-data="{ showNotifications: false }">
                    <button @click="showNotifications = !showNotifications" class="relative inline-flex items-center p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                        <!-- Bell Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <!-- Red Dot -->
                        <span id="toggledot" class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-white bg-red-500"></span>
                    </button>

                    <!-- Notification Dropdown -->
                
                    <div 
                    x-show="showNotifications" 
                    @click.away="showNotifications = false" 
                    class="absolute right-0 mt-2 w-[400px] bg-white border border-gray-200 rounded-md shadow-lg z-50"
                    style="width: 300px;">
                    
                        <div class="p-4 font-semibold border-b">Notifications</div>
                        <div class="notifs max-h-64 overflow-y-auto px-4 py-2">
                            <!-- Dynamic notifications go here -->
                        </div>
                        {{-- <ul class="max-h-64 overflow-y-auto" id="notification-list">
                            <a href="/notification">
                                <li class="px-4 py-2 text-sm text-gray-700"> 
                                    John Doe has cancelled his reservation<br>
                                    2025-04-06 5:43 AM
                                </li>
                            </a>
                        </ul> --}}
                        <!-- See All Messages Link -->
                        <div class="border-t text-center">
                        <a href="/notifications" class="block px-4 py-2 text-sm text-blue-600 hover:underline">
                        See All Messages
                        </a>
                        </div>
                    </div>
                </div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                
            </div>
  

                  <!-- Hamburger -->
                  <div class="-me-2 flex items-center sm:hidden">
                    <div x-data="{ showNotifications: false }" class="relative">
                        <button @click="showNotifications = !showNotifications" class="relative inline-flex items-center p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                            <!-- Bell Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <!-- Red Dot -->
                            <span id="toggledots" class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-white bg-red-500"></span>
                        </button>
                    
                        <!-- Notification Dropdown -->
                        <div x-show="showNotifications" @click.away="showNotifications = false"
                            class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-md shadow-lg z-50"
                            style="width: 300px;"
                            >
                            <div class="p-4 font-semibold border-b">Notifications</div>
                    
                            <div class="notifs max-h-64 overflow-y-auto px-4 py-2">
                                <!-- Dynamic notifications go here -->
                            </div>
                    
                            <!-- See All Messages Link -->
                            <div class="border-t text-center">
                                <a href="/notifications" class="block px-4 py-2 text-sm text-blue-600 hover:underline">
                                    See All Messages
                                </a>
                            </div>
                        </div>
                    </div>
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                 </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('designer')" :active="request()->routeIs('designer')">
                {{ __('Edit Site') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('feedbacks')" :active="request()->routeIs('feedbacks')">
                {{ __('Feedbacks') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('product')" :active="request()->routeIs('products')">
                {{ __('Products') }}
            </x-responsive-nav-link>
            {{-- <x-responsive-nav-link :href="route('backgrounds')" :active="request()->routeIs('backgrounds')">
                {{ __('Backgrounds') }}
            </x-responsive-nav-link> --}}
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var toggledot = document.getElementById("toggledot");
    var toggledots = document.getElementById("toggledots");
    toggledot.style.display = "none";
    toggledots.style.display = "none";
    function notifs(){
        $.ajax({
                url: "{{ route('notifications.data') }}",
                type: "GET",
                data: "",
                success: function (response) {
                    console.log(response)

                    response.forEach(function(notification) {

                        let messagessDiv = `
                    <ul class="max-h-64 overflow-y-auto" id="notification-list">
                                <a href="/notifications">
                                    <li class="px-4 py-2 text-sm text-gray-700"> 
                                    ${notification.name} ${notification.description}<br>
                                        ${notification.date}
                                    </li>
                                </a>
                            </ul>
                    `;
                    $('.notifs').append(messagessDiv);

                    })
                   
                },
            });  
    }
    notifs()
    document.addEventListener("DOMContentLoaded", function () {
    window.Echo.channel("public-messages")
        .listen(".message.sent", function (event) {
            console.log("Received:", event);
            alert("hihi");
            toggledot.style.display = "block";
            toggledots.style.display = "block";
            notifs()
    
        });
    });
</script>
