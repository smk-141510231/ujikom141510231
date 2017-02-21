<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">Tentang Pegawai</div>
                <div class="panel-body">
                	<div class="form-group">
						<label for="nip" class="col-sm-2 control-label">NIP</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nip" placeholder="<?php echo e($pegawai->nip); ?>" readonly>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<label for="user_id" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="user_id" placeholder="<?php echo e($pegawai->User->name); ?>" readonly>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<label for="jabatan_id" class="col-sm-2 control-label">Jabatan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($pegawai->Jabatan->nama_jabatan); ?>" readonly>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<label for="golongan_id" class="col-sm-2 control-label">Golongan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($pegawai->Golongan->nama_golongan); ?>" readonly>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<label for="golongan_id" class="col-sm-2 control-label">Foto Pegawai</label>
						<div class="col-sm-10">
							<img src="<?php echo e(asset('gambar/'.$pegawai->photo.'')); ?>" width="100" height="100">
						</div>
					</div>
					
					<div class="form-group">
						<a href="<?php echo e(url('pegawai')); ?>" class="btn btn-primary">Kembali</a>
					</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>