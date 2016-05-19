			<div class="col-md-12">
				<div class="pull-right">
					<?php include "view/component/notif.php" ?>
				</div>
				<h3>Master : Data Penerima</h3>
				<hr class="two"></hr>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<?php 
							if(isset($_GET['action']) && $_GET['action'] == 'edit'){
								$edit = $penerima->edit($_GET['id_penerima']);
								include "view/admin/master/penerima/edit.php";
							}else{
								include "view/admin/master/penerima/create.php";
							}
						?>
					</div>
					<div class="col-md-6">
						<table class="master" border="1" width="100%">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Nama Penerima</th>
									<th>Alamat Email</th>
									<th width="80">Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php
							if(empty($data)){

							}else{
							foreach ($data as $key => $value) {
							?>
								<tr>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['email'] ?></td>
									<td align="center">
										<a href="<?php echo app_base.'edit_master_penerima&action=edit&id_penerima='.$value['id_penerima'] ?>">
											<button style="border:none; background:none; margin-right:10px;">
												<i class="fa fa-edit" style="font-size:1.3em"></i>
											</button>
										</a>
										<a onclick="return confirm('Hapus data ini?')" href="<?php echo app_base.'delete_master_penerima&action=delete&id_penerima='.$value['id_penerima'] ?>">
											<button style="border:none; background:none">
												<i class="fa fa-trash" style="font-size:1.3em"></i>
											</button>
										</a>
									</td>
								</tr>
							<?php
							}}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>