<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Diarias extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function diarias()
    {
        $data = ["titulo"=>"Diárias e Passagens".CIDADE];
        $this->load->view("diarias/lista_diarias", $data);
                
    }
    
    public function detalheDiarias()
    {
        $data = ["titulo"=>"Diárias e Passagens".CIDADE];
        $this->load->view("diarias/detalhe_diaria", $data);
    }

}
        
    /* End of file  Diarias.php */
        
                            