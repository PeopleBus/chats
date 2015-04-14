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
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    public function index() {
        $data['all_candidates'] = $this->Candidate->get_all();
        $data['total_all_vote'] = $this->Candidate->count_all_vote();
        
//        $data['last_activity'] = $this->session->userdata('last_activity');
//        $data['user_agent'] = $this->session->userdata('user_agent');
//        $data['session_id'] = $this->session->userdata('session_id');
//        $data['ip_address'] = $this->session->userdata('ip_address');

        $this->load->library('layout');
        $this->layout->view("home", $data);
//        $this->load->view("home", $data);
    }

    public function chart() {
        
    }

    public function faq() {
        
    }

    public function about() {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE) {
            //validation fails
            $this->load->library('layout');
            $this->layout->view('about');
        } else {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'user@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'user@gmail.com';
            $config['smtp_pass'] = 'password';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                // mail sent
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('about');
            } else {
                //error
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('about');
            }
        }
    }

    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str) {
        if (!preg_match("/^[a-zA-Z ]+$/", $str)) {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
