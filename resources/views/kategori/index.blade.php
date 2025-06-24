@extends('template.header')

@section('content')

<div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
`                   <a href="{{ url('kategori/add') }}" class="btn btn-primary btn-icon-split" style="text-decoration: none;">
    <span class="icon text-white-50">
        <i class="fa fa-plus"></i>
    </span>
    <span class="text">Kategori</span>
</a>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>nama</th>
                          <th>tipe</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($kategori as $pace)
                        <tr class="align-middle">
                          <td>{{ !empty($i)? ++$i: $i=1 }}</td>
                          <td>{{ $pace -> nama_kategori }}</td>
                          <td>{{ $pace -> tipe }}</td>
                          <td>
                            <form action="{{ url('/'.$pace->id.'/delete') }}" method="POST" style="display:inline">
                              <a href="{{ url('/'.$pace->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger btn-delete">Hapus</button>
                            </form>
                          </td>
                         
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  
                </div>
@endsection