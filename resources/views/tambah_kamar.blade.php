@extends('dashboard.master')

@section('content')
    <div class="container">
      <div class ="row">
        <div class="my-4 mx-4">
          <h4 class="text-center ">Tambah Data Kamar</h4>

            <form action="" method="POST">
                @csrf
                <div class="form-group mb-3 mt-5 col-md-6">
                    <label for="nama">Nama Kamar x<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_kamar" id="nama_kamar" required>
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label for="harga">Jenis Kamar <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="jenis" id="jenis" required>
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label for="stok">Harga Kamar <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" name="harga" id="harga" required>
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label for="detail">Detail Kamar <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="detail" id="detail" aria-label="With textarea" required></textarea>
                </div>
                <div class="mb-2 col-md-6">
                    <label for="formFileMultiple" class="form-label">Foto Kamar <span class="text-danger">*</span></label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple required>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
      </div>
    </div>
@endsection
