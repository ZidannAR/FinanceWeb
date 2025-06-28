@extends('template.header')

@section('content')
<div class="card">
  <h1 class="h3 mb-2 text-gray-800">{{ isset($kategori) ? 'Edit' : 'Tambah' }} Kategori</h1>
  <form>
    <div class="card-body">

   
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control"  />
        <div id="emailHelp" class="form-text">Nama kategori</div>
      </div>

  
      <div class="mb-3">
        <label for="exampleSelectTipe" class="form-label">Tipe</label>
        <select class="form-select" id="exampleSelectTipe" name="id_kategori">
          <option value="">-- Pilih Tipe --</option>
          <option value="" {{ old('tipe', $kategori->tipe ?? '') == 'uangBesar' ? 'selected' : '' }}>uangBesar</option>
          <option value="" {{ old('tipe', $kategori->tipe ?? '') == 'uangKecil' ? 'selected' : '' }}>uangKecil</option>
        </select>
      </div>

     
    <div class="card-footer text-end">
      <a href="{{ url('kategori.index') }}" class="btn btn-secondary">Batal</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>
@endsection
