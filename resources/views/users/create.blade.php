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
                            <h3 class="mb-4">Tambah User Baru</h3>
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                        {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Email:</label>
                            {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Password:</label>
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Konfirmasi Password:</label>
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Role:</label>
                            {!! Form::select('roles[]', $roles, [], array('class' => 'form-control', 'multiple')) !!}
                        </div>
                        <div class="btn btn-primary">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@endsection
