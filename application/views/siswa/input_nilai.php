<div class="content-wrapper">
   <?php foreach($siswa as $sis) { ?>
    <section class="content">
      <div class="box box-primary color-palette-box">
        <div class="box-header with-border" style="background-color: #3c8dbc;color: white; font-size: 18px;">
          <i class="fa fa-fw fa-edit"></i>INPUT NILAI
          <span class="pull-right"><a class="btn btn-xs btn-warning" href="<?php echo base_url('wakel/data') ?>"><i class="fa fa-arrow-left fa-fw"></i></a></span>
        </div>
        <div class="box-body">

				<form action="<?php echo base_url().'wakel/crud/simpan'; ?>" method="post">
					
						
						<input type="hidden" name="id" value="<?php echo $sis->id; ?>" readonly>

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

				
					<!-- TANGGAL DAFTAR -->
				<center><h3><?= $sis->nama ?> (<?= $sis->nis ?>)</h3></center><hr>
				

				<!-- PEMBUKA ROW -->
				<div class="row">
					<!-- NILAI AKADEMIK -->
					<div class="col-md-4">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td width="55%"><strong>Mapel</strong></td>
										<td align="center"><strong>KKM</strong></td>
										<td align="center"><strong>Nilai</strong></td>
									</tr>
									<tr>
										<td>Aqidah</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="aqidah" value="<?= $sis->aqidah ?>"></td>
									</tr>
									<tr>
										<td>Tadrib Lughowi</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="tadrib_lughowi" value="<?= $sis->tadrib_lughowi ?>"></td>
									</tr>

									<?php if ($sis->id_kelas == 'viia' or $sis->id_kelas == 'viiia' or $sis->id_kelas == 'ixa'): ?>
									<tr>
										<td>Tahfidz</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="tahfidz" value="<?= $sis->fiqih ?>"></td>
									</tr>	
									<?php endif ?>

									<?php if ($sis->id_kelas == 'viib' or $sis->id_kelas == 'viic' or $sis->id_kelas == 'viiib' or $sis->id_kelas == 'viiic' or $sis->id_kelas == 'ixb' or $sis->id_kelas == 'ixc'): ?>
										<tr>
											<td>Fiqih</td>
											<td align="center">65</td>
											<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="fiqih" value="<?= $sis->fiqih ?>"></td>
										</tr>
									<?php endif ?>

									<?php if ($sis->id_kelas == 'viib' or $sis->id_kelas == 'viic' or $sis->id_kelas == 'viiib' or $sis->id_kelas == 'viiic'): ?>
										
										<tr>
											<td>Tajwid & Tahsin</td>
											<td align="center">
											<?php if ($sis->tingkat == 'vii'): ?>
											60
											<?php else: ?>
											65
											<?php endif ?>
											</td>
											<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="tajwid" value="<?= $sis->tajwid ?>"></td>
										</tr>
										<tr>
											<td>Doa & Dzikir</td>
											<td align="center">65</td>
											<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="doa_dzikir" value="<?= $sis->doa_dzikir ?>"></td>
										</tr>
									<?php endif ?>
									
									
									<?php if ($sis->id_kelas == 'ixb' or $sis->id_kelas == 'ixc'): ?>
										<tr>
										<td>Nahwu</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="nahwu" value="<?= $sis->nahwu ?>"></td>
									</tr>
									<tr>
										<td>Shorof</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="shorof" value="<?= $sis->shorof ?>"></td>
									</tr>
									<?php endif ?>
									
									
									<tr>
										<td>Khot & Imla'</td>
										<td align="center">65</td>
										<td><input onkeypress="return angka(event)" maxlength="3" type="text" class="form-control" name="khot" value="<?= $sis->khot ?>"></td>
									</tr>

								</tbody>
							</table>
					</div>
					
					<!-- KEHADIRAN -->
					<div class="col-md-4">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td width="60%"><strong>Kehadiran</strong></td>
										<td align="cetner"><strong>Hari</strong></td>
									</tr>
									<tr>
										<td>1. Sakit</td>
										<td><input class="form-control" type="number" name="sakit" value="<?= $sis->sakit ?>"></td>
									</tr>
									<tr>
										<td>2. Izin</td>
										<td><input class="form-control" type="number" name="izin" value="<?= $sis->izin ?>"></td>
									</tr>
									<tr>
										<td>3. Alfa</td>
										<td><input class="form-control" type="number" name="alfa" value="<?= $sis->alfa ?>"></td>
									</tr>
								</tbody>
								<table class="table table-striped">
								<tbody>
									<tr>
										<td colspan=2><strong>Kepribadian</strong></td>
									</tr>
									<tr>
										<td width="60%">1. Akhlakul Karimah</td>
										<td>
											<select name="akhlak" class="form-control">
												<option><?php echo $sis->akhlak ?></option>
												<option>A</option>
												<option>B</option>
												<option>C</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>2. Kerajinan</td>
										<td>
											<select name="kerajinan" class="form-control">
												<option><?php echo $sis->kerajinan ?></option>
												<option>A</option>
												<option>B</option>
												<option>C</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>3. Kerapian</td>
										<td>
											<select name="kerapian" class="form-control">
												<option><?php echo $sis->kerapian ?></option>
												<option>A</option>
												<option>B</option>
												<option>C</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>4. Poin Pelanggaran</td>
										<td><input class="form-control" type="number" name="poin" value="<?= $sis->poin ?>"></td>
									</tr>
								</tbody>
							</table>
							</table>
					</div>
					
					<!-- KEPRIBADIAN -->
					<div class="col-md-4">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td colspan=2><strong>Catatan Wali Kelas</strong></td>
									</tr>
									<tr>
										<td width>
										<textarea name="catatan" id="" cols="30" rows="10" class="form-control" placeholder="Tulis catatan"><?php echo $sis->catatan ?></textarea>
										</td>
									</tr>
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
			<?php } ?>
	</div>

</section>

</div>