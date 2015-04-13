<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author taliou
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index() {
        $page = 'home';
        $this->load->library('layout');
        $this->layout->view('home');
//                ->layout->view('home.php');
//                ->ajouter_css('screen');
//                ->ajouter_css('bootstrap')
//                ->ajouter_js('jquery')
//                ->ajouter_js('bootstrap');
        
    }
    
    public function chart() {
    }
    
    public function faq() {
    }
    
    public function contact() {
    }

}
