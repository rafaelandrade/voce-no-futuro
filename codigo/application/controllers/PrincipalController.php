<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalController extends CI_Controller {

    function _construct(){
        parent::_construct();
        $this->load->helper('url');
    }

	public function index()
	{  
		$this->load->model('principal');
        $data = $this->principal->indexValues();
        
        $this->load->view('testeVocacional', $data);
	}
    
    public function principal(){
        $this->load->view('principal');
    }
    
    //public function envio()
   // {
    //    echo("entro");    
   // }
    
   
    
    public function validate(){
        
        
        $this->form_validation->set_rules(
            'profissao',
            '', 'required', array("required"=>"Por favor escolher a opção da profissão que deseja.")
        );
        
        $this->form_validation->set_rules(
            'viagem',
            '', 'required', array("required"=>"Por favor escolher a opção da viagem que deseja.")
        );
        
        $this->form_validation->set_rules(
            'familia_admira',
            '', 'required', array("required"=>"Por favor escolher a opção da familia que mais admira.")
        );
        
        $this->form_validation->set_rules(
            'empresa',
            '', 'required', array("required"=>"Por favor escolher a opção da empresa que deseja.")
        );
        
        $this->form_validation->set_rules(
            'pais',
            '', 'required', array("required"=>"Por favor escolher a opção do pais que mais admira.")
        );
        
        $this->form_validation->set_rules(
            'esporte',
            '', 'required', array("required"=>"Por favor escolher a opção esporte que deseja.")
        );
        
        $this->form_validation->set_rules(
            'ambiente',
            '', 'required', array("required"=>"Por favor escolher a opção do ambiente que deseja.")
        );
        
        $this->form_validation->set_rules(
            'local',
            '', 'required', array("required"=>"Por favor escolher a opção do local que deseja.")
        );
        
        $this->form_validation->set_rules(
            'pessoa',
            '', 'required', array("required"=>"Por favor escolher a opção de pessoa que deseja.")
        );
        
        $this->form_validation->set_rules(
            'cursos',
            '', 'required', array("required"=>"Por favor selecione se caso NAO deseje visualizar os cursos.")
        );
        
        if($this->form_validation->run() == false){
            
            $this->load->view('testeVocacional');
            
        } else {
           // $this->load->view('cursos');
            //store things into the database
            $this->load->view('principal');
        }
    }
    
    public function testevocacional()
	{  
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if($this->form_validation->run() == false){
          
        }else{
            $dados_form = $this->input->post();
            print_r($dados_form);
            
            $this->load->view('principal');
        }
        
		$this->load->view('testeVocacional');
        
	}
    
}
