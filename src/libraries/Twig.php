<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');



class Twig {
	private $loader;
	private $twig;
	private $CI;
    
    function __construct($params) {
		$this->CI = & get_instance();
		$cachePath = APPPATH . 'cache';

		$this->loader = new \Twig\Loader\FilesystemLoader(dirname(APPPATH) . '/public/theme/' . $params['theme']);
		if(!is_writable($cachePath) || ENVIRONMENT == "development") {
			$this->twig = new \Twig\Environment($this->loader, array('auto_reload' => true));          
        } else {
        	$this->twig = new \Twig\Environment($this->loader, array('cache' => $cachePath, 'auto_reload' => true));                      
        }
	}
	
	public function render($tpl, $data, $return = FALSE) {
		$output = $this->twig->render($tpl, $data);
        if ($return) return $output;
    }
    
    public function __call($method, $args) {
        return call_user_func_array(array($this->twig, $method), $args);
    }
}