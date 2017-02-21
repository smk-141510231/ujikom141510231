@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">TAMBAH GOLONGAN</div>
                {!! Form::open(['url'=>'golongan']) !!}
                <div class="panel-body">
              		<div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
                            <label for="kode_golongan" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                <input id="kode_golongan" type="text" class="form-control" name="kode_golongan" value="{{ old('kode_golongan') }}" required autofocus>

                                @if ($errors->has('kode_golongan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_golongan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
                            <label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <input id="nama_golongan" type="nama_golongan" class="form-control" name="nama_golongan" value="{{ old('nama_golongan') }}" required>

                                @if ($errors->has('nama_golongan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_golongan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>

                            <div class="col-md-6">
                                <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" required>

                                @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
					{!! Form::submit('Save', ['class' => 'btn btn-primary form control']) !!}
					{!! Form::close() !!}
                        </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection