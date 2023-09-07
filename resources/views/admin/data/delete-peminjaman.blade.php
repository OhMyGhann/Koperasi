@extends('partials.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="fa fa-user-alt me-2"></h4>
            <h6 class="mb-0">Hapus Data Peminjam</h6>
            <a href="{{ route('data-peminjaman') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <p>Anda yakin ingin menghapus data peminjam {{ $nasabah->nama }}?</p>
        <form action="{{ route('destroy-peminjam', ['id' => $nasabah->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus Data</button>
        </form>
    </div>
</div>
@endsection
