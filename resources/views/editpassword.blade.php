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
            
                <div class="form-group row" style="margin-top:40px">
                    <label for="inputPassword4" class="col-sm-3 col-form-label">Kata Sandi Lama</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="inputPassword4" name="sandilama">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="inputPassword4" name="sandibaru">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="inputPassword4" name="konfirmasisandi">
                    </div>
                </div>

                <div style="float:right; margin-right:25%;margin-top:5%; padding-bottom:30%;">
                    <a href="edit"><button type="submit" class="btn btn-danger" style="margin-right:20px;">Batal</button></a>
                    <a href="edit"><button type="submit" value="submit" class="btn btn-success">Ok</button></a>
                </div>
            </form>
        </div>

    </div>

</div>



