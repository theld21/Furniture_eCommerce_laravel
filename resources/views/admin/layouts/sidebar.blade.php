<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('client.home') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.user.list') }}" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">User</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.product.list') }}" aria-expanded="false">
                        <i class="mdi mdi-cellphone"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="text-center p-40 upgrade-btn">
                    {{-- <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" class="btn d-block w-100 btn-secondrary text-black" target="_blank">Logout <i class="mdi mdi-logout"></i></a> --}}
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
