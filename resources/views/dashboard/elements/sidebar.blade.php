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
                        <i class="fad fa-home"></i>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li class="{{ Request::is('dashboard/specializations*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);"
                    aria-expanded="{{ Request::is('dashboard/specializations*') ? 'true' : 'false' }}">
                    <div class="menu-icon">
                        <i class="fad fa-books fa-lg"></i>
                    </div>
                    <span class="nav-text">Specializations</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/specializations*') ? 'true' : 'false' }}"
                    class="{{ Request::is('dashboard/specializations*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.specializations.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.specializations.index') }}">View </a>
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'dashboard.specializations.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.specializations.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('dashboard/tags*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);"
                    aria-expanded="{{ Request::is('dashboard/tags*') ? 'true' : 'false' }}">
                    <div class="menu-icon">
                        <i class="fad fa-books fa-lg"></i>
                    </div>
                    <span class="nav-text">Tags</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/tags*') ? 'true' : 'false' }}"
                    class="{{ Request::is('dashboard/tags*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.tags.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.tags.index') }}">View </a>
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'dashboard.tags.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.tags.create') }}">Add new</a>
                    </li>
                </ul>
            </li>


            <li class="{{ Request::is('dashboard/service-categories*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);"
                    aria-expanded="{{ Request::is('dashboard/service-categories*') ? 'true' : 'false' }}">
                    <div class="menu-icon">
                        <i class="fad fa-books fa-lg"></i>
                    </div>
                    <span class="nav-text">Service categories</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/service-categories*') ? 'true' : 'false' }}"
                    class="{{ Request::is('dashboard/service-categories*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.service-categories.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.service-categories.index') }}">View</a>
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'dashboard.service-categories.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.service-categories.create') }}">Add new</a>
                    </li>
                </ul>
            </li>
            

            <li class="{{ Request::is('dashboard/product-categories*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);"
                    aria-expanded="{{ Request::is('dashboard/product-categories*') ? 'true' : 'false' }}">
                    <div class="menu-icon">
                        <i class="fad fa-books fa-lg"></i>
                    </div>
                    <span class="nav-text">Product Categories</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/product-categories*') ? 'true' : 'false' }}"
                    class="{{ Request::is('dashboard/product-categories*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.product-categories.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.product-categories.index') }}">View</a>
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'dashboard.product-categories.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.product-categories.create') }}">Add new</a>
                    </li>
                </ul>
            </li>


            <li class="{{ Request::is('dashboard/video-categories*') ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void(0);"
                    aria-expanded="{{ Request::is('dashboard/video-categories*') ? 'true' : 'false' }}">
                    <div class="menu-icon">
                        <i class="fad fa-books fa-lg"></i>
                    </div>
                    <span class="nav-text">video Categories</span>
                </a>
                <ul aria-expanded="{{ Request::is('dashboard/video-categories*') ? 'true' : 'false' }}"
                    class="{{ Request::is('dashboard/video-categories*') ? 'mm-show' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'dashboard.video-categories.index' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.video-categories.index') }}">View</a>
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'dashboard.video-categories.create' ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard.video-categories.create') }}">Add new</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
