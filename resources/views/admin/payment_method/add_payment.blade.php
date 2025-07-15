@extends('admin.admin_main')

@section('title')
    {{ __('Add Payment Method') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Add Payment Method') }}</h4>

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
                <form class="" action="{{ route('admin.save-payment') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Crypto Name</label>
                                <input type="text" class="form-control" id="" placeholder="Bitcoin"
                                    value="{{ old('crypto_name') }}" name="crypto_name" required>

                                @error('crypto_name')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Short Name</label>
                                <input type="text" class="form-control" id="" placeholder="BTC"
                                    value="{{ old('short_name') }}" name="short_name" required>

                                @error('short_name')
                                    <span class="mt-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Wallet Address </label>
                                <input type="text" class="form-control" id="" placeholder="" required
                                    name="wallet_address" value="{{ old('wallet_address') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Blockchain Network </label>
                                <input type="text" class="form-control" id="" placeholder="" required
                                    name="network_type" value="{{ old('network_type') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select name="status" id="" class="form-select">
                                    <option value="enabled">Enable</option>
                                    <option value="disabled">Disable</option>
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
