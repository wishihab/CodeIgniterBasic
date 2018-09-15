<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index(){

		$this->load->database('dota2storeid');
		
	}



	public function admin(){
		echo "<center>Incorrect IP</center>";
	}

}
