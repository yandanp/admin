<!-- <?php if (validation_errors()): ?>
    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        <?php echo validation_errors('<li>','</li>'); ?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
<?php endif; ?> -->

<?php if ($this->session->flashdata('error_msg')): ?>
    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-dismiss="alert" aria-label="Close"></button>
        <?php if(is_array($this->session->flashdata('error_msg'))){
            echo '<ul class="list-unstyled">';
            foreach ($this->session->flashdata('error_msg') as $error_msg){
                echo '<li>'.$error_msg.'</li>';
            }
            echo '</ul>';
        }else{ echo $this->session->flashdata('error_msg'); } ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('success_msg')): ?>
    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success_msg'); ?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>