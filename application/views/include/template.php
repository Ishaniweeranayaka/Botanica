<?php
$this->load->helper('cookie');
$this->load->view('include/header.php');
if ($page['pageno'] == 1) {
    $this->load->view('include/slider.php', $slider);
}
if ($page['pageno'] == 2) {
    $this->load->view('include/about_us_content.php');
}
if ($page['pageno'] == 3) {

    $this->load->view('include/service_sub.php', $page);

}
$this->load->view('include/footer.php');
