@extends('layouts.BackMaster')

@section('judul')
    <title>buat api</title>
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


                        <form method="post" action="">


                                <div class="form-group">
                                        <label class="col-md-3 control-label text-center" for="inputRounded">Judul</label>
                                        <div class="col-md-12 ">
                                            <input name="judul" type="text" class="form-control input-rounded input-small float-left" id="inputRounded" ></div>
                                        </div>

                        </form>



                </div>
            </div>
        </div>
    </div>
</heder>
@endsection
