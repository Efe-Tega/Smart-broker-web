@extends('admin.admin_main')

@section('title', 'Update Deposit Transaction')

@section('admin-content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Manage Deposit') }}</h4>
                <button onclick="window.history.back()" class="btn btn-primary">Back</button>
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
                        <div><strong>TRX23925r82</strong></div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Client Name:</div>
                        <div>Alex Smith Efeakpor</div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Amount:</div>
                        <div>$5,000.00</div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Crypto Value:</div>
                        <div>0.0032934 BTC</div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="card-text text-capitalize">Date created:</div>
                        <div>10 July 2025</div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="card-text text-capitalize">Status:</div>
                        <div>
                            <Select class="form-select text-capitalize">
                                <option value="">pending</option>
                                <option value="">completed</option>
                                <option value="">rejected</option>
                            </Select>
                        </div>

                    </div>

                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-primary mt-3 mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="mb-5">
                <h5 class="font-size-14">Transaction Image</h5>
                <a class="image-popup-vertical-fit" href="{{ asset('admin/assets/images/img-3.png') }}" title="">
                    <img class="img-fluid" alt="img-2" src="{{ asset('admin/assets/images/img-3.png') }}" width="">
                </a>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
