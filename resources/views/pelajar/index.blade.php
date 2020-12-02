@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Users</h3>
                                    <button type="button" class="btn btn-primary  btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                    Tambah data Users
                                    </button>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"><i></button>

								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>NAMA DEPAN</th>
                                            <th>NAMA BELAKANG</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>PENDIDIKAN</th>
                                            <th>ALAMAT</th>
                                            <th>AKSI<th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pelajar as $pelajar)
                                        <tr>
                                            <td><a href="/pelajar/{{$pelajar->id}}/profile">{{$pelajar->nama_depan}}</a></td>
                                            <td><a href="/pelajar/{{$pelajar->id}}/profile">{{$pelajar->nama_belakang}}</a></td>
                                            <td>{{$pelajar->jenis_kelamin}}</td>
                                            <td>{{$pelajar->pendidikan}}</td>
                                            <td>{{$pelajar->alamat}}</td>
                                            <td><a href="/pelajar/{{$pelajar->id}}/edit" class="btn btn-warning btn-sm">Edit</td>
                                            <td><a href="/pelajar/{{$pelajar->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('yakin mau dihapus ?')">Delete</td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
            </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/pelajar/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                            </div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Pendidikan Terakhir</label>
                                <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                                <option value="SD">Sekolah Dasar</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">D1/D2/D3</option>
                                <option value="S1">Sarjana S1</option>
                                <option value="S2">Sarjana S2</option>
                                <option value="S3">Sarjana S3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div> 

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/pelajar/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                            </div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div>
                            <div class ="form-group">
                                <label for="exampleFormControlSelect1">Pilih Pendidikan Terakhir</label>
                                <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                                <option value="SD">Sekolah Dasar</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">D1/D2/D3</option>
                                <option value="S1">Sarjana S1</option>
                                <option value="S2">Sarjana S2</option>
                                <option value="S3">Sarjana S3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div> 

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
         
@stop


    