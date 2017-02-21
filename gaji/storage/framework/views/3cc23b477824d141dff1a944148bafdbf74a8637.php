<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-black">
                <div class="panel-heading">KATEGORI LEMBUR</div>

                <div class="panel-body">
                    <center><a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-success">Tambah Data</a></center>
                    <center><?php echo e($kl->links()); ?></center>
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Lembur</th>
				<th>Nama Jabatan</th>
				<th>Nama Golongan</th>
				<th>Besaran Uang</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		 ?>
		<?php $__currentLoopData = $kl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tbody>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($data->kode_lembur); ?></td>
			<td><?php echo e($data->Jabatan->nama_jabatan); ?></td>
			<td><?php echo e($data->Golongan->nama_golongan); ?></td>
			<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
			<td>Rp.<?php echo e($data->besaran_uang); ?></td>
			<td><center><a href="<?php echo e(route('kategori.edit', $data->id)); ?>" class="btn btn-warning">Edit</a></center></td>
			<td><center>
				<form method="POST" action="<?php echo e(route('kategori.destroy', $data->id)); ?>">
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