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
                                <label for="" class="form-label">Select Crypto</label>
                                <select name="crypto_name" id="" class="form-select" required>
                                    <option value="">--choose--</option>
                                    <option value="Bitcoin">Bitcoin</option>
                                    <option value="Ethereum">Ethereum</option>
                                    <option value="Tether">Tether</option>
                                    <option value="Binance Coin">Binance Coin</option>
                                    <option value="Solana">Solana</option>
                                    <option value="Ripple">Ripple</option>
                                    <option value="Cardano">Cardano</option>
                                    <option value="Dogecoin">Dogecoin</option>
                                    <option value="Polkadot">Polkadot</option>
                                    <option value="Tron">Tron</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Symbol</label>
                                <select name="short_name" id="" class="form-select" required>
                                    <option value="">--choose--</option>
                                    <option value="btc">BTC</option>
                                    <option value="eth">ETH</option>
                                    <option value="usdt">USDT</option>
                                    <option value="bnb">BNB</option>
                                    <option value="sol">SOL</option>
                                    <option value="xrp">XRP</option>
                                    <option value="ada">ADA</option>
                                    <option value="doge">DOGE</option>
                                    <option value="dot">DOT</option>
                                    <option value="trx">TRX</option>
                                </select>
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
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
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
