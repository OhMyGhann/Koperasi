<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user me-2"></i>Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            @auth
                <div class="ms-3">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    @foreach (Auth::user()->roles as $role)
                        <span>{{ $role->name }}</span>
                    @endforeach
                </div>
            @endauth
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route ('home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('data-peminjam')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Data Nasabah</a>
            <a href="{{ route('peminjaman-nasabah') }}" class="nav-item nav-link"><i class="fa fa-database me-2"></i>Data Peminjam</a>
            <a href="{{ route('products.index') }}" class="nav-item nav-link"><i class="fas fa-shopping-cart me-2"></i>Produk</a>
            <a href="{{ route('roles.index') }}" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Role</a>
            <a href="{{ route('users.index')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Users</a>
        </div>
    </nav>
</div>