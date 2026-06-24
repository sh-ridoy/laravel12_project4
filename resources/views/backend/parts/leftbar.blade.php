<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Roksyn</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-symbols-outlined">close</span>
        </div>
    </div>

    <div class="sidebar-nav" data-simplebar="true">

        <!-- navigation -->
        <ul class="metismenu" id="menu">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="parent-icon">
                        <span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <!-- Ecommerce -->
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="menu-title">eCommerce</div>
                </a>

                <ul>
                    <li>
                        <a href="{{ route('product.create') }}">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Add Product
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('product.index') }}">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Products
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categeory.create') }}">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Add Category
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categeory.index') }}">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Categories
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Customers
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <span class="material-symbols-outlined">arrow_right</span>
                            Orders
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- end navigation -->

    </div>

    <div class="sidebar-bottom dropdown dropup-center dropup">
        <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100"
            data-bs-toggle="dropdown">

            <div class="user-img">
                <img src="{{ asset('assets/images/avatars/01.png') }}" alt="">
            </div>

            <div class="user-info">
                <h5 class="mb-0 user-name">Jhon Maxwell</h5>
                <p class="mb-0 user-designation">UI Engineer</p>
            </div>
        </div>

        <ul class="dropdown-menu dropdown-menu-end">

            <li>
                <a class="dropdown-item" href="javascript:;">
                    <span class="material-symbols-outlined me-2">account_circle</span>
                    <span>Profile</span>
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="javascript:;">
                    <span class="material-symbols-outlined me-2">tune</span>
                    <span>Settings</span>
                </a>
            </li>

            <li>
                <div class="dropdown-divider mb-0"></div>
            </li>

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <span class="material-symbols-outlined me-2">logout</span>
                        <span>Logout</span>
                    </button>
                </form>
            </li>

        </ul>
    </div>
</aside>