<nav class="flex justify-between bg-red-950 h-20 relative py-4  items-center">
    <div class="flex relative lg:left-32 left-12 transition-all duration-300  items-center">
        <a href="/">
            <img src="/master.png" width="46" height="26"/>
        </a>
    </div>
    <ul class=" items-center flex gap-7 lg:right-32 right-12 transition-all duration-300 relative  text-gray-400">
        <li>

            <a href="/">
                Course
            </a>
        </li>
        @can('teacher')
        <li>
            <a href="/mycourse">
                My Course
            </a>
        </li>
        @else
        <li>
            <a href="/">
                Learn
            </a>
        </li>
        <li>
            <a href="/">
                Pricing
            </a>
        </li>


        @endcan
        @auth

        <li>
            <a href="/profile">
                My Account
            </a>
        </li>
        <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="/logout"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Logout ({{ (Auth::user()->name)}})
                </a>
            </form>

        </li>
        @else

        <li>
            <a href="/login">
                Login
            </a>
        </li>
        <button class="py-2 px-5 bg-red-700 text-white rounded-full" href="/login">Join Now</button>
        @endauth
        @can('teacher')
        <button type="button" class="py-2 px-5 bg-red-700 text-white rounded-full" onclick="Livewire.dispatch('openModal', {component: 'add-course'})" >Add Course</button>
        @endcan
    </ul>
</nav>
