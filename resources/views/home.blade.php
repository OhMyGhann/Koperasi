@extends('partials.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user fa-3x text-primary"></i>
                <div class="ms-3">
                    <h6 class="mb-2">User</h6>
                    <h6 class="mb-0">{{ $usersCount }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Produk</h6>
                    <h6 class="mb-0">{{ $productsCount }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-dollar-sign fa-3x text-primary"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Data Peminjam</h6>
                    <h6 class="mb-0">{{ $nasabahCount }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa fa-tasks fa-3x text-primary"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Role</h6>
                    <h6 class="mb-0">{{ $rolesCount }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->

<!-- Sales Chart End -->


<!-- Recent Sales Start -->

<!-- Recent Sales End -->


<!-- Widgets Start -->

@endsection