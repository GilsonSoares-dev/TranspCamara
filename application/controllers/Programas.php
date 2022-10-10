<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Programas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = ["titulo"=>"Programas e Ações".CIDADE];
        $this->load->view("programas/lista_programas", $data);
                
    }
     

}
        
    /* End of file  Programas.php */
        
                            