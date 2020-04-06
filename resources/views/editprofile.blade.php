@extends('layouts.app')
@include('header')

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#batal").click(function(){
        $("#panel").slideUp("slow");
    });
});
</script>


<style> 
#panel, #flip {
    text-align: center;
    background-color: #white;
}

#panel {
    display: none;
}
</style>

<!--edit.blade-->
<div class="container">
    <div class="row" style="margin-left: 15%;">

        <div class="col-sm-9" >
            <h3 style="margin-bottom:10px; font-weight:bold;text-align: center; color:#51ABA4">EDIT AKUN</h3>

            <form name="form" onsubmit="return validateForm()">
            <div class="form-group row" style="margin-top:25px">
                <label for="inputNama" class="col-sm-3 col-form-label" >Nama Lengkap</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="nama">
                </div>
            </div>

            <div class="form-group row">
                <label for="InputEmail" class="col-sm-3 col-form-label" >Email</label>
                <div class="col-sm-7">
                <input type="email" class="form-control" id="InputEmail" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNomorHp" class="col-sm-3 col-form-label" >No. Telepon</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="noHp">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPekerjaan" class="col-sm-3 col-form-label" >Pekerjaan</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="pekerjaan">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNoId" class="col-sm-3 col-form-label" >Nomor Identitas</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="noId">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputAlamat" class="col-sm-3 col-form-label" >Alamat</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="alamat">
                </div>
            </div>


            <a href="editpassword" class="btn btn-primary" role="button" aria-pressed="true" style="margin-top:5%;background-color:#51ABA4">Ganti Kata Sandi</a> 


            <div style="float:right; margin-right:25%;margin-top:15%; padding-bottom:30%;">
                <a href="edit"><button type="submit" class="btn btn-danger  btn-lg" style="margin-right:20px;">Batal</button></a>
                <a href="edit"><button type="submit" value="submit" class="btn btn-success  btn-lg">Ok</button></a>
            </div>
            </form>
        </div>

            <div class="col-sm-3" style="margin-top:70px;">
                <form action="">
                    <img src ="{{ ('ikon/foto.jpg') }}" style="width:200px">
                    <div id="flip"> 
                        <button type="button" class="btn btn-primary" style="margin-top:10px;background-color:#51ABA4">Ganti Foto</button>
                    </div>
                    <div id="panel"><input type="file" class="form-control-file border" name="file" style="margin-top:10px">
                        <button type="button" class="btn btn-primary" style="margin-top:10px;background-color:#51ABA4">Submit</button>
                    <div id="batal" style="float:right; margin-right:8%;margin-top:10px;">
                        <button type="button" class="btn btn-danger" style="margin-right:20px;">Batal</button>
                    </div>
                    </div>
                </form>
            </div>

        

    </div>

</div>


  

@include('footer')

