<?php
// The visiter can't access to this PATH : 
// localhost:8000/application/controllers/PageController
// it gives him Directory access is forbidden.
// this is the explanation to the function below 
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function index(){
        echo 'Hey guys';
    }

    public function aboutus(){
        echo "I am about us page";
    }

    public function showTextInParams($text){
        $this->load->view('show_text');
        echo $text;
    }
}
