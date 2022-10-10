<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Projetolei extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Projetos de Lei".CIDADE];
        $this->load->view("projetolei/projetolei", $data);
                
    }

    public function nprojetolei()
    {
        $data = ["titulo"=>"Cadastro de Projeto de Lei" . CIDADE];
        $this->load->view("projetolei/nprojetolei",$data);
    }

    public function edprojetolei()
    {
       $data = ["titulo"=>"Editar Projeto de Lei" . CIDADE];
       $this->load->view("projetolei/edprojetolei",$data);
    }

    public function dtprojetolei()
    {
        $data = ["titulo"=>"Detalhes do Projeto de Lei" . CIDADE];
        $this->load->view("projetolei/dtprojetolei",$data);

    }

}
        
    /* End of file  Projetolei.php */
        