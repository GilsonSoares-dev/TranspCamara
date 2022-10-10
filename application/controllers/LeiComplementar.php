<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class LeiComplementar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function cadLeiComplementar()
    {
        $data = ["titulo"=>"Cadastro de Lei Complementar".CIDADE];
        $this->load->view("leis/cad_lei_complementar", $data);
    }

    public function editaLeiComp()
    {
        $data = ["titulo"=>"Editar Lei".CIDADE];
        $this->load->view("leis/edita_lei_complementar", $data);
    }

    public function detalheLeiComp()
    {
        $data = ["titulo"=>"Detalhes da Lei".CIDADE];
        $this->load->view("leis/detalhe_lei_complementar", $data);
    }

}
        
    /* End of file  LeiComplementar.php */
        
                            