<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.product.list') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.order.list') }}" aria-expanded="false">
                        <i class="mdi mdi-view-list"></i>
                        <span class="hide-menu">Order</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.category.list') }}" aria-expanded="false">
                        <i class="mdi mdi-view-list"></i>
                        <span class="hide-menu">Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.product.list') }}" aria-expanded="false">
                        <i class="mdi mdi-cellphone"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.user.list') }}" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="text-center p-40 upgrade-btn">
                    <a href="{{ route('client.home', []) }}" class="btn d-block w-100 btn-secondrary text-black">Home Page <i class="mdi mdi-link-variant"></i></a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
