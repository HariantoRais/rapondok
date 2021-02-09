<div class="content-wrapper">
   
    <section class="content">
      <div class="box box-primary color-palette-box">
        <div class="box-header with-border" style="background-color: #3c8dbc;color: white; font-size: 18px;">
          <i class="fa fa-fw fa-edit"></i>INPUT NILAI 
          <span class="pull-right"><input type="button" class="btn btn-sm btn-warning" value="Kembali" onclick="history.back(-1)" /></span>
        </div>
        <div class="box-body">
			<form action="<?php echo base_url().'wakel/crud/update_nilai/'.$url; ?>" method="post">
					
				<!-- PEMBUKA ROW -->
				<div class="row">
					<!-- NILAI AKADEMIK -->
					<div class="col-md-12">
						<table class="table table-striped">
							<tbody>
								<tr>
								  <td><b>No.</b></td>
								  <td align="center"><b>Nama Siswa</b></td>
						          <td align="center"><b>Aqidah</b></td>
						          <td align="center"><b>Tadrib Lughowi</b></td>

						          <?php if ($url == 'viia' or $url == 'viiia' or $url == 'ixa'): ?>
						          <td align="center"><b>Tahfidz</b></td>
						          <?php endif ?>

						          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic' or $url == 'ixb' or $url == 'ixc'): ?>
						          <td align="center"><b>Fiqih</b></td>
						          <?php endif ?>

						          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic'): ?>
						          <td align="center"><b>Tajwid dan Tahsin</b></td>
						          <td align="center"><b>Doa dan Dzikir</b></td>
						          <?php endif ?>
						          

						          <?php if ($url == 'ixb' or $url == 'ixc'): ?>
						          <td align="center"><b>Nahwu</b></td>
						          <td align="center"><b>Shorof</b></td>
						          <?php endif ?>

						          <td align="center"><b>Khot dan Imla'</b></td>
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

									<td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="aqidah[]" value="<?php echo $sis->aqidah ?>"></td>

									<td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="tadrib_lughowi[]" value="<?php echo $sis->tadrib_lughowi ?>"></td>

						          <?php if ($url == 'viia' or $url == 'viiia' or $url == 'ixa'): ?>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="tahfidz[]" value="<?php echo $sis->tahfidz ?>"></td>
						          <?php endif ?>

						          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic' or $url == 'ixb' or $url == 'ixc'): ?>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="fiqih[]" value="<?php echo $sis->fiqih ?>"></td>
						          <?php endif ?>

						          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic'): ?>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="tajwid[]" value="<?php echo $sis->tajwid ?>"></td>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="doa_dzikir[]" value="<?php echo $sis->doa_dzikir ?>"></td>
						          <?php endif ?>
						          

						          <?php if ($url == 'ixb' or $url == 'ixc'): ?>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="nahwu[]" value="<?php echo $sis->nahwu ?>"></td>
						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="shorof[]" value="<?php echo $sis->shorof ?>"></td>
						          <?php endif ?>

						          <td><input onkeypress="return angka(event)" required="" maxlength="3" type="text" class="form-control" name="khot[]" value="<?php echo $sis->khot ?>"></td>

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