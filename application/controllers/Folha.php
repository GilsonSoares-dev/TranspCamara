<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Folha extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = ["titulo"=>"Folha de Pagamento" . CIDADE];
        $this->load->view("folha/lista_folha", $data);
                
    }
    

}
        
    /* End of file  Folha.php */
        
                            