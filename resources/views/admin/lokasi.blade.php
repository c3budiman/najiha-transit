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
    <h2 class= "alignleft">Tabel Informasi Terminal & Stasiun</h2>
      <button class="alignright btn btn-primary btn-xl" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah Data</button>
  </div>
    <div style="clear: both;"></div>
</div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Layanan</th>
            <th>Alamat</th>
            <th>Hari Buka</th>
            <th>Hari Tutup</th>
            <th>Jam Buka</th>
            <th>Jam Tutup</th>
            <th>Telepon</th>
            <th>id_peta</th>
            <th>Gambar</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($terminalstasiun as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->jenis }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->layanan }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->haribuka }}</td>
                <td>{{ $value->haritutup }}</td>
                <td>{{ $value->jambuka }}</td>
                <td>{{ $value->jamtutup }}</td>
                <td>{{ $value->telp }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->id_peta }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->gambar }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data {{ $value->nama }}?')" href="/delete/lokasi/{{ $value->id }}"><i class="fa fa-trash"></i> Hapus</a>
                  <a class="btn btn-success" 
                      data-no="{{ $no-1 }}/{{ $value->id }}"
                      data-id="{{ $value->id }}"
                      data-jenis="{{ $value->jenis }}"
                      data-nama="{{ $value->nama }}"
                      data-layanan="{{ $value->layanan }}"
                      data-alamat="{{ $value->alamat }}"
                      data-haribuka="{{ $value->haribuka }}"
                      data-haritutup="{{ $value->haritutup }}"
                      data-jambuka="{{ $value->jambuka }}"
                      data-jamtutup="{{ $value->jamtutup }}"
                      data-telp="{{ $value->telp }}"
                      data-id_peta="{{ $value->id_peta }}"
                      data-gambar="{{ $value->gambar }}"
                      data-toggle="modal" data-target="#modallokasiedit"><i class="fa fa-edit"></i> Ubah</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $terminalstasiun->links(); !!}
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
            <h3 class="text-center"> Tambah Informasi Lokasi</h3>
            <form method="post" action="lokasi/store">
              @csrf
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Jenis</label>
                  <select class="form-control" id="jenis" type="text" name="jenis" placeholder="Jenis Lokasi" required="required">
                    <option value="Stasiun">Stasiun</option>
                    <option value="Terminal">Terminal</option>
                </select>
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nama</label>
                  <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama Stasiun / Terminal" required="required" maxlength="30">
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Layanan</label>
                  <select class="form-control" id="layanan" type="text" name="layanan" placeholder="Jenis Layanan" required="required">
                    <option value="Commuter Line">Commuter Line</option>
                    <option value="Angkot dan Bus">Angkot dan Bus</option>
                    <option value="Pemberhentian Angkot">Pemberhentian Angkot</option>
                    <option value="Halte / Pol Bus">Halte / Pol Bus</option>
                </select>
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" type="text" name="alamat" placeholder="Alamat" required="required" maxlength="150"></textarea>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Hari Buka</label>
                  <select class="form-control" id="haribuka" type="text" name="haribuka" placeholder="Hari Buka">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Senin - Jum'at">Senin - Jum'at</option>
                    <option value="Setiap Hari">Setiap Hari</option>
                  </select>
                </div>
                </div>
                <div class="form-group col-md-6">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Hari Tutup</label>
                  <select class="form-control" id="haritutup" type="text" name="haritutup" placeholder="Hari Tutup">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Sabtu - Minggu">Sabtu - Minggu</option>
                    <option value="Libur Nasional">Libur Nasional</option>
                    <option value="-">-</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Jam Buka</label>
                  <input class="form-control" id="jambuka" type="text" name="jambuka" placeholder="Jam Buka" value="-" maxlength="10">
                </div>
              </div>
                <div class="form-group col-md-6">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Jam Tutup</label>
                  <input class="form-control" id="jamtutup" type="text" name="jamtutup" placeholder="Jam Tutup" value="-" maxlength="10">
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Telp</label>
                  <input class="form-control" id="telp" type="text" name="telp" placeholder="Telp" value="Tidak Ada Data" maxlength="30">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nama File Peta Trayek</label>
                     <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($filelokasi as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Nama File Gambar</label>
                     <select class="form-control" id="gambar" type="text" name="gambar" required="required">
                      <option value="" disabled selected>Pilih File Gambar</option>
                      <option value="-">Tidak Ada Gambar</option>
                      @foreach($gambar as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
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
    <div class="modal fade" id="modallokasiedit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center"> Ubah Data Lokasi </h3>
            <p class="text-center" style="padding-bottom: 10px;" id="editno"></p>
            <form method="post" action="{{route('lokasi.update')}}">
              {{method_field('patch')}}
              @csrf
              <div class="control-group">
                <input class="hidden" id="id" type="text" name="id">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Jenis</label>
                  <select class="form-control" id="jenis" type="text" name="jenis" placeholder="Jenis Lokasi" required="required">
                    <option value="Stasiun">Stasiun</option>
                    <option value="Terminal">Terminal</option>
                </select>
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nama</label>
                  <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama Stasiun / Terminal" required="required" maxlength="30">
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Layanan</label>
                  <select class="form-control" id="layanan" type="text" name="layanan" placeholder="Jenis Layanan" required="required">
                    <option value="Commuter Line">Commuter Line</option>
                    <option value="Angkot dan Bus">Angkot dan Bus</option>
                    <option value="Pemberhentian Angkot">Pemberhentian Angkot</option>
                    <option value="Halte / Pol Bus">Halte / Pol Bus</option>
                </select>
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" type="text" name="alamat" placeholder="Alamat" required="required" maxlength="150"></textarea>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Hari Buka</label>
                  <select class="form-control" id="haribuka" type="text" name="haribuka" placeholder="Hari Buka">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Senin - Jum'at">Senin - Jum'at</option>
                    <option value="Setiap Hari">Setiap Hari</option>
                  </select>
                </div>
                </div>
                <div class="form-group col-md-6">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Hari Tutup</label>
                  <select class="form-control" id="haritutup" type="text" name="haritutup" placeholder="Hari Tutup">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Sabtu - Minggu">Sabtu - Minggu</option>
                    <option value="Libur Nasional">Libur Nasional</option>
                    <option value="-">-</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Jam Buka</label>
                  <input class="form-control" id="jambuka" type="text" name="jambuka" placeholder="Jam Buka" value="-" maxlength="10">
                </div>
              </div>
                <div class="form-group col-md-6">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Jam Tutup</label>
                  <input class="form-control" id="jamtutup" type="text" name="jamtutup" placeholder="Jam Tutup" value="-" maxlength="10">
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Telp</label>
                  <input class="form-control" id="telp" type="text" name="telp" placeholder="Telp" value="Tidak Ada Data" maxlength="30">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nama File Peta Trayek</label>
                     <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($filelokasi as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Nama File Gambar</label>
                     <select class="form-control" id="gambar" type="text" name="gambar" required="required">
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
          </div>
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
        $('#modallokasiedit').on('show.bs.modal', function (event){
            console.log('modal terbuka');

            var button =$(event.relatedTarget)

            var id = button.data('id')
            var no = button.data('no')
            var jenis = button.data('jenis')
            var nama = button.data('nama')
            var layanan = button.data('layanan')
            var alamat = button.data('alamat')
            var haribuka = button.data('haribuka')
            var haritutup = button.data('haritutup')
            var jambuka = button.data('jambuka')
            var jamtutup = button.data('jamtutup')
            var telp = button.data('telp')
            var id_peta = button.data('id_peta')
            var gambar = button.data('gambar')

            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #editno').text('No/ID : ['+no+']')
            modal.find('.modal-body #jenis').val(jenis)
            modal.find('.modal-body #nama').val(nama)
            modal.find('.modal-body #layanan').val(layanan)
            modal.find('.modal-body #alamat').val(alamat)
            modal.find('.modal-body #haribuka').val(haribuka)
            modal.find('.modal-body #haritutup').val(haritutup)
            modal.find('.modal-body #jambuka').val(jambuka)
            modal.find('.modal-body #jamtutup').val(jamtutup)
            modal.find('.modal-body #telp').val(telp)
            modal.find('.modal-body #id_peta').val(id_peta)
            modal.find('.modal-body #gambar').val(gambar)
        })
    </script>
@endsection
