<?php
$this->load->helper('cookie');
$this->load->view('include/header.php',$page);


if ($page['pageno'] == 1) {
    $this->load->view('include/slider.php', $home);
}
if ($page['pageno'] == 2) {
    $this->load->view('include/about_us_content.php',$about_us);
}
if ($page['pageno'] == 3) {

    $this->load->view('include/service_sub.php', $page);

}

$this->load->view('include/footer.php',$page);
?>

