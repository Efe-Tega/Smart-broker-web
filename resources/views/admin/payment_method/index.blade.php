@extends('admin.admin_main')

@section('title')
    {{ __('Payment Settings') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Payment Settings') }}</h4>
                <a href="{{ route('admin.add.plan') }}" class="btn btn-primary">Add New</a>
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
                                <th>Method Name</th>
                                <th>Type</th>
                                <th>Used for</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Bitcoin</td>
                                <td>crypto</td>
                                <td>Both</td>
                                <td>
                                    <button class="btn btn-success btn-sm btn-rounded">enabled</button>
                                </td>
                                <td>
                                    <a href="{{ route('admin.edit.payment') }}" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Ethereum</td>
                                <td>crypto</td>
                                <td>Both</td>
                                <td>
                                    <button class="btn btn-danger btn-sm btn-rounded">disabled</button>
                                </td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Litecoin</td>
                                <td>crypto</td>
                                <td>Both</td>
                                <td>
                                    <button class="btn btn-success btn-sm btn-rounded">enabled</button>
                                </td>
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
