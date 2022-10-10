<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Leis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Leis Municipais".CIDADE];
        $this->load->view("leis/lista_lei", $data);
                
    }

    public function cadLei()
    {
        $data = ["titulo"=>"Cadastro de Lei".CIDADE];
        $this->load->view("leis/cad_lei",$data);
    }

    public function editaLei()
    {
        $data = ["titulo"=>"Editar Lei".CIDADE];
        $this->load->view("leis/edita_lei", $data);
    }

    public function detalheLei()
    {
        $data = ["titulo"=>"Detalhes da Lei".CIDADE];
        $this->load->view("leis/detalhe_lei", $data);
    }

    public function cadEmendaLei()
    {
        $data = ["titulo"=>"Cadastro de Emenda".CIDADE];
        $this->load->view("leis/cad_emenda", $data);
    }

    

}
        
    /* End of file  Leis.php */
        
                            