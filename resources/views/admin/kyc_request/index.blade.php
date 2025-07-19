@extends('admin.admin_main')

@section('title')
    {{ __('Manage KYC request') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('KYC Requests') }}</h4>
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

                    <x-admin.table :columns="['S/N', 'Client Name', 'Identity Card', 'Selfie', 'Status', 'Submission Date', 'Action']">
                        {{-- @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <span>{{ $user->currency }}</span>
                                    $5,000.00
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Active</button>
                                </td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('admin.user.details', $user->id) }}"
                                        class="btn btn-info btn-sm">Manage</a>
                                </td>
                            </tr>
                        @endforeach --}}

                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td><a href="" class="text-primary">view file</a></td>
                            <td><a href="">view file</a></td>
                            <td>
                                <button class="btn btn-outline-warning btn-sm">Pending</button>
                            </td>
                            <td>Jul 10, 2025</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Accept</a>
                                <a href="" class="btn btn-danger btn-sm">Reject</a>
                            </td>
                        </tr>

                    </x-admin.table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
