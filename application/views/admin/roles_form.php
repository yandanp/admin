<div class="pagetitle">
	<h3>
		<?php echo $judul; ?>
	</h3>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Home</a></li>
			<li class="breadcrumb-item"><a href="#"><?= ucfirst($this->uri->segment(2)); ?></a></li>
			<li class="breadcrumb-item active">
				<?= $judul ?>
			</li>
		</ol>
	</nav>
</div>
<section class="section dashboard">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h5>Role
						<?php echo isset($item) ? 'Edit' : 'Tambah'; ?>
					</h5>
				</div>
				<div class="card-body">
					<form action="<?php echo $form_action; ?>" method="post" class="row g-2 needs-validation" novalidate>
						<div class="row mt-3">
							<div class="col-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $item->name ?? set_value('name'); ?>" required />
									<div class="invalid-feedback">
				                      	<?= form_error('name'); ?>
				                    </div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-select" required>
										<option value="">-- SELECT --</option>
										<option value="active" <?php if (isset($item) && $item->status === 'active') {
											echo 'selected';
											} ?>>Active</option>
										<option value="inactive" <?php if (isset($item) && $item->status === 'inactive') {
											echo 'selected';
											} ?>>Inactive</option>
									</select>
									<div class="invalid-feedback">										
										<?= form_error('status'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<!-- <br> -->
						<h4>Permissions</h4>

						<div class="form-check mb-2">
							<input type="checkbox" class="form-check-input toggle-checkbox" data-toggle-checkbox="permissions" id="checkbox-all">
							<label class="form-check-label" for="checkbox-all">
		                      Check All
		                    </label>
						</div>
						</div>

						<?php foreach ($modules as $module): $m_permissions = json_decode($module->permissions); ?>
						<dl class="row">
							<dt class="col-3">
								<?php echo $module->name; ?></dt>
							<dd class="col-9">
								<?php foreach ($m_permissions as $pk => $pname):
                                            if(isset($module_permissions[$module->id]) && in_array($pname,$module_permissions[$module->id])){
                                                $checked = 'checked';
                                            }else{ $checked = ''; }
                                            ?>
								<div class="form-check form-check-inline">
									<input class="form-check-input permissions" type="checkbox" name="modules[<?php echo $module->id; ?>][]" value="<?php echo $pname; ?>" <?php echo $checked; ?> id="
									<?php echo $module->id.$pk; ?>">
									<label class="form-check-label" for="<?php echo $module->id.$pk; ?>">
										<?php echo $pname; ?></label>
								</div>
								<?php endforeach; ?>
							</dd>
						</dl>
						<?php endforeach; ?>
						<button type="submit" class="btn btn-primary">
							<?php echo isset($item) ? 'Update' : 'Tambah'; ?></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>