@extends('layouts.app')
@include('header')


<!--edit.blade-->
<div class="container">
<div class="row" style="margin-left: 15%;">

<div class="col-sm-9" >
<h3 style="margin-bottom:10px; font-weight:bold;text-align: center; color:#51ABA4">AKUN</h3>
<a class="edit" href="editprofil" style="font-size:1.5em"><img src=" {{ ('ikon/pencil.png') }}" style="width:23px; height:23px">&nbsp; Edit Akun</a>

<form name="form" style="margin-bottom:40%">
<div class="form-group row" style="margin-top:25px">
    <label for="inputNama" class="col-sm-3 col-form-label" >Nama Lengkap</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" name="nama" disabled>
    </div>
  </div>

  <div class="form-group row">
      <label for="InputEmail" class="col-sm-3 col-form-label" >Email</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="InputEmail" name="email" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputNomorHp" class="col-sm-3 col-form-label" >No. Telepon</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" name="noHp" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPekerjaan" class="col-sm-3 col-form-label" >Pekerjaan</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" name="pekerjaan" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputNoId" class="col-sm-3 col-form-label" >Nomor Identitas</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" name="noId" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAlamat" class="col-sm-3 col-form-label" >Alamat</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" name="alamat" disabled>
    </div>
  </div>

  </form>
</div>

<div class="col-sm-3" style="margin-top:70px;">

<img src ="{{ ('ikon/foto.jpg') }}" style="width:200px">
</div>

</div>

</div>


  

@include('footer')

