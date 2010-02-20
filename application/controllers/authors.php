<?php

class Authors_Controller extends Template_Controller
{
	
	public $template = 'templates/default';
	
	
	public function new_()
	{
		$this->template->body = View::factory('authors/create');
	}
	
	
	public function create()
	{
		if(ORM::factory('author')->create($this->input->post('author')))
		{
			Session::instance()->set('success', 'Another one bites the dust. - The Beatles');
		}
		else
		{
			Session::instance()->set('error', 'That author has already been appreciated. - Anon e. Mouse');
		}
		
		url::redirect('');
	}
	
	
	public function activate($id = '')
	{
		ORM::factory('author', $id)->activate();
		url::redirect(request::referrer());
	}
	
	
	public function destroy($id = '')
	{
		ORM::factory('author', $id)->delete();
		url::redirect(request::referrer());
	}
	
}