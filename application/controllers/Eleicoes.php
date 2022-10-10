<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Eleicoes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Eleições de Conselhos".CIDADE];
        $this->load->view("eleicoes/eleicoes", $data);
                
    }

    public function neleicao()
    {
        $data = ["titulo"=>"Eleições de Conselhos" . CIDADE];
        $this->load->view("eleicoes/neleicao",$data);
    }

    public function edeleicao()
    {
       $data = ["titulo"=>"Eleições de Conselhos" . CIDADE];
       $this->load->view("eleicoes/edeleicao",$data);
    }

    public function dteleicao()
    {
        $data = ["titulo"=>"Eleições de Conselhos" . CIDADE];
        $this->load->view("eleicoes/dteleicao",$data);

    }

}
        
    /* End of file  Concursos.php */
        