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
                {{-- <li class="{{ ( request()->is('user/home') ? 'active' : '' ) }}"><a href="{{ route('user.home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الرئيسيه</span></a>
                </li> --}}

                <li class="{{ ( request()->is('user/orders') ? 'active' : '' ) }}">
                    <a href="{{ route('user.orders.index') }}"><i class="feather icon-shopping-cart"></i><span class="menu-item" data-i18n="Analytics">الطلبات</span></a>
                </li>

                <li class="{{ ( request()->is('user/report') ? 'active' : '' ) }}">
                    <a href="{{ route('user.report.index') }}"><i class="feather icon-pie-chart"></i><span class="menu-item" data-i18n="Analytics">الأحصائيات</span></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
