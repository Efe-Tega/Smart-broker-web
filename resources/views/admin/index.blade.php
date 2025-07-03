@extends('admin.admin_main')

@section('title')
    {{ __('Admin Dashboard') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>

                <div class="page-title-right">
                    <button class="btn btn-success">Deposits</button>
                    <button class="btn btn-danger">Withdrawals</button>
                    <a href="{{ route('admin.manage.user') }}" class="btn btn-info">Users</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Total Deposit
                            </p>
                            <h4 class="mb-2 font-size-15 text-secondary"><span>$ </span>1452</h4>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3 ">
                                <i class="ri-download-2-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Pending Deposit(s)
                            </p>
                            <h4 class="mb-2 font-size-15 text-secondary"><span>$ </span>0.00</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-success rounded-3">
                                <i class="ri-share-forward-fill flip-left font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Withdrawal</p>
                            <h4 class="mb-2 font-size-15 text-secondary"><span>$ </span>0.00</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-info rounded-3">
                                <i class="ri-share-forward-2-fill font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Pending Withdrawal
                            </p>
                            <h4 class="mb-2 font-size-15 text-secondary"><span>$ </span>0.00</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-danger rounded-3">
                                <i class="ri-logout-box-r-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    {{-- User Management --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Total Users
                            </p>
                            <h4 class="mb-2">1452</h4>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-dark text-light rounded-3">
                                <i class="ri-group-line font-size-24"></i>

                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Blocked Users
                            </p>
                            <h4 class="mb-2">938</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-success rounded-3">
                                <i class="ri-user-unfollow-fill font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Active Users</p>
                            <h4 class="mb-2">8246</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-star-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">
                                Investment Plans
                            </p>
                            <h4 class="mb-2">29670</h4>

                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-success rounded-3">
                                <i class="ri-stock-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow"
                target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
            {
                "width": "100%",
                "height": 550,
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "light",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
@endsection
