@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT GOLONGAN</div>
                	<div class="panel-body">
                	{!! Form::model($gol,['method'=>'PATCH', 'route'=>['golongan.update', $gol->id]]) !!}
                		<div class="form-group {{ $errors->has('kode_golongan') ? ' has-error' : 'pesan' }}">

							{!! Form::label('Kode Golongan','Kode Golongan :') !!}
							{!!Form::text('kode_golongan',null,['class'=>'form-control']) !!}
							@if ($errors->has('kode_golongan'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('kode_golongan') }}</strong>
				                                    </span>
				                                @endif
						
						</div>
						<div class="form-group">
							{!! Form::label('Nama Golongan','Nama Golongan :') !!}
							{!!Form::text('nama_golongan',null,['class'=>'form-control']) !!}
						
						</div>
						<div class="form-group">
							{!! Form::label('Besaran Uang','Besaran Uang :') !!}
							{!!Form::text('besaran_uang',null,['class'=>'form-control']) !!}
						
						</div>
						<div class="form-group">
							{!! Form::submit('Save', ['class'=>'btn btn-primary form control']) !!}
							{!! Form::close() !!}
						</div>

            </div>
        </div>
    </div>
</div>
@endsection

