@extends('layouts.BackMaster')
@section('judul') <title> Tambah Data Gambar</title>
@endsection
@section('body') <div class = "row text-center"> <div class="form-group">
    <form action="/dgambar/store" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label class="text-center" for="inputRounded">
            <h4>Keterangan Gambar</h4>
        </label>
        <textarea name="keterangan" class="ckeditor" id="ckedtor"></textarea>
        <div class="col-xs-12 text-center">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Pilih Gambar</h2>
                </header>
                <div class="panel-body">
                    <div class="col-md-6">
                        <input name="gambar" type="file" id="inputRounded"></div>
                        <br>
                            <br>
                                <br>
                                    <button type="submit" class="btn btn-primary float-right">kirim data</button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>

                @endsection



