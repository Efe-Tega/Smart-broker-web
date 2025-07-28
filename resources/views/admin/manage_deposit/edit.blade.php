@extends('admin.admin_main')

@section('title', 'Update Deposit Transaction')

@section('admin-content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Manage Deposit') }}</h4>

                <button class="btn btn-primary py-1" onclick="window.history.back()">
                    <span class="d-flex align-items-center"> <i class="ri-rewind-mini-fill font-size-20"></i>
                        <span style="margin-left: 5px">Back</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card border border-primary">
                <div class="card-header bg-transparent border-primary">
                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Update Deposit</h5>
                </div>
                <hr>
                <div class="px-4 my-2">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize"><strong>Transaction ID:</strong></div>
                        <div><strong>{{ $deposit->trans_id }}</strong></div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Client Name:</div>
                        <div>{{ $deposit->first_name }} {{ $deposit->first_name }}</div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Amount:</div>
                        <div>${{ number_format($deposit->amount, 2) }}</div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Crypto Value:</div>
                        <div>{{ $deposit->crypto_value }} <span class="text-uppercase">{{ $deposit->short_name }}</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Date created:</div>
                        <div>{{ $deposit->created_at->format('M d, Y') }}</div>
                    </div>

                    <form action="{{ route('admin.update.deposit-status') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $deposit->id }}">

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="card-text text-capitalize">Status:</div>
                            <div>
                                <Select class="form-select text-capitalize" name="status">
                                    <option value="pending" {{ $deposit->status === 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="success" {{ $deposit->status === 'success' ? 'selected' : '' }}>
                                        Successful
                                    </option>
                                    <option value="failed" {{ $deposit->status === 'failed' ? 'selected' : '' }}>rejected
                                    </option>
                                </Select>
                            </div>

                        </div>

                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-primary mt-3 mb-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="mb-5">
                <h5 class="font-size-14">Transaction Image</h5>
                <a class="image-popup-vertical-fit" href="{{ asset('storage/' . $deposit->transaction_image) }}"
                    title="">
                    <img class="img-fluid" alt="img-2" src="{{ asset('storage/' . $deposit->transaction_image) }}"
                        width="">
                </a>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
