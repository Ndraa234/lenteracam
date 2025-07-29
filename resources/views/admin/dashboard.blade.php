@extends('layouts.admin')

@section('title', 'Dashboard Admin - LENTERACAM')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 style="color: #2d4e7c; font-weight: bold;">Welcome, {{ Auth::guard('admin')->user()->nama }}!</h2>
            <p class="text-muted mb-0">Here's an overview of your camera rental system</p>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fa-solid fa-users text-primary" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-1">Total Users</h6>
                            <h4 class="mb-0" style="color: #2d4e7c;">{{ App\Models\User::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fa-solid fa-th-large text-success" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-1">Total Products</h6>
                            <h4 class="mb-0" style="color: #2d4e7c;">{{ App\Models\Barang::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="fa-solid fa-shopping-cart text-warning" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-1">Available Stock</h6>
                            <h4 class="mb-0" style="color: #2d4e7c;">{{ App\Models\Barang::sum('stok') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="fa-solid fa-comment text-info" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-1">Admin Users</h6>
                            <h4 class="mb-0" style="color: #2d4e7c;">{{ App\Models\Admin::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Users Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h5 class="mb-0" style="color: #2d4e7c;">Recent Users</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="fw-bold"></div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 