<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">TAMBAH GOLONGAN</div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'golongan']); ?>

					<div class="form-group<?php echo e($errors->has('kode_golongan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Kode Golongan', 'Kode Golongan :'); ?>

						<input type="text" name="kode_golongan" class="form-control" required>
						<?php if($errors->has('kode_golongan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('nama_golongan') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Nama Golongan', 'Nama Golongan :'); ?>

						<input type="text" name="nama_golongan" class="form-control" required>
						<?php if($errors->has('nama_jabatan')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('nama_golongan')); ?></strong>
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