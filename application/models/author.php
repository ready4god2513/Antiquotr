<?php

class Author_Model extends ORM
{
	protected $belongs_to = array('quote');
	
	
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
}