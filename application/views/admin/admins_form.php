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
					<h5>Admin
						<?php echo isset($item) ? 'Edit' : 'Tambah'; ?>
					</h5>
				</div>
				<div class="card-body">
					<form class="row g-3 needs-validation" novalidate action="<?php echo $form_action ;?>" method="post">						
                        <div class="col-12">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="<?php echo $item->username ?? set_value('username'); ?>" placeholder="Username" class="form-control" required/>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="<?php echo $item->email ?? set_value('email'); ?>" placeholder="Email" class="form-control" required/>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="<?php echo $item->name ?? set_value('name'); ?>" placeholder="Name" class="form-control" required/>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" placeholder="<?php echo isset($item) ? 'Biarkan kosong jika tidak ingin rubah': 'Password';?>" class="form-control" <?= isset($item)?: 'required' ?>/>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Role</label>
                            <select name="role_id" class="form-select" required>
                                <option value="">-- SELECT --</option>
                                <?php foreach ($roles as $role):?>
                                <option value="<?php echo $role->id?>" <?php if (isset($item) && $item->role_id === $role->id) {
                                    echo 'selected';
                                } ?>><?php echo $role->name?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="">-- SELECT --</option>
                                <option value="active" <?php if (isset($item) && $item->status === 'active') {
                                    echo 'selected';
                                } ?>>Active</option>
                                <option value="inactive" <?php if (isset($item) && $item->status === 'inactive') {
                                    echo 'selected';
                                } ?>>Inactive</option>
                                <option value="banned" <?php if (isset($item) && $item->status === 'banned') {
                                    echo 'selected';
                                } ?>>Banned</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Tambah' ;?></button>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>