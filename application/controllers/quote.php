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
			->set('quote', $this->quote->random())
			->set('author', $this->author->random());
	}
	
	public function view($quote, $author)
	{
		$this->template->body = View::factory('quote/view')
			->set('quote', $this->quote->find_by_id($quote))
			->set('author', $this->author->find_by_id($author));
	}
	
	public function create()
	{
		$this->template->body = View::factory('quote/create');
	}
	
}