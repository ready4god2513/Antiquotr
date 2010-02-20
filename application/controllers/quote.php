<?php

class Quote_Controller extends Template_Controller
{
	
	public $template = 'templates/default';
	
	public function __construct()
	{
		parent::__construct();
		$this->quote = ORM::factory('quote');
		$this->author = ORM::factory('author');
	}
	
	
	public function index()
	{
		$this->template->body = View::factory('quote/view')
			->set('quote', $this->quote->random());
	}
	
	
	public function view($id = '')
	{
		$this->template->body = View::factory('quote/view')
			->set('quote', $this->quote->find_by_id($id));
	}
	
	
	public function missing()
	{
		header('HTTP/1.1 404 File Not Found');
		$this->template->body = View::factory('quote/missing');
	}
	
	
	public function new_()
	{
		$this->template->body = View::factory('quote/create');
	}
	
	
	public function create()
	{
		$this->quote->create($this->input->post('quote'), $this->author->random());
	}
	
}