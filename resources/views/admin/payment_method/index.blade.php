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
                <a href="{{ route('admin.add-paymnet') }}" class="btn btn-primary">Add New</a>
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
                                <th>Crypto Name</th>
                                <th>Short Name</th>
                                <th>Network Type</th>
                                <th>Wallet Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($currencies as $currency)
                                <tr>
                                    <td>{{ $currency->name }}</td>
                                    <td>{{ $currency->short_name }}</td>
                                    <td>{{ $currency->network_type }}</td>
                                    <td title="{{ $currency->wallet_address }}">{!! Str::limit($currency->wallet_address, 30) !!}</td>
                                    <td>
                                        @if ($currency->status == 'enable')
                                            <button
                                                class="btn btn-success btn-sm btn-rounded">{{ $currency->status }}</button>
                                        @else
                                            <button
                                                class="btn btn-danger btn-sm btn-rounded">{{ $currency->status }}</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit.payment', $currency->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('admin.delete-payment', $currency->id) }}"
                                            class="btn btn-danger btn-sm" id="delete" title="delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
