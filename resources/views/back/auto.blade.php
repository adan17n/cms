@extends('layouts.BackMaster')

@section('judul')
<title>Auto</title>

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
        <div class="col-sm-12">
            <div class="mb-md">

                <h1>Membuat Modal Dialog</h1>

                <div id="kotak-dialog" title="Modal Dialog">
                    <h1>ini kotak Dialog</h1>
                    <p>Selamat datang adan</p>
                </div>

                <button id="tombol">coba</button>

            </div>
        </div>
    </div>
</div>




@endsection

@section('css')
<style>

#adan{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    background-color: aqua;
}

</style>


@endsection



@section('jquery')


<script type="text/javascript">

$(document).ready(function(){
    $('#kotak-dialog').dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
    $(document).click(function(){
        $('#kotak-dialog').dialog("open");
    });
});

</script>


@endsection
