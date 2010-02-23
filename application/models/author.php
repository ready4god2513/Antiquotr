<?php

class Author_Model extends ORM
{
	protected $belongs_to = array('quote');
	protected $sorting = array('name' => 'ASC');
	
	
	public function __construct($id = '')
	{
		parent::__construct($id);
		
		// Only find active quotes by default
		$this->where('active', true);
	}
	
	
	/**
	 * Find a random author
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return Author_Model
	 */
	public function random()
	{
		return $this->orderby(NULL, 'RAND()')->find();
	}
	
	
	/**
	 * Find all pending authors
	 * @Developer Brandon Hansen
	 * @Date February 19, 2010
	 * @Return ORM_Iterator_Object
	 */
	 public function find_all_pending()
	 {
	 	return $this->where('active', false)->find_all();
	 }
	 
	 
	 /** 
	 * Find an author by ID
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return Quote_Model
	 */
	public function find_by_id($id)
	{
		return $this->where('id', $id)->find();
	}
	
	
	/**
	 * Create an author
	 * @Developer Brandon Hansen
	 * @Date February 19, 2010
	 * @Param (string) $author
	 * @Return bool
	 */
	public function create($author = '')
	{
		$author = trim($author);

		if(!$author)
		{
			return false;
		}
		else if($this->author_exists($author))
		{
			return false;
		}
		
		$this->name = $author;
		$this->deactivate();
		
		return true;
	}
	
	
	/** 
	 * Deactivate an author.  This takes it out of rotation
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return void
	 */
	public function deactivate()
	{
		$this->active = false;
		$this->save();
	}
	
	
	/**
	 * Activate a quote.  This puts it into the rotation
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return void
	 */
	public function activate()
	{
		$this->active = true;
		$this->save();
	}
	
	
	/**
	 * Check to see if an author already exists
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Param (string) $author
	 * @Return bool
	 */
	private function author_exists($author = '')
	{
		return (bool) $this->where('name', $author)->count_all();
	}
}