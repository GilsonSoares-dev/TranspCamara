<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class PSeletivo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Processo Seletivo".CIDADE];
        $this->load->view("pseletivo/pseletivo", $data);
                
    }

    public function npseletivo()
    {
        $data = ["titulo"=>"Processo Seletivo" . CIDADE];
        $this->load->view("pseletivo/npseletivo",$data);
    }

    public function edpseletivo()
    {
       $data = ["titulo"=>"Processo Seletivo" . CIDADE];
       $this->load->view("pseletivo/edpseletivo",$data);
    }

    public function dtpseletivo()
    {
        $data = ["titulo"=>"Processo Seletivo" . CIDADE];
        $this->load->view("pseletivo/dtpseletivo",$data);

    }

}
        
    /* End of file  Concursos.php */
        