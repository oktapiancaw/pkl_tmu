<div class="container h-100">
	<div class="row my-3">
		<div class="col">
			<h3>Data Kelompok</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<?= $this->session->flashdata('message');  ?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header d-flex justify-content-end">
					<div class="header">
						<a href="<?php echo base_url('datakelompok/tambah/'); ?>" class="btn btn-primary mr-5">Tambah</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th style="width: 7%; text-align: center;">No</th>
								<th>Nama Sekolah</th>
								<th>Jurusan</th>
								<th style="text-align: center;">Angkatan</th>
								<th style="width: 30%; text-align: center;">Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($semua_kelompok->num_rows() > 0) : ?>
								<?php $index = 1; ?>
								<?php foreach ($semua_kelompok->result() as $data_kelompok) : ?>
									<tr>
										<td style="text-align: center;"><?php echo $index++; ?></td>
										<td><?php echo $data_kelompok->nama_sekolah; ?></td>
										<td><?php echo $data_kelompok->nama_jurusan; ?></td>
										<td><?php echo $data_kelompok->angkatan; ?></td>
										<td style="text-align: center;">
											<a href="<?php echo base_url('datapeserta/list/' . $data_kelompok->id) ?>" class="btn btn-info">Peserta</a>
											<a href="<?php echo base_url('datakelompok/edit/' . $data_kelompok->id); ?>" class="btn btn-warning">Edit</a>
											<a href="<?php echo base_url('datakelompok/hapus/' . $data_kelompok->id); ?>" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="6" style="text-align: center;">Data tidak tersedia</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>