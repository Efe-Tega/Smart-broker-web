@extends('admin.admin_main')

@section('title')
    {{ __('Manage Deposit') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Manage Client Deposits') }}</h4>
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
                                <th>Client Name</th>
                                <th>Amount</th>
                                <th>Crypto Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($deposits as $key => $deposit)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $deposit->trans_id }}</td>
                                    <td>{{ $deposit->user->first_name }} {{ $deposit->user->last_name }}</td>
                                    <td>
                                        ${{ number_format($deposit->amount, 2) }}
                                    </td>
                                    <td>{{ $deposit->crypto_value }} <span
                                            class="text-uppercase">{{ $deposit->currency->short_name }}</span></td>
                                    <td>
                                        @if ($deposit->status === 'pending')
                                            <button class="btn btn-warning btn-sm">Pending</button>
                                        @elseif ($deposit->status === 'success')
                                            <button class="btn btn-success btn-sm">Successful</button>
                                        @else
                                            <button class="btn btn-danger btn-sm">Rejected</button>
                                        @endif
                                    </td>
                                    <td>{{ $deposit->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit-deposit', $deposit->id) }}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.delete-deposit', $deposit->id) }}" id="delete"
                                            title="delete" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach


                            {{-- <tr>
                                <td>2</td>
                                <td>TRX209230252</td>
                                <td>Jane Doe</td>
                                <td>
                                    $5000.00
                                </td>
                                <td>0.345496 BTC</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Successful</button>
                                </td>
                                <td>Thu, Jul 10, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
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
                                <td>
                                    <button class="btn btn-danger btn-sm">Rejected</button>
                                </td>
                                <td>Thu, Mar 13, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr> --}}

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
