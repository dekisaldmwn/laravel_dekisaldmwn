@extends('layouts.app',['title' => 'Edit Data Rumah Sakit'])
@section('content')
<div class="card">
    <h5 class="card-header">Edit Data Rumah Sakit {{ $rumahsakit->nama }}</h5>
    <div class="card-body">
        <form action="/rumahsakit/{{ $rumahsakit->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="nama">Nama Rumah Sakit</label>
                <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') ?? $rumahsakit->nama }}">
                <span class="text-danger">{{ $errors->first('nama') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="alamat">Alamat Rumah Sakit</label>
                <input id="alamat" class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" value="{{ old('alamat') ?? $rumahsakit->alamat }}">
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="email">Email Rumah Sakit</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') ?? $rumahsakit->email }}">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="telepon">Telepon Rumah Sakit</label>
                <input id="telepon" class="form-control @error('telepon') is-invalid @enderror" type="text" name="telepon" value="{{ old('telepon') ?? $rumahsakit->telepon }}">
                <span class="text-danger">{{ $errors->first('telepon') }}</span>
            </div> 
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
@endsection