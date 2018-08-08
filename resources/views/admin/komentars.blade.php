@extends('adminlte::page')

@section('content')
<style>
thead{
    background-color: #43B6AC;
    color: white;
  }
</style>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Komentar</h3>
    </div>
  </div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover" id="komentar-table">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Moda</th>
            <th>ID Kendaraan</th>
            <th>Nopol</th>
            <th>Pesan</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($komentar as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->moda }}</td>
                <td>{{ $value->id_kendaraan }}</td>
                <td>{{ $value->nopol }}</td>
                <td>{{ $value->pesan }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus komentar oleh: {{ $value->nama }}?')" href="/delete/komentar/{{ $value->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $komentar->links(); !!}
      </div>
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@endsection