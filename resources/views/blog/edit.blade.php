@extends('layouts.BackMaster') @section('judul')
<title>
    Edit Data Postingan Blog</title>
@endsection @section('body')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title text-center">Edit Data Blog</h2>
        </header>
        <div class="panel-body text-center">
            <form
                action="/dblog/update/{{$blog->id}}"
               method="POST"
                enctype="multipart/form-data"
                class="form-horizontal form-bordered">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-3 control-label text-center" for="inputRounded">Judul</label>
                    <div class="col-md-6">
                        <input
                            name="judul"
                            type="text"
                            class="form-control input-rounded"
                            id="inputRounded"
                            value="{{$blog->judul}}"></div>
                </div>

                <label class="text-center" for="konten">Pendahuluan</label>

                <textarea name="pendahuluan" class="ckeditor" id="ckedtor">{{$blog->pendahuluan}}</textarea>

                <label class="text-center" for="konten">Isi</label>

                <textarea name="isi" class="ckeditor" id="ckedtor">{{$blog->isi}}</textarea>

                <label class="text-center" for="konten">Penutup</label>

                <textarea name="penutup" class="ckeditor" id="ckedtor">{{$blog->penutup}}</textarea><br>
                <div class="form-group">
                    <label class="col-md-3 control-label text-center" for="inputRounded">Penulis</label>
                    <div class="col-md-6">
                        <input
                            name="penulis"
                            type="text"
                            class="form-control input-rounded"
                            id="inputRounded"
                            value="{{$blog->penulis}}"></div>
                </div>
                <label class="col-md-3 control-label text-center" for="inputRounded">Masukan Gambar</label>
                <div class="col-md-6">
                    <input
                        name="gambar"
                        type="file"
                        class="btn btn-primary"
                        id="inputRounded"
                        value="{{asset('gambar/'.$blog->gambar)}}"></div>
                <br>
                <button class="btn btn-primary btn-sm float-right" type="submit">Kirim Data</button>
            </div>

        </form>
    </div>
</section>

</div>
@endsection
