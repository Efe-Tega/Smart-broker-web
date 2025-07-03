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
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
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
                                <td>
                                    <button class="btn btn-success btn-sm">Active</button>
                                </td>
                                <td>Thu, Nov 14, 2024</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target=".payment-proof-modal">View</a>
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

    {{-- Proof of payment modal --}}
    <div class="modal fade payment-proof-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Proof of payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="assets/images/product/img-1.png" alt="proof of payment">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
