@extends('template.header')

@section('content')
<div class="card">
  <h1 class="h3 mb-2 text-gray-800">{{ isset($kategori) ? 'Edit' : 'Tambah' }} Kategori</h1>
  <form method="post" action="{{ isset($kategori) ? url('/kategori/'.$kategori->id_kategori) : url('/kategori/add') }}">
    @csrf
    @if (isset($kategori))
    @method('put')
    @endif
    <div class="card-body">

   
      <div class="mb-3">
        <label for="id_kategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" name="nama_kategori" />
        <div  class="form-text">Nama kategori</div>
      </div>

  
      <div class="mb-3">
        <label for="exampleSelectTipe" class="form-label">Tipe</label>
        <select class="form-select" id="exampleSelectTipe" name="tipe">
          <option value="">-- Pilih Tipe --</option>
          <option value="uangBesar" {{ old('tipe', $kategori->tipe ?? '') == 'uangBesar' ? 'selected' : '' }}>uangBesar</option>
          <option value="uangKecil" {{ old('tipe', $kategori->tipe ?? '') == 'uangKecil' ? 'selected' : '' }}>uangKecil</option>
        </select>
      </div>

     
    <div class="card-footer text-end">
      <a href="{{ url('/') }}" class="btn btn-secondary">Batal</a>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>
@endsection
