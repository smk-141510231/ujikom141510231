@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading ">JABATAN</div>
                <style>
                html, body {
                background-color: #248;
                color: #636b6f;
                font-family: 'Bold';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            </style>
                <div class="panel-body">
                    <center><a href="{{route('jabatan.create')}}" class="btn btn-success">Tambah Data</a></center>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Jabatan</th>
				<th>Nama Jabatan</th>
				<th>Besaraan Uang</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		@php
		$no = 1;
		@endphp
		@foreach($jabatan as $data)
		<tbody>
			<tr>
				
				<td>{{$no++}}</td>
				<td>{{$data->kode_jabatan}}</td>
				<td>{{$data->nama_jabatan}}</td>
				<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
				<td>Rp.{{$data->besaran_uang}}</td>
				<td><center><a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-warning">Edit</a></center></td>
				<td><center>
					<form method="POST" action="{{route('jabatan.destroy', $data->id)}}">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<input class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data? ');" type="submit" value="Hapus"></form>
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
