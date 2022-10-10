<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Convenios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Convênios".CIDADE];
        $this->load->view("convenios/lista_convenio", $data);
                
    }

    public function cadConvenio()
    {
        $data = ["titulo"=>"Cadastro de Convênio" . CIDADE];
        $this->load->view("convenios/cad_convenio",$data);
    }

    public function aditivo_convenio()
    {
        $data = ["titulo"=>"Cadastro de Aditivo de Convênio" . CIDADE];
        $this->load->view("convenios/aditivo_convenio",$data);
    }

}
        
    /* End of file  Convenios.php */
        
                            