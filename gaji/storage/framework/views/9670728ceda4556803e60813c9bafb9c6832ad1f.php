<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">TAMBAH LEMBUR PEGAWAI</div>
				<div class="panel-body">
                <?php echo Form::open(['url'=>'lembur_pegawai']); ?>

					<div class="form-group<?php echo e($errors->has('kode_lembur_id') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Kode Lembur Id', 'Kode Lembur Id:'); ?>

						<select class="form-control" name="kode_lembur_id">
						<option value="">---Kode Lembur Id---</option>
							<?php $__currentLoopData = $kl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->kode_lembur; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if($errors->has('kode_lembur_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_lembur_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Nama Pegawai', ' Nama Pegawai:'); ?>

						<select class="form-control" name="pegawai_id">
						<option value="">---Nama Pegawai---</option>
							<?php $__currentLoopData = $peg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->user->name; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if($errors->has('pegawai_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('jumlah_jam') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label ('Jumlah Jam', 'Jumlah Jam :'); ?>

							<input type="text" name="jumlah_jam" class="form-control" required>
							<?php if($errors->has('jumlah_jam')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('jumlah_jam')); ?></strong>
				                                    </span>
				            <?php endif; ?>
					</div>
					<div class="form-group">
                        <?php echo Form::submit('Save',['class'=>'btn btn-primary form control']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>