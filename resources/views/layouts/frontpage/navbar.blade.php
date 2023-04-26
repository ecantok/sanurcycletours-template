<nav id="navbar" class="navbar">
    <ul>
        <li>
            <a href="{{ route('frontpage.home') }}"
                class="{{ request()->routeIs('frontpage.home') ? 'active' : '' }} text-yellow text-shadow">Home</a>
        </li>
        <li>
            <a href="{{ route('frontpage.about') }}"
                class="{{ request()->routeIs('frontpage.about') ? 'active' : '' }} text-yellow text-shadow">About Us</a>
        </li>
        <li>
            <a href="{{ route('frontpage.tour') }}"
                class="{{ request()->routeIs('frontpage.tour') ? 'active' : '' }} text-yellow text-shadow">Tours</a>
        </li>
        <li>
            <a href="{{ route('frontpage.bicycle') }}"
                class="{{ request()->routeIs('frontpage.bicycle') ? 'active' : '' }} text-yellow text-shadow">Bicycle</a>
        </li>
    </ul>
</nav>
