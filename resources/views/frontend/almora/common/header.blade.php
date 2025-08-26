<header>
    <div class="container-fluid">
        <div class="header-content">
            <div class="menuBtn">
                <div class="bar_line"></div>
                <div class="bar_line"></div>
                <div class="bar_line"></div>
            </div>

            <div class="logo">
                <a href="{{ route('almora') }}">
                    <img src="{{ URL::asset('assets/logos/newLogowhite.png') }}" alt="" class="white-logo">
                    <img src="{{ URL::asset('assets/logos/newLogowhitecolored.png') }}" alt=""
                        class="color-logo">
                </a>
            </div>
            <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal" type="button">Book
                Your Stay</button>
        </div>
    </div>
</header>

<div class="side-bar">
    <div class="close-btn">X</div>
    <h3><a href="index.php"> Balemora </a> </h3>
    <ul class="navbar-nav">
        <!-- <li class="nav-item"><span class="nav-link">Balemora Lucknow </span> </li> -->
        <li class="nav-item"><a href="{{ route('almora') }}" class="nav-link">Home </a> </li>
        <li class="nav-item"><a href="{{ route('balemora-wellness') }}" class="nav-link">Balemora Wellness </a> </li>
        <li class="nav-item"><a href="{{ route('livingBalemoraAlmora') }}" class="nav-link">Living </a> </li>
        <li class="nav-item"><a href="{{ route('galleryBalemoraAlmora') }}" class="nav-link">Gallery </a> </li>
        <li class="nav-item"><a href="{{ route('specialOfferBalemoraAlmora') }}" class="nav-link">Special Offers </a>
        </li>
        <li class="nav-item"><a href="{{ route('contactBalemoraAlmora') }}" class="nav-link">Contact Us </a> </li>
    </ul>
</div>
