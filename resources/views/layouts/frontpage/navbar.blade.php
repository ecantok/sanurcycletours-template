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
            <div class="dropdown">
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    class="{{ request()->routeIs('frontpage.tour') ? 'active' : '' }} text-yellow text-shadow">Tours</a>

                <ul class="dropdown-menu bg-maroon">
                    @foreach (get_categories() as $category)
                        <li>
                            <a class="dropdown-item text-yellow" href="{{ route('frontpage.tour', $category->slug) }}"
                                onmouseover="this.style.backgroundColor='#5b0102';"
                                onmouseout="this.style.backgroundColor='#542c3a';">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ route('frontpage.bicycle') }}"
                class="{{ request()->routeIs('frontpage.bicycle') ? 'active' : '' }} text-yellow text-shadow">Bicycle</a>
        </li>
        <li>
            <a href="{{ route('frontpage.gallery') }}"
                class="{{ request()->routeIs('frontpage.gallery') ? 'active' : '' }} text-yellow text-shadow">Gallery</a>
        </li>
        <li>
            <a href="{{ route('frontpage.certification') }}"
                class="{{ request()->routeIs('frontpage.certification') ? 'active' : '' }} text-yellow text-shadow">Insurance
                &
                Certification</a>
        </li>
        <li>
            <a href="{{ route('frontpage.testimonial') }}"
                class="{{ request()->routeIs('frontpage.testimonial') ? 'active' : '' }} text-yellow text-shadow">Testimonials</a>
        </li>
    </ul>
</nav>
