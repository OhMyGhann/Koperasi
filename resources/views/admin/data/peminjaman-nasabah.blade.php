@extends('partials.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" name="search" placeholder="Search" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
            <h5 class="mb-0">Data peminjam</h5>
            <a href="{{ route('create-peminjaman')}}" class="btn btn-primary">Tambah Data<i class="fas fa-plus-square"></i></a>
        </div>
        <!-- Tambahkan di bawah bagian tabel -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6>Total Uang Peminjaman: Rp. {{ number_format($totalNominal, 3, ',', '.') }}</h6>
        </div>
        

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th>No</th>
                        {{-- <th>Nomer Registrasi</th> --}}
                        <th>Nama Peminjam</th>
                        <th>Nominal</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Keterangan</th>
                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamans as $i => $peminjaman)
                    <tr>
                        <td>{{ ++$i }}</td>
                        {{-- <td>{{ $peminjaman->noreg }}</td> --}}
                        <td>{{ $peminjaman->peminjam->nama  }}</td>
                        <td>Rp. {{ number_format($peminjaman->nominal, 3, ',', '.') }}</td>
                        <td>{{ $peminjaman->created_at->toDateString() }}</td>
                        <td>{{ $peminjaman->tglpengembalian }}</td>
                        <td>{{ $peminjaman->keterangan }}</td>
                    </tr>
                    @endforeach    
                </tbody>
            </table>
        </div>
        <br>
        <div class="btn-toolbar" role="toolbar">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>
                    <button type="button" class="btn btn-primary">3</button>
                    <button type="button" class="btn btn-primary">4</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">5</button>
                    <button type="button" class="btn btn-secondary">6</button>
                    <button type="button" class="btn btn-secondary">7</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-info">8</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: "Apakah Kamu yakin?",
            text: "Data yang dihapus tidak dapat dikembalikan lagi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>

@endsection
