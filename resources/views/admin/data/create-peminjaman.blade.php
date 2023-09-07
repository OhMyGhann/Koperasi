@extends('partials.app')

@section('content')



<!-- Recent Sales Start -->
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    
    <!-- Spinner End -->


    


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <!-- Navbar End -->


        <!-- Form Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h3 class="mb-4">Create Data Peminjam</h3>
                        <form action="{{ route('simpan-peminjaman')}}" method="post">
                            {{csrf_field() }}
                            <div class="mb-3">
                                <label for="idpeminjam" class="form-label">Nama Peminjam</label>
                                <select id="idpeminjam" name="idpeminjam" class="form-select">
                                    <option value="" selected disabled>Pilih Nama Peminjam</option>
                                    @foreach ($nasabahs as $nasabah)
                                        <option value="{{ $nasabah->id }}">{{ $nasabah->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input type="number" step="0.01" class="form-control" id="nominal" name="nominal" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="4"></textarea>
                            </div>
                            
                            <br>
                            
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </form>
                    </div>
                </div>      
          </div>
        </div>
        <!-- Form End -->


        <!-- Footer Start -->
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!-- Recent Sales End -->


<!-- Widgets Start -->

@endsection