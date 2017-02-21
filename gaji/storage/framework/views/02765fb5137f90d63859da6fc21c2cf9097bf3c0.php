<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">TAMBAH TUNJANGAN PEGAWAI</div>
				<div class="panel-body">
                <?php echo Form::open(['url'=>'tunjangan_pegawai']); ?>

                	<div class="form-group<?php echo e($errors->has('kode_tunjangan_id') ? ' has-error' : ''); ?>">
						<?php echo Form::label ('Kode Tunjangan', ' Kode Tunjangan:'); ?>

						<select class="form-control" name="kode_tunjangan_id">
						<option value="">---Kode Tunjangan---</option>
							<?php $__currentLoopData = $tun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->kode_tunjangan; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if($errors->has('kode_tunjangan_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('kode_tunjangan_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('pegawai_id') ? ' has-error' : ''); ?>">
						<?php echo Form::label ('Nama Pegawai', ' Nama Pegawai:'); ?>

						<select class="form-control" name="pegawai_id">
						<option value="">---NIP--- || ---Nama Pegawai---</option>
							<?php $__currentLoopData = $peg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->nip; ?> || <?php echo $data->User->name; ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						<?php if(isset($error)): ?> 
						<div>Maaf Tunjangan Tidak Terdaftar!!!</div>
						<?php endif; ?>
						<?php if($errors->has('pegawai_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
				                                    </span>
				        <?php endif; ?>
					</div>
					<br>
					<div class="form-group">
                        <?php echo Form::submit('Save',['class'=>'btn btn-primary form control']); ?>

                        <?php echo Form::close(); ?>

                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>