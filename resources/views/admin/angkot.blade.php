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
    <h2 class= "alignleft">Tabel Informasi Angkot</h2>
      <button class="alignright btn btn-primary btn-xl" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah Data Angkot</button>
  </div>
    <div style="clear: both;"></div>
</div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover" id="komentar-table">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kendaraan</th>
            <th>Warna Kendaraan</th>
            <th>Tujuan</th>
            <th>Jalur Trayek</th>
            <th>Jam Operasional</th>
            <th>Tarif</th>
            <th>id_peta</th>
            <th>Gambar</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($angkot as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jenis_kend }}</td>
                <td>{{ $value->warna }}</td>
                <td>{{ $value->tujuan }}</td>
                <td style="word-wrap: break-word;min-width: 250px;max-width: 250px;">{{ $value->jalur_trayek }}</td>
                <td>{{ $value->jam_operasional }}</td>
                <td>{{ $value->tarif }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->id_peta }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->gambar }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus angkot {{ $value->nama }}?')" href="/delete/angkot/{{ $value->id }}"><i class="fa fa-trash"></i> Hapus</a>
                  <a class="btn btn-success" 
                      data-no="{{ $no-1 }}/{{ $value->id }}"
                      data-id="{{ $value->id }}"
                      data-nama="{{ $value->nama }}"
                      data-jenis_kend="{{ $value->jenis_kend }}"
                      data-warna="{{ $value->warna }}"
                      data-tujuan="{{ $value->tujuan }}"
                      data-jalur_trayek="{{ $value->jalur_trayek }}"
                      data-jam_operasional="{{ $value->jam_operasional }}"
                      data-tarif="{{ $value->tarif }}"
                      data-id_peta="{{ $value->id_peta }}"
                      data-gambar="{{ $value->gambar }}"
                      data-toggle="modal" data-target="#modalangkotedit"><i class="fa fa-edit"></i> Ubah</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $angkot->links(); !!}
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
            <h3 class="text-center"> Tambah Informasi Angkutan Kota</h3>
            <form method="post" action="angkot/store">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label>Nama</label>
                      <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama / No Angkot" required="required" maxlength="5">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Warna Angkot</label>
                      <input class="form-control" id="warna" type="text" name="warna" placeholder="Warna Kendaraan" required="required" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kend" type="text" name="jenis_kend" required="required">
                        <option value="Minibus">Minibus</option>
                        <option value="Elf">Elf</option>
                        <option value="Mikrolet">Mikrolet</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label>Jam Operasional</label>
                      <input class="form-control" id="jam_operasional" type="text" name="jam_operasional" placeholder="Jam Operasional" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tarif</label>
                      <input class="form-control" id="tarif" type="text" name="tarif" placeholder="Tarif" value="Tidak ada data" maxlength="20">
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Tujuan Angkot</label>
                    <input class="form-control" id="tujuan" type="text" name="tujuan" placeholder="Tujuan Angkot" required="required" maxlength="50">
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jalur Yang Dilalui</label>
                    <textarea class="form-control" rows="5" id="jalur_trayek" type="text" name="jalur_trayek" placeholder="Jalur yang Dilewati" required="required" maxlength="1250"></textarea>
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Nama File Peta Trayek</label>
                    <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($fileangkot as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
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


    <!-- Modal Edit -->
    <div class="modal fade" id="modalangkotedit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center"> Ubah Data Angkutan Kota</h3>
            <p class="text-center" style="padding-bottom: 10px;" id="editno"></p>
            <form method="post" action="{{route('angkot.update')}}">
              {{method_field('patch')}}
              @csrf
                <input class="hidden" id="id" type="text" name="id">
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label>Nama</label>
                      <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama / No Angkot" required="required" maxlength="5">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Warna Angkot</label>
                      <input class="form-control" id="warna" type="text" name="warna" placeholder="Warna Kendaraan" required="required" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kend" type="text" name="jenis_kend" required="required">
                        <option value="Minibus">Minibus</option>
                        <option value="Elf">Elf</option>
                        <option value="Mikrolet">Mikrolet</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label>Jam Operasional</label>
                      <input class="form-control" id="jam_operasional" type="text" name="jam_operasional" placeholder="Jam Operasional" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tarif</label>
                      <input class="form-control" id="tarif" type="text" name="tarif" placeholder="Tarif" value="Tidak ada data" maxlength="20">
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Tujuan Angkot</label>
                    <input class="form-control" id="tujuan" type="text" name="tujuan" placeholder="Tujuan Angkot" required="required" maxlength="50">
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jalur Yang Dilalui</label>
                    <textarea class="form-control" rows="5" id="jalur_trayek" type="text" name="jalur_trayek" placeholder="Jalur yang Dilewati" required="required" maxlength="1250"></textarea>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nama File Peta Trayek</label>
                     <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($fileangkot as $value)
                          <option value="{{ $value->path_file }}">{{ $value->nama_file }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-6">
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
        $('#modalangkotedit').on('show.bs.modal', function (event){
            console.log('modal terbuka');

            var button =$(event.relatedTarget)

            var id = button.data('id')
            var no = button.data('no')
            var nama = button.data('nama')
            var jenis_kend = button.data('jenis_kend')
            var warna = button.data('warna')
            var tujuan = button.data('tujuan')
            var jalur_trayek = button.data('jalur_trayek')
            var jam_operasional = button.data('jam_operasional')
            var tarif = button.data('tarif')
            var id_peta = button.data('id_peta')
            var gambar = button.data('gambar')

            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #editno').text('No/ID : ['+no+']')
            modal.find('.modal-body #nama').val(nama)
            modal.find('.modal-body #jenis_kend').val(jenis_kend)
            modal.find('.modal-body #warna').val(warna)
            modal.find('.modal-body #tujuan').val(tujuan)
            modal.find('.modal-body #jalur_trayek').val(jalur_trayek)
            modal.find('.modal-body #jam_operasional').val(jam_operasional)
            modal.find('.modal-body #tarif').val(tarif)
            modal.find('.modal-body #id_peta').val(id_peta)
            modal.find('.modal-body #gambar').val(gambar)
        })
    </script>
@endsection