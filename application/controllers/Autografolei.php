<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Autografolei extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Autógrafos de Lei".CIDADE];
        $this->load->view("autografolei/autografolei", $data);
                
    }

    public function nautografo()
    {
        $data = ["titulo"=>"Cadastro de Autógrafo de Lei" . CIDADE];
        $this->load->view("autografolei/nautografo",$data);
    }

    public function edautografo()
    {
       $data = ["titulo"=>"Editar Autógrafo de Lei" . CIDADE];
       $this->load->view("autografolei/edautografo",$data);
    }

    public function dtautografo()
    {
        $data = ["titulo"=>"Detalhes do Autógrafo de Lei" . CIDADE];
        $this->load->view("autografolei/dtautografo",$data);

    }

}
        
    /* End of file  Autografolei.php */
        