<?php 
/**
* @file welcome.php
* @synopsis  welcome
* @author Yee, <rlk002@gmail.com>
* @version 1.0
* @date 2013-02-18 14:45:26
*/


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends INX_Controller
{

	public function index()
	{
		$this->smarty->display('welcome_message.tpl');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
