<?php

// If "required" is sent in, that was done by a robot.  Get out of here.
if(Input::instance()->post('required'))
{
	url::redirect('http://google.com');
	die();
}