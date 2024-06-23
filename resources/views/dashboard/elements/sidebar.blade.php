@push('styles')
    <style>
        i {
            font-size: 22px !important;
            padding-right: 6px !important;
        }
    </style>
@endpush

<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">Main</li>
            <li class="{{ Request::is('dashboard/home') ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.home') }}" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-van-shuttle"></i>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('home') }}" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-brands fa-edge"></i>
                    </div>
                    <span class="nav-text">Website</span>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/orders*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-hashtag fa-spin"></i>
                    </div>
                    <span class="nav-text">Orders</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/orders*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/mechanicals*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.orders.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.orders.index') }}">View</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/customers*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-hashtag fa-spin"></i>
                    </div>
                    <span class="nav-text">Customers</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/customers*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/mechanicals*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.customers.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.customers.index') }}">View</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/mechanicals*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-hashtag fa-spin"></i>
                    </div>
                    <span class="nav-text">Mechanicals</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/mechanicals*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/mechanicals*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.mechanicals.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.mechanicals.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.mechanicals.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.mechanicals.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/contacts*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-hashtag fa-spin"></i>
                    </div>
                    <span class="nav-text">Contact us</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/contact-us.index*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/contact-us.index*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.contact-us.index.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.contact-us.index') }}">View</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/tags*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-hashtag fa-spin"></i>
                    </div>
                    <span class="nav-text">Tags</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/tags*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/tags*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.tags.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.tags.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.tags.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.tags.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/specializations*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-wrench fa-spin"></i>
                    </div>
                    <span class="nav-text">Specializations</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/specializations*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/specializations*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.specializations.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.specializations.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.specializations.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.specializations.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            <!-- Combined Categories -->
            <li class="{{Request::is('dashboard/service-categories*') || Request::is('dashboard/product-categories*') || Request::is('dashboard/video-categories*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-regular fa-rectangle-list fa-beat"></i>
                    </div>
                    <span class="nav-text">Categories</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">

                    <li class="{{ Request::is('dashboard/service-categories*') ? 'mm-active' : '' }}">
                        <a href="javascript:void(0);" aria-expanded="false" class="has-arrow">Services</a>
                        <ul aria-expanded="{{ Request::is('dashboard/service-categories*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard.service-categories*') ? 'mm-show' : '' }}">
                            <li class="{{ Route::currentRouteName() == 'dashboard.service-categories.index' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.service-categories.index') }}">View</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'dashboard.service-categories.create' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.service-categories.create') }}">Add new</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Request::is('dashboard/product-categories*') ? 'mm-active' : '' }}">
                        <a href="javascript:void(0);" aria-expanded="false" class="has-arrow">Products</a>
                        <ul aria-expanded="{{ Request::is('dashboard/product-categories*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard.product-categories*') ? 'mm-show' : '' }}">
                            <li class="{{ Route::currentRouteName() == 'dashboard.product-categories.index' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.product-categories.index') }}">View</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'dashboard.product-categories.create' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.product-categories.create') }}">Add new</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Request::is('dashboard/video-categories*') ? 'mm-active' : '' }}">
                        <a href="javascript:void(0);" aria-expanded="false" class="has-arrow">Clips</a>
                        <ul aria-expanded="{{ Request::is('dashboard/video-categories*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard.video-categories*') ? 'mm-show' : '' }}">
                            <li class="{{ Route::currentRouteName() == 'dashboard.video-categories.index' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.video-categories.index') }}">View</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'dashboard.video-categories.create' ? 'mm-active' : '' }}">
                                <a href="{{ route('dashboard.video-categories.create') }}">Add new</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Other Sections -->
            <li class="{{ Request::is('dashboard/services*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa fa-screwdriver-wrench fa-beat"></i>
                    </div>
                    <span class="nav-text">Services</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/services*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/services*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.services.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.services.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.services.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.services.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            
            <li class="{{ Request::is('dashboard/products*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-solid fa-truck-monster fa-beat"></i>
                    </div>
                    <span class="nav-text">Products</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/products*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard.products*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.products.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.products.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.products.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.products.create') }}">Add new</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('dashboard/videos*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fa-regular fa-circle-play fa-beat"></i>
                    </div>
                    <span class="nav-text">CarGo Clips</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/videos*') ? 'true' : 'false' }}" class="{{ Request::is('dashboard/videos*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.videos.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.videos.index') }}">View</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'dashboard.videos.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.videos.create') }}">Add new</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>

