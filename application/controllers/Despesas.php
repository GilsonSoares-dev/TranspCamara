<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Despesas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = ["titulo"=>"Despesas".CIDADE];
        $this->load->view("despesas/lista_despesas", $data);
                
    }
    

    public function detalheDespesas()
    {
        $data = ["titulo"=>"Detalhes da Despesa".CIDADE];
        $this->load->view("despesas/detalhe_despesa", $data);
    }


    public function diarias()
    {
        $data = ["titulo"=>"Diárias e Passagens".CIDADE];
        $this->load->view("despesas/lista_diarias", $data);
    }

    public function duodecimos()
    {
        $data = ["titulo"=>"Duodécimos".CIDADE];
        $this->load->view("despesas/lista_duodecimos", $data);
    }

}
        
    /* End of file  Despesas.php */
        
                            