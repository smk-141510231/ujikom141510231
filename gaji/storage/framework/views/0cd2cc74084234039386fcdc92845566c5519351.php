<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/penggajian')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('status_pengambilan') ? ' has-error' : ''); ?>">
                            <label for="status_pengambilan" class="col-md-4 control-label">Status Pengambilan</label>

                            <div class="col-md-6">
                                <select name="status_pengambilan" class="form-control">
                                    <option value="0">Belum Diambil</option>
                                    <option value="1">Sudah Diambil</option>
                                </select>
                                <?php if($errors->has('status_pengambilan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('status_pengambilan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                                                          
                        <div class="form-group<?php echo e($errors->has('tunjangan_pegawai_id') ? ' has-error' : ''); ?>">
                            <label for="tunjangan_pegawai_id" class="col-md-4 control-label">Pegawai</label>

                            <div class="col-md-6">
                                <select name="tunjangan_pegawai_id" class="form-control">
                                    <option value="">---Pilih---</option>   
                                    <?php $__currentLoopData = $tun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Pegawai->User->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <?php if($errors->has('tunjangan_pegawai_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tunjangan_pegawai_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if(isset($error)): ?>
                                 Penggajian Sudah Ada!
                                 <?php endif; ?>
                            </div>
                        </div>      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Hitung Gaji
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>