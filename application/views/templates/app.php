<?php

$this->load->view("templates/header");

$this->load->view("templates/sidebar");

$this->load->view("templates/topmenu");
  
echo "<main id='main' class='main'>";
                $this->load->view('alerts'); 

echo $body;

echo "</main>";

$this->load->view("templates/footer");

?>