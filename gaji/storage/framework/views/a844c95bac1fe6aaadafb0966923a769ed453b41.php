<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">TAMBAH JABATAN</div>
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
                    <?php echo Form::open(['url'=>'jabatan']); ?>

					<div class="form-group<?php echo e($errors->has('kode_jabatan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Kode Jabatan', 'Kode Jabatan :'); ?>

						<input type="text" name="kode_jabatan" class="form-control" required>
						<?php if($errors->has('kode_jabatan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_jabatan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('nama_jabatan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Nama Jabatan', 'Nama Jabatan :'); ?>

						<input type="text" name="nama_jabatan" class="form-control" required>
						<?php if($errors->has('nama_jabatan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('nama_jabatan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Besaran Uang', 'Besaran Uang :'); ?>

						<input type="text" name="besaran_uang" class="form-control" required>
						<?php if($errors->has('besaran_uang')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>

					<div class="form-group">
					<?php echo Form::submit('Save', ['class' => 'btn btn-primary form control']); ?>

					<?php echo Form::close(); ?>

					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>