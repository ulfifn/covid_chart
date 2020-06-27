<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Covid extends CI_Controller

{
    function __construct(){

      parent::__construct();
      $this->load->model('model_data');
    }
 
    public function index()
    {
      $data['stat']= $this->model_data->penduduk();
      $this->load->view('tampildata',$data);

    }


}
