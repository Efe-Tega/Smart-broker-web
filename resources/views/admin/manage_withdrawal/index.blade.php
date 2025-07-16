@extends('admin.admin_main')

@section('title')
    {{ __('Manage Withdrawals') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Manage Withdraw Requests') }}</h4>
                {{-- <a href="{{ route('admin.add.plan') }}" class="btn btn-primary">Add User</a> --}}
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{-- User Table List --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Transaction ID</th>
                                <th>Client name</th>
                                <th>Amount</th>
                                <th>Crypto amount</th>
                                <th>Wallet address</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TRX2095rj252</td>
                                <td>John Doe</td>
                                <td>
                                    $5000.00
                                </td>
                                <td>0.345496 BTC</td>
                                <td>{{ Str::limit('1xaoigansgaoieawje8itq239rhfnasdk', 15) }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Pending</button>
                                </td>
                                <td>Thu, Nov 14, 2024</td>
                                <td>
                                    <a href="" id="accept" class="btn btn-info btn-sm">Accept</a>
                                    <a href="" id="reject" class="btn btn-danger btn-sm">Reject</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>TRX209230252</td>
                                <td>Jane Doe</td>
                                <td>
                                    $5000.00
                                </td>
                                <td>0.345496 BTC</td>
                                <td>{{ Str::limit('1xaoigansgaoieawje8itq239rhfnasdk', 15) }}</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Successful</button>
                                </td>
                                <td>Thu, Jul 10, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">Accept</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>TRX20952323f52</td>
                                <td>Alex Smith</td>
                                <td>
                                    $6,000.00
                                </td>
                                <td>0.3423296 ETH</td>
                                <td title="1xaoigansgaoieawje8itq239rhfnasdk">
                                    {{ Str::limit('1xaoigansgaoieawje8itq239rhfnasdk', 15) }}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Declined</button>
                                </td>
                                <td>Thu, Mar 13, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">Accept</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
