<?php
defined('BASEPATH') OR exit('No direct script access allowed');
        

class Principal extends CI_Model {

    public function indexValues(){
        $data["title"] = "AHS";
        
        return $data;
    }
}