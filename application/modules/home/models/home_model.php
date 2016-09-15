<?php
class Home_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_products()
    {
        $sql = "SELECT * FROM products";

        $result = $this->db->query($sql);

        return $result->result_array();
    }
}
?>