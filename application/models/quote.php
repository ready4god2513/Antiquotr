<?php

class Quote_Model extends ORM
{
	protected $has_one = array('author');
	
	
	/**
	 * Find a random quote
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return Quote_Model
	 */
	public function random()
	{
		return $this->orderby(NULL, 'RAND()')->find();
	}
	
	
	/**
	 * Find a quote by ID
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Return Quote_Model
	 */
	public function find_by_id($id)
	{
		return $this->where('id', $id)->find();
	}
	
	
	/**
	 * Add a quote to the database
	 * @Developer Brandon Hansen
	 * @Date Febuary 19, 2010
	 * @Param (string) $quote
	 * @Param (Author_Model) $author
	 * @Return void
	 */
	public function create($quote, Author_Model $author)
	{
		$quote = trim($quote);
		
		
		if(!$quote)
		{
			return false;
		}
		
		$this->quote = $quote;
		$this->author_id = $author->id;
		$this->deactivate();
	}
	
	
	/**
	 * Deactivate a quote.  This takes it out of rotation
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
}