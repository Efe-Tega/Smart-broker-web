@extends('admin.admin_main')

@section('title')
    {{ __('Edit Payment Method') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Update Payment Method') }}</h4>

                <button onclick="window.history.back()" class="btn btn-primary py-1">
                    <span class="d-flex align-items-center">
                        <i class="ri-rewind-mini-fill font-size-20"></i>
                        <span style="margin-left: 5px">Back</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-xl-12">
        <div class="card border-top border-primary">
            <div class="card-body">
                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" placeholder="Bitcoin"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Minimum Amount </label>
                                <input type="text" class="form-control" id="" placeholder="" required="">
                                {{-- <span class="text-secondary">This is the amount the system will add to users account as
                                    profit, based on what you selected in topup type and topup interval above.</span> --}}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Maximum Amount </label>
                                <input type="text" class="form-control" id="" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Charges </label>
                                <input type="text" class="form-control" id="" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Charges Type </label>
                                <select name="" id="" class="form-select">
                                    <option value="">0</option>
                                    <option value="">Fixed($)</option>
                                    <option value="">Percentage(%)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Type </label>
                                <select name="" id="" class="form-select">
                                    <option value="">Crypto</option>
                                    <option value="">Currency</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Image Url </label>
                                <input type="text" class="form-control" id="" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Wallet Address </label>
                                <input type="text" class="form-control" id="" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">QR Code </label>
                                <input type="file" class="form-control" id="" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Wallet Address Network Type </label>
                                <input type="text" class="form-control" id="" placeholder=""
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Enable</option>
                                    <option value="">Disable</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Type for</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Withdrawal</option>
                                    <option value="">Deposit</option>
                                    <option value="">Both</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
@endsection
