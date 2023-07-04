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
              <h5 class="card-title">Manage Roles
                <a href="<?php echo base_url($URI.'/create'); ?>" class="btn btn-success btn-sm"> Tambah</a>

              </h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th>Name</th>
                    <th>Status</th>
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
                        <td>
                            <?php echo $item->name; ?>
                        </td>
                        <td>
                            <?php echo ucfirst($item->status); ?>
                        </td>
                        <td>
                            <form action="<?php echo base_url($URI.'/delete/' . $item->id); ?>" method="post" onsubmit="return confirm('Are you sure?');">
                                <div class="btn-group btn-group-sm"> <a href="<?php echo base_url($URI.'/edit/' . $item->id); ?>" class="btn btn-info"> Edit</a>
                                    <button type="submit" class="btn btn-danger" <?php if($item->id==='1'){ echo 'disabled';} ?>> Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No results found!</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>            
        </div>
    </div>
</section>