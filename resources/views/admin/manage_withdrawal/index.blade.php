@extends('admin.admin_main')

@section('title')
    {{ __('Manage Withdrawals') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Manage Client Withdrawals') }}</h4>
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
                                <th>Client Name</th>
                                <th>Amount Requested</th>
                                <th>Amount + charge</th>
                                <th>Payment Method</th>
                                <th>Receivers Email</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>
                                    <span>$</span>
                                    0.00
                                </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>61</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Active</button>
                                </td>
                                <td>Thu, Nov 14, 2024</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">View</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Tiger Nixon</td>
                                <td>
                                    <span>$</span>
                                    0.00
                                </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>61</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Blocked</button>
                                </td>
                                <td>Thu, Nov 14, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Tiger Nixon</td>
                                <td>
                                    <span>$</span>
                                    0.00
                                </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>61</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Active</button>
                                </td>
                                <td>Thu, Nov 14, 2024</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
