    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        {{-- <div class="brand-logo"></div> --}}
                        <h2 class="brand-text mb-0">كلية طب الاسنان</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>

        @php
            $prefix = Request::route()->getPrefix();
            $route = Route::current()->getName();
        @endphp

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{ ( request()->is('home') ? 'active' : '' ) }}"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الرئيسيه</span></a>
                </li>

                <li class="{{ ( request()->is('orders') ? 'active' : '' ) }}">
                    <a href="{{ route('orders.index') }}"><i class="feather icon-shopping-cart"></i><span class="menu-item" data-i18n="Analytics">الطلبات</span></a>
                </li>

                <li class="{{ ( request()->is('users') ? 'active' : '' ) }}">
                    <a href="{{ route('users.index') }}"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Analytics">الاطباء</span></a>
                </li>

                <li class="{{ ( request()->is('banner') ? 'active' : '' ) }}">
                    <a href="{{ route('banner.show') }}"><i class="feather icon-link-2"></i><span class="menu-item" data-i18n="Analytics">الاعلانات</span></a>
                </li>

                <li class="{{ ( request()->is('patient') ? 'active' : '' ) }}">
                    <a href="{{ route('patient.index') }}"><i class="feather icon-user"></i><span class="menu-item" data-i18n="Analytics">المرضى</span></a>
                </li>

                <li class="{{ ( request()->is('service') ? 'active' : '' ) }}">
                    <a href="{{ route('service.show') }}"><i class="feather icon-settings"></i><span class="menu-item" data-i18n="Analytics">الخدمات</span></a>
                </li>

                <li class="{{ ( request()->is('status') ? 'active' : '' ) }}">
                    <a href="{{ route('status.index') }}"><i class="feather icon-tag"></i><span class="menu-item" data-i18n="Analytics">الحالات</span></a>
                </li>

                {{-- <li class="{{ ( request()->is('bloods') ? 'active' : '' ) }}">
                    <a href="{{ route('bloods.index') }}"><i class="feather icon-activity"></i><span class="menu-item" data-i18n="Analytics">فصائل الدم</span></a>
                </li> --}}

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
