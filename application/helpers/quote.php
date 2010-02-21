<?php

class Quote_Core
{
	
	public static function truncate($text) 
	{
        // Change to the number of characters you want to display
        $chars = 25;
        $text = $text." ";
        $text = substr($text,0,$chars);
        return substr($text,0,strrpos($text,' '));
    }
	
}