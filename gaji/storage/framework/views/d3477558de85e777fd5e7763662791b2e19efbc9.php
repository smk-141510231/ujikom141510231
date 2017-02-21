<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">PENGGAJIAN</div>
				<div class="panel-body">
                </div>
            </div>
            </div>
        </div>
    
 <div class="panel-body panel-primary">
                    <center><a href="<?php echo e(route('penggajian.create')); ?>" class="btn btn-success">Hitung Peggajian</a></center>
                    <center><?php echo e($penggajian->links()); ?></center>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr class="bg-info">
                <th>No</th>
                <th>Id Pegawai</th>
                <th>Jumlah Jam Lembur</th>
                <th>Jumlah Uang Lembur</th>
                <th>Gaji Pokok</th>
                <th>Total Gaji</th>
                <th>Tanggal Pengambilan</th>
                <th>Status Pengambilan</th>
                <th>Petugas Penerima</th>
                <th></th>
                <th colspan="3"><center>Action</center></th>
            </tr>
        </thead>
        <?php 
        $no = 1;
         ?>
        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($data->Tujangan_pegawai->Pegawai->user->name); ?></td>
                <td><?php echo e($data->jumlah_jam_lembur); ?> </td>
                <td><?php echo e($data->jumlah_uang_lembur); ?> </td>
                <td><?php echo e($data->gaji_pokok); ?> </td>
                <td><?php echo e($data->total_gaji); ?> </td>
                <td><?php echo e($data->updated_at); ?> </td>
                <?php if($data->status_pengambilan == 0): ?>
                
                    <td>Belum Diambil </td>
                
                <?php endif; ?>
                <?php if($data->status_pengambilan == 1): ?>
                
                    <td>Sudah Diambil</td>
                
                <?php endif; ?>
                <td><?php echo e($data->petugas_penerima); ?> </td>
                <td><center><a href="<?php echo e(route('penggajian.edit', $data->id)); ?>" class="btn btn-warning">Edit</a></center></td>
                <td><center>
                    <form method="POST" action="<?php echo e(route('penggajian.destroy', $data->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="DELETE">
                    <input class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data? ');" type="submit" value="Hapus"></form>
                </center></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>