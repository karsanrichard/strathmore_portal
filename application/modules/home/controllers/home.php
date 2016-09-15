<?php
/**
 * Created by PhpStorm.
 * User: Karsan
 * Date: 15/09/16
 * Time: 23:16
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->view('v_home');
    }

}