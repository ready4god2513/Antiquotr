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
	
	
	public function all()
	{
		$this->template->body = View::factory('quote/index')
			->set('quotes', $this->quote->find_all());
	}
	
	
	public function feed()
	{
		$this->auto_render = false;
		View::factory('quote/feed')
			->set('quotes', $this->quote->find_most_recent())
			->render(true);
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
		$this->template->body = View::factory('quote/create')
			->set('authors', $this->author->select_list('id', 'name'));
	}
	
	
	public function create()
	{
		$author = $this->author->find_by_id($this->input->post('author'));
		if(!$author->loaded)
		{
			$author = $this->author->random();
		}
		
		if($this->quote->create($this->input->post('quote'), $author))
		{
			Session::instance()->set('success', 'Great scott!  That quote is awesome! -Me');
		}
		else
		{
			Session::instance()->set('error', 'That is lamest quote ever. Fix it now. - Your mom');
		}
		
		url::redirect('');
	}
	
}