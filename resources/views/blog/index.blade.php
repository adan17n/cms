@extends('layouts.BackMaster') @section('judul') <title> Data Postingan</title>
@endsection @section('body')
<section class="panel">
    @if (session('sukses'))
        {{session('sukses')}}
    @endif
<header class="panel-heading">
    <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title text-center">Data Postingan Blog</h2>
</header>
<div class="panel-body" style="display: block;">
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-md">
                <a href="/dblog/tambah" id="addToTable" class="btn btn-primary">Tambah Data
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="datatable-editable_wrapper" class="dataTables_wrapper no-footer">
        <div class="row datatables-header form-inline">

            <div class="col-sm-12 col-md-6">
                <div id="datatable-editable_filter" class="dataTables_filter">
                        <form class="form-inline my-2 my-lg-0" action="/dblog" method="GET">
                                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table
                class="table table-bordered table-striped mb-none dataTable no-footer"
                id="datatable-editable"
                role="grid"
                aria-describedby="datatable-editable_info">
                <thead>
                    <tr role="row">
                        <th
                            class="text-center"
                            aria-label="Rendering engine: activate to sort column ascending">Judul</th>
                            <th class="text-center" aria-label="Actions">Gambar</th>
                        <th class="text-center">Pendahuluan</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center" aria-label="Actions">Penutup</th>
                        <th class="text-center" aria-label="Actions">Penulis</th>
                        <th class="text-center" aria-label="Actions">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blog as $b)

                    <tr class="gradeA odd" role="row">
                        <td class="text-center">{{$b->judul}}</td>
                        <td class="text-center"><img src="{{asset('image/'.$b->gambar)}}" alt="gambar" width="200px"></td>
                        <td class="text-center">{{$b->pendahuluan}}</td>
                        <td class="text-center">{{$b->isi}}</td>
                        <td class="text-center">{{$b->penutup}}</td>
                        <td class="text-center">{{$b->penulis}}</td>

												<td><a href="" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="/dblog/edit/{{$b->id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="/dblog/delete/{{$b->id}}" class="on-default remove-row" onclick="confirm('yakin mau di hapus?')"><i class="fa fa-trash-o"></i></a>
                                            </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="row datatables-footer">

            {{$blog->links()}}

        </div>
        <button id="tombol">CEK</button>
        <div class="lingkaran"></div>

</div>
</section>

@endsection

@section('jquery')

<script type="text/javascript">
$(document).ready(function(){
    $('#tombol').click(function(){
        $('.lingkaran').css({"backgound-color":"red","widht":"200px","height":"200px"});
    });
});
</script>

@endsection

@section('css')
    <style>

h1{
	text-align: center;
}

.box{
	height: 300px;
	width:300px;
	background: orange;
    margin: 10px;
}

#tombol{
	padding:10px;
	color: #fff;
	background: #34495E;
	border: none;
}
.keterangan{
    color: aqua;
    background-color: brown;
    margin: 5px;
}
.lingkaran{
    border-radius: 100%;
    width: 200px;
    height: 200px;
    background-color: aqua;
    margin-top: 20px;
}

    </style>
@endsection
