<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt=""
                    class="avatar-md rounded-circle" />
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Julia Hudda</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.invest.plan') }}" class="waves-effect">
                        <i class="fas fa-cubes"></i>
                        <span>Investment Plans</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.manage.user') }}" class="waves-effect">
                        <i class="ri-account-circle-fill"></i>
                        <span>Manage Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.manage.deposit') }}" class="waves-effect">
                        <i class="ri-bank-card-2-line"></i>
                        <span>Manage Deposit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.manage.withdrawal') }}" class="waves-effect">
                        <i class="far fa-credit-card"></i>
                        <span>Manage Withdrawal</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.manage.kyc') }}" class="waves-effect">
                        <i class="far fa-id-card"></i>
                        <span>Manage Kyc Requests</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-2-line"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.app.settings') }}">App Settings</a></li>
                        <li><a href="{{ route('admin.payment.method') }}">Payment Settings</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
