@extends('admin.admin_main')

@section('name')
    {{ __('App Settings') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('App Settings') }}</h4>
                <button class="btn btn-primary py-1" onclick="window.history.back()">
                    <span class="d-flex align-items-center"> <i class="ri-rewind-mini-fill font-size-20"></i>
                        <span style="margin-left: 5px">Back</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h1 class="card-title">SMTP Configuration</h1>

                <form class="">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email From</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email From Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">SMTP Host</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">SMTP Port</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">SMTP Encryption</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">SMTP Username</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">SMTP Password</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>


                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h1 class="card-title">Preferences</h1>

                <form class="">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Website Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">
                            </div>
                        </div>

                        @php
                            $currencies = \App\Models\Currency::all();
                        @endphp

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Website Currency <span>($)</span> </label>
                                <select name="" id="" class="form-select">
                                    <option value="">$</option>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->id }}">{{ $currency->code }} ({{ $currency->symbol }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Contact Email</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Website Logo</label>
                                <input type="file" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Live Chat Widget Code </label>
                                <textarea class="form-control" name="" id="" rows="5" placeholder="Smartsupp code"></textarea>
                            </div>
                        </div>


                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
@endsection
