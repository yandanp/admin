<div class="pagetitle">
    <h3>
        <?php echo $judul; ?>
    </h3>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Home</a></li>
            <li class="breadcrumb-item active">
                <?= $judul ?>
            </li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Admins
                        <a href="<?php echo base_url($URI.'/create'); ?>" class="btn btn-success btn-sm"> Tambah</a>
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-hover datatable ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Login Terakhir</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no=1;
                                    if (count($items) > 0): foreach ($items as $item): 
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>                                    
                                        <td><?= $item->name; ?></td>
                                        <td><?= $item->username; ?></td>
                                        <td><span class="badge <?= $item->status=='active'?'bg-primary':'bg-danger'?>"><?= ucfirst($item->status); ?></span></td>
                                        <td><?= $item->group_name; ?></td>
                                        <td><?= $item->last_login; ?></td>
                                        <td>
                                            
                                            <a href="<?php echo base_url($URI.'/edit/' . $item->id); ?>" class="btn btn-sm btn-info"> Edit</a>
                                            <a href="<?php echo base_url($URI.'/delete/' . $item->id); ?>" class="btn btn-sm btn-danger hapus <?php if($item->id===$this->smarty_acl->get_admin()['id']){ echo 'disabled';} ?>"> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>                                   
                                <?php endif; ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>