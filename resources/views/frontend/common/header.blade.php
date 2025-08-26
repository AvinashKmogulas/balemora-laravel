<header>
    <div class="container-fluid">
        <div class="header-content">
            <div class="menuBtn">
                <div class="bar_line"></div>
                <div class="bar_line"></div>
                <div class="bar_line"></div>
            </div>
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ $info->website_white_logo ?? URL::asset('assets/logos/newLogowhite.png') }}"
                        alt="" class="white-logo">
                    <img src="{{ $info->website_logo ?? URL::asset('assets/logos/newLogowhitecolored.png') }}"
                        alt="" class="color-logo">
                </a>
            </div>
            <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal" type="button">Book
                Your Stay</button>
        </div>
    </div>
</header>

<div class="side-bar">
    <div class="close-btn">X</div>
    <h3><a href="{{ route('home') }}"> Balemora </a> </h3>
    <ul class="navbar-nav">
        <li class="dropdown">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Our
                Retreats</button>
            <ul class="dropdown-menu">
                <li>
                    <p>Lucknow</p>
                    <a class="dropdown-item" href="{{ route('lucknow') }}"><i class="fa-solid fa-chevron-right"></i>
                        Balemora NH27, Lucknow</a>
                </li>
                <li>
                    <p>Almora</p>
                    <a class="dropdown-item" href="{{ route('almora') }}"><i class="fa-solid fa-chevron-right"></i>
                        Balemora, Almora</a>
                </li>
            </ul>
        </li>
        <li class="nav-item"><a href="{{ route('balemora-wellness') }}" class="nav-link">Balemora Wellness</a> </li>
        <li class="nav-item"><a href="{{ route('aboutBalemora') }}" class="nav-link">About Us</a> </li>
        <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a> </li>
        <li class="nav-item"><a href="{{ route('balemoraOffer') }}" class="nav-link">Special Offers</a> </li>
        <li class="nav-item"><a href="{{ route('balemoraContact') }}" class="nav-link">Contact Us</a> </li>
    </ul>
</div>
