@extends('layouts.app',['title' => 'Tambah Data Pasien'])
@section('content')
<div class="card">
    <h5 class="card-header">Tambah Data Pasien</h5>
    <div class="card-body">
        <form action="/pasien" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="rumahsakit_id">Nama Rumah Sakit</label>
                <select name="rumahsakit_id" class="form-control">
                    <option value="">-- Pilih Rumah Sakit --</option>
                    @foreach ($listRumahsakit as $item)
                        <option value="{{ $item->id }}" @selected(old('rumahsakit_id') == $item->id)>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
                <input type="hidden" id="rumahsakit_id" >
                <span class="text-danger">{{ $errors->first('rumahsakit_id') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="nama">Nama Pasien</label>
                <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') }}">
                <span class="text-danger">{{ $errors->first('nama') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="alamat">Alamat Pasien</label>
                <input id="alamat" class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" value="{{ old('alamat') }}">
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
            </div> 
            <div class="form-group mb-3">
                <label for="telepon">Telepon Pasien</label>
                <input id="telepon" class="form-control @error('telepon') is-invalid @enderror" type="text" name="telepon" value="{{ old('telepon') }}">
                <span class="text-danger">{{ $errors->first('telepon') }}</span>
            </div> 
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
</div>
@endsection