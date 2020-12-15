<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->library('smarty_parser');
		
		$this->smarty_parser->assign('is_ie', $this->is_ie());
		$this->smarty_parser->assign('is_ie6', $this->is_ie6());
		$this->smarty_parser->assign('is_ie7', $this->is_ie7());
		$this->smarty_parser->assign('is_ie8', $this->is_ie8());
		$this->smarty_parser->assign('is_ie9', $this->is_ie9());
		$this->smarty_parser->assign('is_iphone', $this->is_iphone());
		$this->smarty_parser->assign('is_ipad', $this->is_ipad());
		$this->smarty_parser->assign('is_android', $this->is_android());
		$this->smarty_parser->assign('is_sumaho', $this->is_sumaho());
	}
	
	public function assign($key, $data)
	{
		$this->smarty_parser->assign($key, $data);
	}
	
	protected function check_agent()
	{
		$http_user_agent = $this->input->server('HTTP_USER_AGENT');
		return ($http_user_agent) ? $http_user_agent : '';
	}

	protected function is_sumaho()
	{
		if ($this->is_iphone() || $this->is_android()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	protected function is_ie()
	{
		return preg_match('/MSIE/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_ie6()
	{
		return preg_match('/MSIE 6/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_ie7()
	{
		return preg_match('/MSIE 7/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_ie8()
	{
		return preg_match('/MSIE 8/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_ie9()
	{
		return preg_match('/MSIE 9/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_iphone()
	{
		return preg_match('/iPhone/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_ipad()
	{
		return preg_match('/iPad/', $this->check_agent()) ? TRUE : FALSE ;
	}
	
	protected function is_android()
	{
		return preg_match('/Android/', $this->check_agent()) ? TRUE : FALSE ;
	}
}