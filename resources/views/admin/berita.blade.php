@extends('adminlte::page')

@section('content')
<style>
  .alignleft {
    float: left;
  }
  .alignright {
    float: right;
  }
  thead{
    background-color: #43B6AC;
    color: white;
  }
</style>
<div class="card">
  <div id="textbox">
    <h2 class= "alignleft">Tabel Berita</h2>
      <button class="alignright btn btn-primary btn-xl" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah Informasi Berita</button>
  </div>
    <div style="clear: both;"></div>
</div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Judul</th>
            <th>Berita</th>
            <th>Gambar</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($berita as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->judul }}</td>
                <td>{{ $value->berita }}</td>
                <td>{{ $value->gambar }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus berita tentang: {{ $value->judul }}?')" href="/delete/berita/{{ $value->id }}"><i class="fa fa-trash"></i> Hapus</a>
                  <a class="btn btn-success" 
                      data-no="{{ $no-1 }}/{{ $value->id }}"
                      data-id="{{ $value->id }}"
                      data-judul="{{ $value->judul }}"
                      data-berita="{{ $value->berita }}"
                      data-gambar="{{ $value->gambar }}"
                      data-toggle="modal" data-target="#modalberitaedit"><i class="fa fa-edit"></i> Ubah</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $berita->links(); !!}
      </div>
  </div>
  
  <!-- Modal Tambah -->
  <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center"> Tambah Berita</h3>
            <form method="post" action="berita/store">
              @csrf
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Judul</label>
                  <input class="form-control" id="judul" type="text" name="judul" placeholder="Judul Berita" required="required" maxlength="30">
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Berita</label>
                  <textarea class="form-control" rows="7" id="berita" type="text" name="berita" placeholder="Isi Berita" required="required" maxlength="5000"></textarea>
                </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label>Nama File Gambar</label>
                     <select class="form-control" id="gambar" type="text" name="gambar">
                      <option value="" disabled selected>Pilih File Gambar</option>
                      <option value="-">Tidak Ada Gambar</option>
                      @foreach($gambar as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                </div>
          </div>
              <br>
              <div class="modal-footer">
              <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Simpan">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalberitaedit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center"> Ubah Berita </h3>
            <p class="text-center" style="padding-bottom: 10px;" id="editno"></p>
            <form method="post" action="{{route('berita.update')}}">
              {{method_field('patch')}}
              @csrf
              <div class="control-group">
                <input class="hidden" id="id" type="text" name="id">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Judul</label>
                  <input class="form-control" id="judul" type="text" name="judul" placeholder="Judul Berita" required="required" maxlength="30">
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Berita</label>
                  <textarea class="form-control" rows="7" id="berita" type="text" name="berita" placeholder="Isi Berita" required="required" maxlength="5000"></textarea>
                </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label>Nama File Gambar</label>
                     <select class="form-control" id="gambar" type="text" name="gambar">
                      <option value="" disabled selected>Pilih File Gambar</option>
                      <option value="-">Tidak Ada Gambar</option>
                      @foreach($gambar as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                </div>
          </div>
              <br>
          <div class="modal-footer">
              <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Simpan Perubahan">
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
<script>
        $('#modalberitaedit').on('show.bs.modal', function (event){
            console.log('modal terbuka');

            var button =$(event.relatedTarget)

            var id = button.data('id')
            var no = button.data('no')
            var judul = button.data('judul')
            var berita = button.data('berita')
            var gambar = button.data('gambar')

            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #editno').text('No/ID : ['+no+']')
            modal.find('.modal-body #judul').val(judul)
            modal.find('.modal-body #berita').val(berita)
            modal.find('.modal-body #gambar').val(gambar)
        })
    </script>
@endsection
