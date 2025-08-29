<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span class="text-primary">
                    <svg width="220" height="220" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Folded B logo">
                        <defs>
                            <linearGradient id="bShine" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0" stop-color="#7a9666" />
                                <stop offset="1" stop-color="#6a8358" />
                            </linearGradient>
                            <filter id="softShadow" x="-20%" y="-20%" width="140%" height="140%">
                                <feDropShadow dx="0" dy="6" stdDeviation="8" flood-opacity="0.18" />
                            </filter>
                        </defs>

                        <g filter="url(#softShadow)">
                            <!-- Left vertical ribbon -->
                            <path d="M40 24 L88 24 L88 232 L40 232 Z" fill="url(#bShine)" />

                            <!-- Top bowl outer -->
                            <path d="M88 24 L156 24 C204 24, 216 58, 216 82 C216 112, 192 128, 160 132
                            L88 140 Z" fill="#6a8358" />

                            <!-- Bottom bowl outer -->
                            <path d="M88 120 L160 128 C196 132, 220 150, 220 178 C220 208, 198 232, 156 232
                            L88 232 Z" fill="#6a8358" />

                            <!-- Inner cut / negative space (top) -->
                            <path d="M110 58 L152 58 C176 58, 184 72, 184 84 C184 98, 170 106, 148 108
                            L110 112 Z" fill="#f4f5f7" />
                            <path d="M110 154 L150 156 C174 158, 188 168, 188 182 C188 198, 174 206, 152 206
                            L110 206 Z" fill="#f4f5f7" />
                            <path d="M88 24 L110 58 L110 112 L88 140 Z" fill="#556a47" />
                            <path d="M88 120 L110 154 L110 206 L88 232 Z" fill="#556a47" />
                            <polygon points="88,24 156,24 148,42 110,42" fill="#7a9666" />
                            <polygon points="110,206 152,206 156,232 88,232" fill="#7a9666" />
                            <rect x="40" y="24" width="8" height="208" fill="#8aa27a" opacity="0.5" />
                        </g>
                    </svg>

                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Balemora</span>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active open' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-home-smile-line"></i>
                <div data-i18n="HOME">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/website-info*') ? 'active open' : '' }}">
            <a href="{{ route('websiteInfo') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-information-line"></i>
                <div data-i18n="WEBSITE_INFO">Website Info</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/website-banner*') ? 'active open' : '' }}">
            <a href="{{ route('websiteBanner') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-image-2-line"></i>
                <div data-i18n="WEBSITE_BANNER">Website Banner</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/gallery*') ? 'active open' : '' }}">
            <a href="{{ route('gallery') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-gallery-line"></i>
                <div data-i18n="GALLERY">Gallery</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/offers*') ? 'active open' : '' }}">
            <a href="{{ route('offers') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-gift-line"></i>
                <div data-i18n="OFFERS">Offers</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/contact*') ? 'active open' : '' }}">
            <a href="{{ route('contactDetails') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-contacts-line"></i>
                <div data-i18n="CONTACT">Website Contact Details</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/social*') ? 'active open' : '' }}">
            <a href="{{ route('socialMediaLinks') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-share-line"></i>
                <div data-i18n="SOCIALLINKS">Website Social Links</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ request()->is('admin/website-pages*') || request()->is('admin/add-website-page*') || request()->is('admin/edit-website-page*') ? 'active open' : '' }}">
            <a href="{{ route('websitePages') }}" class="menu-link">
                <i class="menu-icon icon-base ri ri-global-line"></i>
                <div data-i18n="PAGES">Website Pages</div>
            </a>
        </li> --}}
    </ul>
</aside>
