<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//https://avenir.ro/how-to-make-truly-seo-urls-in-codeigniter-without-duplicate-content-on-underscore-urls/
class Curlybytes_Controller extends CI_Controller {



    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'layout','form_validation'));
        $this->load->helper(array('url','form','text', 'security'));
        $this->layout->add_custom_meta('meta', array(
            'charset' => 'utf-8'
        ));
        $this->layout->add_custom_meta('meta', array(
            'http-equiv' => 'X-UA-Compatible',
            'content' => 'IE=edge'
        ));
        $this->layout->add_css_file('https://use.fontawesome.com/releases/v5.15.4/css/all.css');
        $this->layout->add_css_files(
            array('css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap'),
            'https://fonts.googleapis.com/');
        $this->layout->add_css_file('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');



       
     
 
    } 

   
  
}