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
                        <form action="{{ route('simpan-peminjam')}}" method="post">
                            {{csrf_field() }}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama"  class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" id="telephone" name="telephone" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="noreg" class="form-label">No Registratsi</label>
                                <input type="text" id="noreg" name="noreg" class="form-control" value="{{ $nextNoreg }}" readonly>
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