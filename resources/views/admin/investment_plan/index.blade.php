@extends('admin.admin_main')

@section('title')
    {{ __('Investment Plan') }}
@endsection

@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Investment Plans') }}</h4>
                <a href="{{ route('admin.add.plan') }}" class="btn btn-primary">Add New Plan</a>
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{-- Plans --}}
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="font-size-18 mb-5">Starter</h2>

                    <h1 class="text-center"><span class="font-size-24">$ </span> 20</h1>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Gift Bonus:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-5">
                            <div class="card-text text-capitalize">Duration:</div>
                            <div>4 hours</div>
                        </div>

                    </div>

                    <div class="text-center">
                        <a href="{{ route('admin.edit.plan') }}" class="btn btn-info waves-effect waves-light">Edit</a>
                        <a href="#" class="btn btn-danger btn-md waves-effect waves-light">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="font-size-18 mb-5">Starter</h2>

                    <h1 class="text-center"><span class="font-size-24">$ </span> 20</h1>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Gift Bonus:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-5">
                            <div class="card-text text-capitalize">Duration:</div>
                            <div>4 hours</div>
                        </div>

                    </div>

                    <div class="text-center">
                        <a href="{{ route('admin.edit.plan') }}" class="btn btn-info waves-effect waves-light">Edit</a>
                        <a href="#" class="btn btn-danger btn-md waves-effect waves-light">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="font-size-18 mb-5">Starter</h2>

                    <h1 class="text-center"><span class="font-size-24">$ </span> 20</h1>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Gift Bonus:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-5">
                            <div class="card-text text-capitalize">Duration:</div>
                            <div>4 hours</div>
                        </div>

                    </div>

                    <div class="text-center">
                        <a href="#" class="btn btn-info waves-effect waves-light">Edit</a>
                        <a href="#" class="btn btn-danger btn-md waves-effect waves-light">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="font-size-18 mb-5">Starter</h2>

                    <h1 class="text-center"><span class="font-size-24">$ </span> 20</h1>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum possible deposit:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Minimum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Maximum return:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="card-text text-capitalize">Gift Bonus:</div>
                            <div><span>$ </span> 20</div>
                        </div>

                        <div class="d-flex justify-content-between mb-5">
                            <div class="card-text text-capitalize">Duration:</div>
                            <div>4 hours</div>
                        </div>

                    </div>

                    <div class="text-center">
                        <a href="#" class="btn btn-info waves-effect waves-light">Edit</a>
                        <a href="#" class="btn btn-danger btn-md waves-effect waves-light">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
