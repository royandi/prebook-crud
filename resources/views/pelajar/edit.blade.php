@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
        <div class="container.fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								
                                    <form action="/pelajar/{{$pelajar->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$pelajar->nama_depan}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$pelajar->nama_belakang}}">
                            </div>

                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-Laki" @if($pelajar->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                <option value="Perempuan" @if($pelajar->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Pendidikan Terakhir</label>
                                <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                                <option value="SD" @if($pelajar->pendidikan == 'SD') selected @endif>Sekolah Dasar</option>
                                <option value="SMP" @if($pelajar->pendidikan == 'SMP') selected @endif>SMP</option>
                                <option value="SMA" @if($pelajar->pendidikan == 'SMA') selected @endif>SMA</option>
                                <option value="Diploma" @if($pelajar->pendidikan == 'Diploma') selected @endif>D1/D2/D3</option>
                                <option value="S1" @if($pelajar->pendidikan == 'S1') selected @endif>Sarjana S1</option>
                                <option value="S2" @if($pelajar->pendidikan == 'S2') selected @endif>Sarjana S2</option>
                                <option value="S3" @if($pelajar->pendidikan == 'S3') selected @endif>Sarjana S3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pelajar->alamat}}</textarea>
                            </div>

                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-warning">Update</button>
                            </form>
								</div>
							</div>
                </div>
            </div>
        </div>
        </div>
</div>
@stop

@section('content1')
        <h1>Edit data pelajar</h1>
        <div>
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                @endif
                    </div>
                <div class="row">
                    <div class="col-lg-12">


                <form action="/pelajar/{{$pelajar->id}}/update" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$pelajar->nama_depan}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$pelajar->nama_belakang}}">
                            </div>

                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-Laki" @if($pelajar->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                <option value="Perempuan" @if($pelajar->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Pendidikan Terakhir</label>
                                <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                                <option value="SD" @if($pelajar->pendidikan == 'SD') selected @endif>Sekolah Dasar</option>
                                <option value="SMP" @if($pelajar->pendidikan == 'SMP') selected @endif>SMP</option>
                                <option value="SMA" @if($pelajar->pendidikan == 'SMA') selected @endif>SMA</option>
                                <option value="Diploma" @if($pelajar->pendidikan == 'Diploma') selected @endif>D1/D2/D3</option>
                                <option value="S1" @if($pelajar->pendidikan == 'S1') selected @endif>Sarjana S1</option>
                                <option value="S2" @if($pelajar->pendidikan == 'S2') selected @endif>Sarjana S2</option>
                                <option value="S3" @if($pelajar->pendidikan == 'S3') selected @endif>Sarjana S3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pelajar->alamat}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                            </div>
                </div>

@endsection

