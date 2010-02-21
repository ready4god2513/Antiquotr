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
		return $this->where('active', true)->orderby(NULL, 'RAND()')->find();
	}
	
	
	/**
	* Find all pending quotes
	* @Developer Brandon Hansen
	* @Date February 19, 2010
	* @Return ORM_Iterator_Object
	*/
	public function find_all_pending()
	{
 		return $this->where('active', false)->find_all();
	}
	 
	 
	/**
	* Find the most recent 20 quotes
	* @Developer Brandon Hansen
	* @Date February 19, 2010
	* @Return ORM_Iterator_Object
	*/
	public function find_most_recent()
	{
 		return $this->where('active', true)->orderby('created_at', 'DESC')->find_all(20);
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