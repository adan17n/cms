@extends('layouts.BackMaster')
@section('judul')
   <title>Data Gambar</title>
@endsection
    @section('body')
    <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title text-center">Data Galery</h2>
            </header>
            <div class="panel-body col-md" style="display: block;">
               <a href="/dgambar/tambah" class="btn btn-primary" type="button">Tambah Gambar</a>
            </div>
            <br>
    @foreach ($gambar as $g)
    <div class="col-md-4">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title text-center">Galery</h2>
                </header>


                <div class="panel-body col-md" style="display: block;">
                        <div class="card" style="width: 18rem;">
                                <img src="{{asset('image/'.$g->gambar)}}" class="card-img-top" alt="gambar" width="250px">
                                <div class="card-body">

                                  {!!$g->keterangan!!}
                                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"> Edit</i></a>
                                  <a href="/dgambar/delete/{{$g->id}}" class="btn btn-danger btn-sm" onclick="confirm('Yakin Mau Dihapus')"><i class="fa fa-trash-o"> delete</i></a>
                                </div>
                              </div>

                </div>
                <br>
            </section>
        </div>
        @endforeach
    @endsection
