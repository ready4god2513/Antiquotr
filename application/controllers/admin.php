<?php

class Admin_Controller extends Template_Controller
{
	
	public $template = 'templates/default';
	
	
	public function index()
	{
		url::redirect('');
	}
	
	
	public function quotes()
	{
		$quotes = ORM::factory('quote')->find_all_pending();
		$this->template->body = View::factory('quote/admin')
			->set('quotes', $quotes);
	}
	
	public function authors()
	{
		$authors = ORM::factory('author')->find_all_pending();
		$this->template->body = View::factory('authors/admin')
			->set('authors', $authors);
	}
	
	
	public function activate_quote($id = '')
	{
		ORM::factory('quote', $id)->activate();
		url::redirect(request::referrer());
	}
	
	
	
	public function destroy_quote($id = '')
	{
		ORM::factory('quote', $id)->delete();
		url::redirect(request::referrer());
	}
	
	
	public function activate_author($id = '')
	{
		ORM::factory('author', $id)->activate();
		url::redirect(request::referrer());
	}
	
	
	
	public function destroy_author($id = '')
	{
		ORM::factory('author', $id)->delete();
		url::redirect(request::referrer());
	}
	
}