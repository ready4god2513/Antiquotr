<?php

class Quote_Model extends ORM
{
	
	
	public function random()
	{
		return $this->orderby(NULL, 'RAND()')->find();
	}
	
	public function find_by_id($id)
	{
		return $this->where('id', $id)->find();
	}
}