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
    function fetch_product_service()
    {
        $productservice = $this->db->query("SELECT * FROM `botanica_detail` where Detail_Type = 1 ")->result_array();
        return $productservice;
    }
    function fetch_why_chooseup()
    {
        $whychooseus = $this->db->query("SELECT * FROM `botanica_detail` where Detail_Type = 2")->result_array();
        return $whychooseus;
    }
    function fetch_our_process()
    {
        $our_process = $this->db->query("SELECT Description,Page_Heading,Image FROM `botanica_detail` where Detail_Type = 3")->row_array();
        return $our_process;
    }
    function fetch_turn_your_garden()
    {
        $turnyourgarden = $this->db->query("SELECT * FROM `botanica_detail` where Detail_Type = 4")->result_array();
        return $turnyourgarden;
    }
    function fetch_last_detail()
    {
        $last_detail = $this->db->query("SELECT * FROM `botanica_detail` where Detail_Type = 5")->row_array();
        return $last_detail;
    }
    function fetch_companydetails()
    {
        $companydetail = $this->db->query("SELECT * FROM `botanica_company_detail`")->row_array();
        return $companydetail;
    }
    function fetch_socail_media()
    {
        $socialmedia = $this->db->query("SELECT * FROM `botanica_socailmedia` where Active_YN = 1")->result_array();
        return $socialmedia;
    }
    function fetch_home_detail()
    {
        $homepagedetail = $this->db->query("SELECT * FROM `botanica_detail` where Detail_Type = 6")->result_array();
        return $homepagedetail;
    }

}
?>