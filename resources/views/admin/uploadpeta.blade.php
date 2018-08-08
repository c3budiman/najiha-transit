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
      <h3 class="card-title">Tabel Upload File Peta</h3>
      <br>
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modaluploadpeta"><i class="fa fa-plus"></i> Unggah Berkas Peta</button>
      @if (count($filepeta) === 0)
        <h3 style="padding-bottom: 35px;"> Belum ada peta. </h3>
      @endif
    </div>
  </div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama File</th>
            <th>Lokasi File</th>
            <th>Waktu Dibuat</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($filepeta as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama_file }}</td>
                <td>{{ $value->path_file }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                  <a class="btn btn-primary" href="/storage/{{ $value->path_file }}" target="_blank"><i class="fa fa-search-plus"></i> Lihat</a>
                  <a class="btn btn-info" href="/storage/{{ $value->path_file }}" download="/storage/{{ $value->path_file }}"><i class="fa fa-download"></i> Unduh</a>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus file peta {{ $value->nama_file }}?')" href="/delete/peta/{{ $value->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $filepeta->links(); !!}
      </div>
  </div>

<!-- Modal Upload Peta -->
    <div class="modal fade" id="modaluploadpeta" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center" style="padding-bottom: 10px;"> Tambah Berkas Peta Moda Transportasi</h3>

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

              <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                <div class="form-group {{ !$errors->has('nama_file') ?: 'has-error' }}">
                  <label>Nama Berkas</label>
                    <input type="text" name="nama_file" class="form-control" placeholder="NamaModa_JenisModa.html" maxlength="50">
                      <span class="help-block text-danger">{{ $errors->first('nama_file') }}</span>
                      <a >Isi untuk mengubah nama file atau biarkan kosong untuk menggunakan nama asli file</a>
                </div>
                <div class="form-group {{ !$errors->has('path_file') ?: 'has-error' }}">
                  <label>Berkas</label>
                    <input type="file" name="path_file">
                      <span class="help-block text-danger">{{ $errors->first('path_file') }}</span>
                </div>
              <br>
          </div>
          <div class="modal-footer">
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Unggah</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div> 
 
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@endsection