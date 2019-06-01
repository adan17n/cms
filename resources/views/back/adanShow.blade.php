

@extends('layouts.BackMaster');
@section('judul')
    <title>adan</title>
@endsection

@section('body')


<header class="panel-heading">
    <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title text-center">Data Pegawai</h2>
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
                class="table table-bordered table-hover table-striped mb-none dataTable no-footer"
                id="datatable-editable"
                role="grid"
                aria-describedby="datatable-editable_info">
                <thead>
                    <tr role="row">

                        <th class="text-center">nama</th>
                        <th class="text-center">email</th>
                        <th class="text-center" aria-label="Actions">alamat</th>
                        <th class="text-center" aria-label="Actions">no hp</th>

                    </tr>
                </thead>
                <tbody>

<tr class="gradeA odd" role="row">
    <td class="text-center">{{$value["nama"]}}</td>

    <td class="text-center">{{$value["alamat"]}}</td>
    <td class="text-center">{{$value["email"]}}</td>
    <td class="text-center">{{$value["noHp"]}}</td>

</tr>


</tbody>
</table>
</div>
<div class="row datatables-footer">

</div>
</div>
</div>
@endsection
