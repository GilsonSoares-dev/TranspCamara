<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Resolucao extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Resolução".CIDADE];
        $this->load->view("resolucao/resolucao", $data);
                
    }

    public function nresolucao()
    {
        $data = ["titulo"=>"Cadastro de Resolução" . CIDADE];
        $this->load->view("resolucao/nresolucao",$data);
    }

    public function edresolucao()
    {
       $data = ["titulo"=>"Editar Resoluçãoi" . CIDADE];
       $this->load->view("resolucao/edresolucao",$data);
    }

    public function dtresolucao()
    {
        $data = ["titulo"=>"Detalhes da Resolução" . CIDADE];
        $this->load->view("resolucao/dtresolucao",$data);

    }

}
        
    /* End of file  Resolucao.php */
        