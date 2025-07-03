@extends('admin.admin_main')

@section('title')
    {{ __('Update Profile') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('User Name Display') }}</h4>

                <div class="d-flex">
                    <button class="btn btn-primary py-1" onclick="window.history.back()">
                        <span class="d-flex align-items-center"> <i class="ri-rewind-mini-fill font-size-20"></i>
                            <span style="margin-left: 5px">Back</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{-- Profile Info --}}
    <div class="row">

        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">

                    <div class="mt-4 mt-md-0 text-center">
                        <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200"
                            src=" {{ asset('admin/upload/profile_pic/blank_profile_pic.png') }}"
                            data-holder-rendered="true">
                        <h3 class="mt-3">{{ $user->name }}</h3>
                        <h5>{{ $user->email }}</h5>
                        <h6>{{ $user->phone }}</h6>
                    </div>

                    <hr>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Account Balance:</div>
                            <div><span>{{ $user->currency }} </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Profit:</div>
                            <div><span>{{ $user->currency }} </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Referral Bonus:</div>
                            <div><span>{{ $user->currency }} </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Bonus:</div>
                            <div><span>{{ $user->currency }} </span> 20</div>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <div class="card-text text-capitalize">User Account Status:</div>

                            <div class="square-switch">
                                <input type="checkbox" id="square-switch1" switch="none" checked />
                                <label for="square-switch1" data-on-label="Active" data-off-label="Blocked"></label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="card-text text-capitalize">Withdrawal:</div>

                            <div class="square-switch">
                                <input type="checkbox" id="withdraw-status" switch="none" checked />
                                <label for="withdraw-status" data-on-label="Enable" data-off-label="Disable"></label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Investment Plans:</div>
                            <div>No Investment Plan</div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Manage Account</h4>

                        <div class="button-items">
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target=".credit-debit-modal">Credit/Debit User</button>

                            <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="">Reset Password</button>

                            <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="">Login as User</button>

                            <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target=".trading-history-modal">Add Trading History</button>

                            <button type="button" class="btn btn-danger">Delete User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Update Bio Data</h4>
                    <span class="text-danger">All fields are required</span>


                    <form method="POST" action="{{ route('admin.update.user') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Profile Pics</label>
                            <input type="file" name="profile_pic" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}"
                                placeholder="Username" />

                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" value=""
                                placeholder="Full Name" />

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value=""
                                placeholder="Email Address" />

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="phone" value=""
                                placeholder="Enter Mobile Number" />

                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value=""
                                placeholder="Date of Birth" />

                            @error('dob')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Nationality</label>
                            <input type="text" class="form-control" name="nationality" value=""
                                placeholder="Nationality" disabled />

                            @error('nationality')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Date Registered</label>
                            <input type="text" class="form-control" name="created_at" value=""
                                placeholder="Registration Date" />

                            @error('created_at')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    {{-- Credit/Debit User Model --}}
    <div class="modal fade credit-debit-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Credit/Debit User Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="subject">Subject</label>
                                <textarea class="form-control" id="subject" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Trading history modal --}}
    <div class="modal fade trading-history-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Trading History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="subject">Subject</label>
                                <textarea class="form-control" id="subject" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
