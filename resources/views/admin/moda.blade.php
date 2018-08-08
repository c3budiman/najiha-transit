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
      <h3 class="card-title">Tabel Jenis Moda</h3>
    </div>
  </div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover" id="komentar-table">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Jenis Moda</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($moda as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->jenis }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus moda {{ $value->jenis }}?')" href="/delete/moda/{{ $value->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tambah Jenis Moda</h3>
    </div>
  </div>

  <section id="moda">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form method="post" action="moda/store">
              @csrf
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Jenis Moda</label>
                  <input class="form-control" id="jenis" type="text" name="jenis" placeholder="Jenis Moda" required="required" maxlength="15">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Tambah">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@endsection