<nav id="navbar" class="navbar">
  <ul>
    <li><a href="{{ route('frontpage.home') }}" class="{{ (request()->routeIs('frontpage.home')) ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('frontpage.about') }}" class="{{ (request()->routeIs('frontpage.about')) ? 'active' : '' }}">About Us</a></li>
  </ul>
</nav>
