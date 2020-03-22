@extends('layouts.app')

@include('header')

<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">ANTAR</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;" >
    <label class="btn " style="width:50%; border-radius:0; color:black;" >
      <input  type="radio" name="options" id="option1" autocomplete="off" > Isi Form
    </label>
    <label class="btn "style="width:50%; border-radius:0;  ">
      <input  type="radio" name="options" id="option2" autocomplete="off" checked> Status
    </label> 
  </div>

<div  style="margin-left: 30px;margin-right:30px; margin-top:40px;">
<div >    
                @if(session('pesan'))
                    <div class="alert alert-info">
                    <b>Berhasil</b>:{{session('pesan')}}
                    </div>
                    @endif
                <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>JenisSampah</th>
                    <th>KategoriSampah</th>
                    <th>Berat</th>
                    <th>Tanggal</th>
                    </tr>
                  </thead>

                    <?php
                        $no = 1;
                    ?>
                    @foreach($sampah as $item)
                    <tbody>
                    <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->JenisSampah}}</td>
                    <td>{{$item->KategoriSampah}}</td>
                    <td>{{$item->Berat}}</td>
                    <td>{{$item->Tanggal}}</td>
                    </tbody>
                               
                    </td>
                    </tr>
                    <?php
                        $no++;
                    ?>
                    @endforeach
                    </table>
                </div>
            </div>
</div>


@include('footer')
