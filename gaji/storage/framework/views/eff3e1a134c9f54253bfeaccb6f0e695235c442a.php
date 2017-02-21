<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">PEGAWAI</div>

                <div class="panel-body panel-primary">
                    <center><a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-success">Tambah Data</a></center>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>NIP</th>
				<th>User Id</th>
				<th>Jabatan Id</th>
				<th>Golongan Id</th>
				<th>Photo</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		 ?>
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tbody>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->nip); ?></td>
				<td><?php echo e($data->User->name); ?></td>
				<td><?php echo e($data->Jabatan->nama_jabatan); ?></td>
				<td><?php echo e($data->Golongan->nama_golongan); ?></td>
				<td><img src="<?php echo e(asset('gambar/'.$data->photo.'')); ?>" width="30" height="30"></td>
				<?php if(Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Admin" ): ?>
				<td><center><a href="<?php echo e(route('pegawai.show', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
				<td><center><a href="<?php echo e(route('pegawai.edit', $data->id)); ?>" class="btn btn-warning">Edit</a></center></td>
				<td><center>
					<form method="POST" action="<?php echo e(route('pegawai.destroy', $data->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="DELETE">
					<input class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data? ');" type="submit" value="Hapus"></form>
				</center></td>
				<?php endif; ?>
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