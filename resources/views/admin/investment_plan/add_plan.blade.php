@extends('admin.admin_main')

@section('title')
    {{ __('Add Investment Plan') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Add Investment Plan') }}</h4>
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

                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Plan Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan name"
                                    required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Plan Price <span>($)</span> </label>
                                <input type="text" class="form-control" id="" placeholder="Enter Plan price"
                                    required="">
                                <span class="text-danger">This is the maximum amount a user can pay to invest in this
                                    plan</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Plan Minimum Price <span>($)</span>
                                </label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter Plan minimum price" required="">
                                <span class="text-danger">This is the minimum amount a user can pay to invest in this
                                    plan</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Plan Maximum Price <span>($)</span> </label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter Plan maximum price" required="">
                                <span class="text-danger">Same as plan price</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Minimum Return <span>($)</span>
                                </label>
                                <input type="text" class="form-control" id="" placeholder="Enter minimum return"
                                    required="">
                                <span class="text-danger">This is the minimum return (ROI) for this plan</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Maximum Return <span>($)</span> </label>
                                <input type="text" class="form-control" id="" placeholder="Enter Maximum return"
                                    required="">
                                <span class="text-danger">This is the maximum return (ROI) for this plan</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Gift Bonus <span>($)</span>
                                </label>
                                <input type="text" class="form-control" id="" placeholder="Enter minimum return"
                                    required="">
                                <span class="text-danger">Optional bonus if a user buys this plan</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Top up Interval </label>

                                <select class="form-select" id="" required="">
                                    <option selected="" disabled="" value="">Select...</option>
                                    <option>Montly</option>
                                    <option>Weekly</option>
                                    <option>Daily</option>
                                    <option>Hourly</option>
                                    <option>Every 30 Minutes</option>
                                </select>

                                <span class="text-danger">This specifies how often the system should add profit(ROI) to user
                                    account.</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Top up Type </label>

                                <select class="form-select" id="" required="">
                                    <option selected="" disabled="" value="">Select...</option>
                                    <option>Percentage</option>
                                    <option>Fixed</option>
                                </select>

                                <span class="text-danger">This specifies if the system should add profit in percentage(%)
                                    or a fixed amount.
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Top up Amount (in % or <span>($)</span> as
                                    specified above)
                                </label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter Top up amount" required="">
                                <span class="text-danger">This is the amount the system will add to users account as
                                    profit, based on what you selected in topup type and topup interval above.</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Investment Duration
                                </label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter Top up amount" required="">
                                <span class="text-danger">This </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Add Plan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
@endsection
