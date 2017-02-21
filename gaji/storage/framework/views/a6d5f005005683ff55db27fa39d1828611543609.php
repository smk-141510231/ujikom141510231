<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-black">
               <div class="panel-heading">LEMBUR PEGAWAI</div>

                <div class="panel-body">
                    <center><a href="<?php echo e(route('lembur.create')); ?>" class="btn btn-success">Tambah Data</a></center>
                    <center><?php echo e($lp->links()); ?></center>
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Lembur Id</th>
				<th>Nama Pegawai</th>
				<th>Jumlah Jam</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		 ?>
		<?php $__currentLoopData = $lp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tbody>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($data->Kategori_lembur->kode_lembur); ?>

			<td><?php echo e($data->Pegawai->User->name); ?></td>
			<td><?php echo e($data->jumlah_jam); ?></td>
			<td><center><a href="<?php echo e(route('lembur.edit', $data->id)); ?>" class="btn btn-warning">Edit</a></center></td>
			<td><center>
				<form method="POST" action="<?php echo e(route('lembur.destroy', $data->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="DELETE">
					<input class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data? ');" type="submit" value="Hapus"></form>
				</center></td>
		</tbody>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</table>
	</div>
	</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>