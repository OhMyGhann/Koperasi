@extends('partials.app')

@section('content')

<div class="container-fluid position-relative d-flex p-0">
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="bg-secondary rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-4">Tambah Produk</h3>
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                    
                    
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Detail:</strong>
                                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 ">
                                    <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@endsection
