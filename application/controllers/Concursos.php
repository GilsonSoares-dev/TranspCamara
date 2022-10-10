<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Concursos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Concursos Públicos".CIDADE];
        $this->load->view("concursos/concursos", $data);
                
    }

    public function nconcurso()
    {
        $data = ["titulo"=>"Cadastro de Concurso" . CIDADE];
        $this->load->view("concursos/nconcurso",$data);
    }

    public function edconcurso()
    {
       $data = ["titulo"=>"Editar Concurso" . CIDADE];
       $this->load->view("concursos/edconcurso",$data);
    }

    public function dtconcurso()
    {
        $data = ["titulo"=>"Editar Concurso" . CIDADE];
        $this->load->view("concursos/dtconcurso",$data);

    }

}
        
    /* End of file  Concursos.php */
        