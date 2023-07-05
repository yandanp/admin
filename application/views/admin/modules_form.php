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
		<div class="col-5">
			<div class="card">
				<div class="card-header">
					<h5>Module
						<?php echo isset($item) ? 'Edit' : 'Tambah'; ?>
					</h5>
				</div>
				<div class="card-body">
					<form action="<?php echo $form_action ;?>" method="post" class="row g-2 needs-validation" novalidate >
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $item->name ?? set_value('name'); ?>" required/>
                            <div class="invalid-feedback">
			                    <?= form_error('name') ?>
		                  	</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Controller Name</label>
                            <input type="text" name="controller" placeholder="Controller Name" class="form-control" value="<?php echo $item->controller ?? set_value('controller'); ?>" required/>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Permissions(methods) List</label>
                            <input type="text" name="permissions" placeholder="Permissions" class="form-control" value="<?php echo isset($item) ? implode(',',json_decode($item->permissions,0)) : set_value('permissions'); ?>" required/>
                            <small class="form-text">Comma separated</small>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Tambah' ;?></button>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>