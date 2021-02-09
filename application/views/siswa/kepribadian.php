<div class="content-wrapper">
   
    <section class="content">
      <div class="box box-primary color-palette-box">
        <div class="box-header with-border" style="background-color: #3c8dbc;color: white; font-size: 18px;">
          <i class="fa fa-fw fa-edit"></i>INPUT KEPRIBADIAN
          <span class="pull-right"><input type="button" class="btn btn-sm btn-warning" value="Kembali" onclick="history.back(-1)" /></span>
        </div>
        <div class="box-body">
			<form action="<?php echo base_url().'wakel/crud/update_kepribadian/'.$url; ?>" method="post">
					
				<!-- PEMBUKA ROW -->
				<div class="row">
					<!-- NILAI AKADEMIK -->
					<div class="col-md-6">
						<table class="table table-striped">
							<tbody>
								<tr>
								  <td><b>No.</b></td>
								  <td align="center"><b>Nama</b></td>
						          <td align="center"><b>Akhlak</b></td>
						          <td align="center"><b>Kerajinan</b></td>
						          <td align="center"><b>Kerapian</b></td>
								</tr>
								<?php $no = 1; 
								foreach($siswa as $sis) { ?>

									<input type="hidden" name="id[]" value="<?php echo $sis->id; ?>" readonly>

									<?php if ($sis->id_kelas == 'viia'): ?>
										<input type="hidden" name="url" value="viia">
									<?php elseif ($sis->id_kelas == 'viib'): ?> 
										<input type="hidden" name="url" value="viib">
									<?php elseif ($sis->id_kelas == 'viic'): ?> 
										<input type="hidden" name="url" value="viic">
									<?php elseif ($sis->id_kelas == 'viiia'): ?> 
										<input type="hidden" name="url" value="viiia">
									<?php elseif ($sis->id_kelas == 'viiib'): ?> 
										<input type="hidden" name="url" value="viiib">
									<?php elseif ($sis->id_kelas == 'viiic'): ?> 
										<input type="hidden" name="url" value="viiic">
									<?php elseif ($sis->id_kelas == 'ixa'): ?> 
										<input type="hidden" name="url" value="ixa">
									<?php elseif ($sis->id_kelas == 'ixb'): ?> 
										<input type="hidden" name="url" value="ixb">
									<?php elseif ($sis->id_kelas == 'ixc'): ?> 
										<input type="hidden" name="url" value="ixc">
									<?php endif ?>

									<!-- LOOP NILAI MAPEL -->

								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $sis->nama ?></td>

									<td>
										<select name="akhlak[]" class="form-control">
											<option><?php echo $sis->akhlak ?></option>
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
										</select>
									</td>

									<td>
										<select name="kerajinan[]" class="form-control">
											<option><?php echo $sis->kerajinan ?></option>
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
										</select>
									</td>

									<td>
										<select name="kerapian[]" class="form-control">
											<option><?php echo $sis->kerapian ?></option>
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
										</select>
									</td>

									
								</tr>
							
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- PENUTUP ROW -->

				<!-- TOMBOL -->
				<table class="table">
						<tr>
							<td>
							
							<input type="button" value="Batal" onclick="history.back(-1)" />
							
							
							<td align="right">
							<!-- tombol simpan -->
							<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
							</td>
						</tr>
				</table>
				</form>
		
		</div>
	</section>
</div>