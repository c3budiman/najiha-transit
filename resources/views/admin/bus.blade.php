@extends('adminlte::page')

@section('content')
  <style type="text/css">
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
    <h2 class= "alignleft">Tabel Informasi Bus</h2>
    <button class="alignright btn btn-primary btn-xl" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah Data Bus</button>
  </div>
  <div style="clear: both;"></div>
</div>

  <div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kendaraan</th>
            <th>Kelas</th>
            <th>Seat</th>
            <th>Warna Kendaraan</th>
            <th>Lokasi</th>
            <th>Keberangkatan</th>
            <th>Tujuan</th>
            <th>Jalur Trayek</th>
            <th>Jam Keberangkatan</th>
            <th>Tarif</th>
            <th>id_peta</th>
            <th>Gambar</th>
            <th>Waktu Dibuat</th>
            <th>Waktu Diubah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no =1;?>
            @foreach ($bus as $value)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jenis_kend }}</td>
                <td>{{ $value->kelas}}</td>
                <td>{{ $value->seat}}</td>
                <td>{{ $value->warna }}</td>
                <td>{{ $value->lokasi }}</td>
                <td>{{ $value->keberangkatan }}</td>
                <td>{{ $value->tujuan }}</td>
                <td>{{ $value->jalur_trayek }}</td>
                <td>{{ $value->jam_keberangkatan }}</td>
                <td>{{ $value->tarif }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->id_peta }}</td>
                <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ $value->gambar }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus bus {{ $value->nama }}?')" href="/delete/bus/{{ $value->id }}"><i class="fa fa-trash"></i> Hapus</a>
                  <a class="btn btn-success" 
                      data-no="{{ $no-1 }}/{{ $value->id }}"
                      data-id="{{ $value->id }}"
                      data-nama="{{ $value->nama }}"
                      data-jenis_kend="{{ $value->jenis_kend }}"
                      data-kelas="{{ $value->kelas}}"
                      data-seat="{{$value->seat}}"
                      data-warna="{{ $value->warna }}"
                      data-lokasi="{{ $value->lokasi }}"
                      data-keberangkatan="{{ $value->keberangkatan }}"
                      data-tujuan="{{ $value->tujuan }}"
                      data-jalur_trayek="{{ $value->jalur_trayek }}"
                      data-jam_keberangkatan="{{ $value->jam_keberangkatan }}"
                      data-tarif="{{ $value->tarif }}"
                      data-id_peta="{{ $value->id_peta }}"
                      data-gambar="{{ $value->gambar }}"
                      data-toggle="modal" data-target="#modalbusedit"><i class="fa fa-edit"></i> Ubah</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $bus->links(); !!}
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
            <h3 class="text-center"> Tambah Informasi Bus</h3>
            <form method="post" action="bus/store">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label>Nama</label>
                      <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama / No Bus" required="required" maxlength="20">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Warna Bus</label>
                      <input class="form-control" id="warna" type="text" name="warna" placeholder="Warna Kendaraan" required="required" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kend" type="text" name="jenis_kend" required="required">
                        <option value="Bus">Bus</option>
                        <option value="Transjabodetabek">Transjabodetabek</option>
                        <option value="Minibus">Minibus</option>
                        <option value="Elf">Elf</option>
                        <option value="Mikrolet">Mikrolet</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                   <div class="form-group col-md-6">
                      <label>Kelas</label>
                      <input class="form-control" id="kelas" type="text" name="kelas" placeholder="Kelas" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Seat</label>
                      <input class="form-control" id="seat" type="text" name="seat" placeholder="Model Tempat Duduk" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tarif</label>
                      <input class="form-control" id="tarif" type="text" name="tarif" placeholder="Tarif" value="Tidak ada data" maxlength="20">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Lokasi</label>
                      <input class="form-control" id="lokasi" type="text" name="lokasi" placeholder="Lokasi Bus" required="required" maxlength="30">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Keberangkatan</label>
                      <input class="form-control" id="keberangkatan" type="text" name="keberangkatan" placeholder="Keberangkatan" required="required" maxlength="30">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tujuan</label>
                      <input class="form-control" id="tujuan" type="text" name="tujuan" placeholder="Tujuan" required="required" maxlength="50">
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jam Keberangkatan</label>
                      <input class="form-control" id="jam_keberangkatan" type="text" name="jam_keberangkatan" placeholder="Jam Keberangkatan" value="Tidak ada data" maxlength="80">
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jalur Yang Dilalui</label>
                    <textarea class="form-control" rows="5" id="jalur_trayek" type="text" name="jalur_trayek" placeholder="Jalur yang Dilewati" required="required" maxlength="1000"></textarea>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nama File Peta Trayek</label>
                    <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($filebus as $value)
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
              <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Tambah Informasi">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalbusedit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center"> Ubah Data Bus </h3>
            <p class="text-center" style="padding-bottom: 10px;" id="editno"></p>
            <form method="post" action="{{route('bus.update')}}">
              {{method_field('patch')}}
              @csrf
                <input class="hidden" id="id" type="text" name="id">
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label>Nama</label>
                      <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama / No Bus" required="required" maxlength="20">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Warna Bus</label>
                      <input class="form-control" id="warna" type="text" name="warna" placeholder="Warna Kendaraan" required="required" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-4">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kend" type="text" name="jenis_kend" required="required">
                        <option value="Bus">Bus</option>
                        <option value="Transjabodetabek">Transjabodetabek</option>
                        <option value="Minibus">Minibus</option>
                        <option value="Elf">Elf</option>
                        <option value="Mikrolet">Mikrolet</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label>Kelas</label>
                      <input class="form-control" id="kelas" type="text" name="kelas" placeholder="Kelas" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Seat</label>
                      <input class="form-control" id="seat" type="text" name="seat" placeholder="Model Tempat Duduk" value="Tidak ada data" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tarif</label>
                      <input class="form-control" id="tarif" type="text" name="tarif" placeholder="Tarif" value="Tidak ada data" maxlength="20">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Lokasi</label>
                      <input class="form-control" id="lokasi" type="text" name="lokasi" placeholder="Lokasi Bus" required="required" maxlength="30">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Keberangkatan</label>
                      <input class="form-control" id="keberangkatan" type="text" name="keberangkatan" placeholder="Keberangkatan" required="required" maxlength="30">
                  </div>
                  <div class="form-group col-md-6">
                      <label>Tujuan</label>
                      <input class="form-control" id="tujuan" type="text" name="tujuan" placeholder="Tujuan" required="required" maxlength="50">
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jam Keberangkatan</label>
                      <input class="form-control" id="jam_keberangkatan" type="text" name="jam_keberangkatan" placeholder="Jam Keberangkatan" value="Tidak ada data" maxlength="80">
                  </div>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jalur Yang Dilalui</label>
                    <textarea class="form-control" rows="5" id="jalur_trayek" type="text" name="jalur_trayek" placeholder="Jalur yang Dilewati" required="required" maxlength="1000"></textarea>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nama File Peta Trayek</label>
                    <select class="form-control" id="id_peta" type="text" name="id_peta" required="required">
                      <option value="" disabled selected>Pilih File Peta</option>
                      @foreach($filebus as $value)
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
        $('#modalbusedit').on('show.bs.modal', function (event){
            console.log('modal terbuka');

            var button =$(event.relatedTarget)

            var id = button.data('id')
            var no = button.data('no')
            var nama = button.data('nama')
            var jenis_kend = button.data('jenis_kend')
            var kelas = button.data('kelas')
            var seat = button.data('seat')
            var warna = button.data('warna')
            var lokasi = button.data('lokasi')
            var keberangkatan = button.data('keberangkatan')
            var tujuan = button.data('tujuan')
            var jalur_trayek = button.data('jalur_trayek')
            var jam_keberangkatan = button.data('jam_keberangkatan')
            var tarif = button.data('tarif')
            var gambar = button.data('gambar')
            var id_peta = button.data('id_peta')

            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #editno').text('No/ID : ['+no+']')
            modal.find('.modal-body #nama').val(nama)
            modal.find('.modal-body #jenis_kend').val(jenis_kend)
            modal.find('.modal-body #kelas').val(kelas)
            modal.find('.modal-body #seat').val(seat)
            modal.find('.modal-body #warna').val(warna)
            modal.find('.modal-body #lokasi').val(lokasi)
            modal.find('.modal-body #keberangkatan').val(keberangkatan)
            modal.find('.modal-body #tujuan').val(tujuan)
            modal.find('.modal-body #jalur_trayek').val(jalur_trayek)
            modal.find('.modal-body #jam_keberangkatan').val(jam_keberangkatan)
            modal.find('.modal-body #tarif').val(tarif)
            modal.find('.modal-body #gambar').val(gambar)
            modal.find('.modal-body #id_peta').val(id_peta)
        })
    </script>
@endsection