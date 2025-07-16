@extends('admin.admin_main')

@section('title')
    {{ __('Manage User') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('SmartBroker User List') }}</h4>
                <a href="{{ route('admin.add.plan') }}" class="btn btn-primary">Add User</a>
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{-- User Table List --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <x-admin.table :columns="['S/N', 'Account Balance', 'Email', 'Phone', 'Status', 'Date Registered', 'Action']">
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    {{-- <span>{{ $user->currency }}</span> --}}
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
                        @endforeach
                    </x-admin.table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
