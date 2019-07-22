<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Botanica_model extends CI_Model
{
    function __contruct()
    {
        parent::__contruct();
    }

    function fetch_slider_details()
    {
        $sliderdet = $this->db->query("SELECT * FROM `botanica_slider`")->result_array();
        return $sliderdet;
    }

}
?>