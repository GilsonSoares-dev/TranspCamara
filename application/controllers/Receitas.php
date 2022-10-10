<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Receitas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = ["titulo"=>"Receitas".CIDADE];
        $this->load->view("receitas/lista_receitas", $data);
                
    }  

}
        
    /* End of file  Receitas.php */
        
                            